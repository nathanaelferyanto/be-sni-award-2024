<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\KategoriBerita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        $berita = Berita::all();
        // dd($berita);
        return view('admin.berita.index',compact(['berita']));
    }
    public function create()
    {
        $kategori = DB::table('kategori_berita')->get('nama');
        // dd($kategori);
        return view('admin.berita.create', compact(['kategori']));
    }
    public function store(Request $request)
    {
        $request->validate([
            'judul_berita' =>'required|max:150',
            'deskripsi' => 'required|min:5',
            'tanggal' => 'required',
        ]);
        Berita::create([
            'user_id' => 1,//sementara, kalau udah ada auth ambil dari id user di session
            'judul_berita'=> $request->judul_berita,
            'deskripsi'=> $request->deskripsi,
            'kategori_berita_id' => 1,
            'tanggal'=> $request->tanggal,
            // 'file'=> $request->file,
            'file'=> 'kzmlckvzlckv',
        ]);

        return redirect('/berita')->with('success','Berita berhasil ditambahkan');
    }

    public function edit($id){
        $berita = Berita::find($id);
        return view('admin.berita.edit',[
            'berita' => $berita
        ]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'judul_berita' =>'required|max:150',
            'deskripsi' => 'required|min:5',
            'tanggal' => 'required',
        ]);
        $berita = Berita::find($id);
        $berita->update([
            'user_id' => 1,//sementara, kalau udah ada auth ambil dari id user di session
            'judul_berita'=> $request->judul_berita,
            'deskripsi'=> $request->deskripsi,
            'kategori_berita_id' => 1,
            'tanggal'=> $request->tanggal,
            // 'file'=> $request->file,
        ]);

        return redirect('/berita')->with(['success'=>'Berita berhasil diubah']);
    }

    public function destroy($id){
        $berita = Berita::find($id);
        $berita->delete();
        return redirect('/berita')->with(['success'=>'Berita berhasil dihapus']);
    }
}
