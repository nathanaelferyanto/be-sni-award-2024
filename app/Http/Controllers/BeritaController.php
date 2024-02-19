<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index() 
    {
        $berita = Berita::find(1);
        $kategori_berita = $berita->kategori_berita;
        dd($kategori_berita);
        $berita = Berita::all();
        return view('pages.berita.index',compact(['berita']));
    }
    public function create()
    {
        return view('pages.berita.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'judul_berita' =>'required|max:150',
            'deskripsi' => 'required|min:50',
            'tanggal' => 'required',
        ]);
        Berita::create([
            'user_id' => 1,//sementara, kalau udah ada auth ambil dari id user di session
            'judul_berita'=> $request->judul_berita,
            'deskripsi'=> $request->deskripsi,
            'kategori_id' => 1,
            'tanggal'=> $request->tanggal,
            'file'=> $request->file,
        ]);
        
        return redirect('/berita')->with('success','Berita berhasil ditambahkan');
    }

    public function edit($id){
        $berita = Berita::find($id);
        return view('pages.berita.edit',[
            'berita' => $berita
        ]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'judul_berita' =>'required|max:150',
            'deskripsi' => 'required|min:50',
            'tanggal' => 'required',
        ]);
        $berita = Berita::find($id);
        $berita->update([
            'user_id' => 1,//sementara, kalau udah ada auth ambil dari id user di session
            'judul_berita'=> $request->judul_berita,
            'deskripsi'=> $request->deskripsi,
            'kategori_id' => 1,
            'tanggal'=> $request->tanggal,
            'file'=> $request->file,
        ]);

        return redirect('/berita')->with(['success'=>'Berita berhasil diubah']);
    }

    public function destroy($id){
        $berita = Berita::find($id);
        $berita -> delete();
        return redirect('/berita')->with(['success'=>'Berita berhasil dihapus']);
    }
}
