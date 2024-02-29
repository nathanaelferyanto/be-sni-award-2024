<?php

namespace App\Http\Controllers;

use App\Models\AssessmentKategori;
use App\Models\AssessmentSubKategori;
use Illuminate\Http\Request;

class AssessmentKategoriController extends Controller
{
    //
    public function index()
    {
        $assessment_kategori = AssessmentKategori::get();
        $assessment_sub_kategori = AssessmentSubKategori::get();
        // dd($assessment_sub_kategori);
        return view('admin.assessment.assessment_kategori.index',[
            'assessment_kategori' => $assessment_kategori,
            'list_assessment_kategori' => $assessment_kategori,
            'assessment_sub_kategori' => $assessment_sub_kategori,
        ]);
    }

    public function create()
    {
        return view('admin.assessment.assessment_kategori.create');
    }

    public function store(Request $request)
    {
        AssessmentKategori::create([
            'nama' => $request->nama,
        ]);

        return redirect('/assessment_kategori');
    }

    public function edit($id)
    {
        $AssessmentKategori = AssessmentKategori::find($id);
        return view('admin.assessment.assessment_kategori.edit',[
            'assessment_kategori' => $AssessmentKategori
        ]);
    }

    public function update(Request $request, $id){
        $assessment_kategori = AssessmentKategori::find($id);
        $assessment_kategori->update([
            'nama' => $request->nama,
        ]);

        return redirect('/assessment_kategori')->with('success','Kategori berhasil diubah');
    }

    public function destroy($id){
        // dd($id);
        $assessment_kategori = AssessmentKategori::find($id);
        $assessment_kategori->delete();
        return redirect('/assessment_kategori')->with('success','Kategori berhasil dihapus');
    }
}
