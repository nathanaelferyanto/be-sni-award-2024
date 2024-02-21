<?php

namespace App\Http\Controllers;

use App\Models\KategoriBerita;
use Illuminate\Http\Request;

class KategoriBeritaController extends Controller
{
    public function index()
    {
        $kategori_berita = KategoriBerita::all();
        return view('pages.kategori_berita.index',compact(['kategori_berita']));
    }

    public function create()
    {
        return view('pages.kategori_berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' =>'required|max:50',
        ]);
        KategoriBerita::create([
            'nama' => $request -> nama,
        ]);

        return redirect('/kategori_berita')->with('success','Kategori Berita berhasil ditambahkan');
    }
}
