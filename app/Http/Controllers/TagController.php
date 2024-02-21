<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function getAllTag(){
        $tag = Tag::all();
        return view('pages/berita/tag', [
            'tag'=>$tag,
        ]);
    }

    public function storeTag(Request $request){
        $data = [
            'nama' => $request->nama,
        ];
        //aksi untuk create data ke table databse
        return Tag::create($data);
        // dd($data);
        // return response()->json([
        //     'message' => 'success', 
        //     'payload' => $data
        // ], 200);
    }
}
