<?php

namespace App\Http\Controllers;

use App\Models\AssessmentKategori;
use App\Models\AssessmentSubKategori;
use Illuminate\Http\Request;

class AssessmentSubKategoriController extends Controller
{
    //
    public function index()
    {
        // $assessment_sub_kategori = AssessmentSubKategori::all();
        // return view('admin.assessment.assessment_kategori.index',compact(['assessment_sub_kategori']));
    }

    public function create()
    {
        $assessment_kategori = AssessmentKategori::get('nama');
        return view('admin.assessment.assessment_sub_kategori.create', compact('assessment_kategori'));
    }

    public function store(Request $request)
    {
        AssessmentSubKategori::create([
            'assessment_kategori_id' => $request->assessment_kategori_id,
            'nama' => $request->nama,
        ]);
        // $sub_kategori = new AssessmentSubKategori();
        // $sub_kategori->assessment_kategori_id = $request->assessment_kategori_id;
        // $sub_kategori->nama = $request->nama;
        // $sub_kategori->save();

        return redirect()->route('ass_kategori.index');
    }

    public function edit($id)
    {
        $AssessmentSubKategori = AssessmentSubKategori::find($id);
        return view('admin.assessment.assessment_sub_kategori.edit',[
            'assessment_sub_kategori' => $AssessmentSubKategori
        ]);
    }

    public function update(Request $request, $id){
        $assessment_sub_kategori = AssessmentSubKategori::find($id);
        $assessment_sub_kategori->update([
            'assessment_kategori_id' => $request->assessment_kategori_id,
            'nama' => $request->nama,
        ]);

        return redirect('/admin/assessment_kategori')->with('success','Sub Kategori berhasil diubah');
    }

    public function destroy($id){
        $assessment_sub_kategori = AssessmentSubKategori::find($id);
        $assessment_sub_kategori->delete();
        return redirect()->route('ass_kategori.index')->with('success', 'Sub Kategori berhasil dihapus');
    }
}
