<?php

namespace App\Http\Controllers\Peserta;

use App\Http\Controllers\Controller;
use App\Mail\AuthPesertaMail;
use App\Models\Peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthPesertaController extends Controller
{
    public function loginPesertaView() {
        return view('peserta.auth.login');
    }

    public function loginPeserta(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email Wajib Diisi',
            'password.required' => 'Password Wajib Diisi',
        ]);
        $infoLogin = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::guard('peserta')->attempt($infoLogin)) {
            if (Auth::guard('peserta')->user()->email_verified_at != null) {
                // dd('berhasil melakukan login');
                return redirect('/dashboard')->with('success', 'Berhasil masuk');
            }else {
                Auth::guard('peserta')->logout();
                return redirect('/masuk')->withErrors('Anda belum melakukan verifikasi. silahkan lakukan verifikasi terlebih dahulu');
            }
        }else {
            return redirect('/masuk')->withErrors('Email atau Password salah');
        }
    }

    public function registrasiPesertaView() {
        return view('peserta.auth.register');
    }

    public function registrasiPeserta(Request $request) {
        $request->validate([
            'email' => 'required|unique:peserta|email',
            'password' => 'required|min:8|confirmed',
        ], [
            'email.required' => 'Email Wajib Diisi',
            'email.unique' => 'Email telah terdaftar sebagai peserta',
            'password.required' => 'Password Wajib Diisi',
            'password.min' => 'Panjang Password minimal 8 karakter',
            'password.confirmed' => 'Harap konfirmasi password anda',
        ]);
        $dataRegistrasi = [
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'verify_key' => Str::random(100),
            'kategori_organisasi_id' => 1,//data dummy
        ];
        Peserta::create($dataRegistrasi);
        $details = [
            'nama' => $dataRegistrasi['nama'],
            'datetime' => date('Y-m-d H:i:s'),
            'website' => 'SNI Award',
            'url' => 'http://'.request()->getHttpHost().'/verifikasi'.'/'.$dataRegistrasi['verify_key'],
        ];
        Mail::to($dataRegistrasi['email'])->send(new AuthPesertaMail($details));
        return redirect('/masuk')->with('success', 'Berhasil melakukan registrasi');
    }

    public function VerifikasiPeserta($verify_key) {
        $checkKey = Peserta::select('verify_key')->where('verify_key', $verify_key)->exists();
        if ($checkKey) {
            $user = Peserta::where('verify_key', $verify_key)
                ->update(['email_verified_at' => date('Y-m-d H:i:s')]);
            return redirect('/masuk')->with('success', 'Berhasil melakukan verifikasi');
        }else {
            return redirect('/masuk')
                ->withErrors('verify key salah, silahkan coba kembali')
                ->withInput();
        }
    }

    public function logoutPeserta() {
        Auth::guard('peserta')->logout();
        return redirect('/');
    }
}
