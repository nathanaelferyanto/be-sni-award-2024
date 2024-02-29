@extends('admin.layouts.master')

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <a href="/assessment_sub_kategori/tambah" class="btn btn-primary float-end mb-4">Tambah</a>
        </div>
        <div class="card-body px-5 pt-2 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0 text-center">
              <thead>
                <tr>
                    <th>Id</th>
                    <th>Assessment Kategori Id</th>
                    <th>Nama</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($assessment_sub_kategori as $assessment_sub_kategori)
                <tr>
                    {{-- <td>{{$loop->iteration}}</td> --}}
                    <td>{{$assessment_sub_kategori->id}}</td>
                    <td>{{$assessment_sub_kategori->id}}</td>
                    <td>{{$assessment_sub_kategori->nama}}</td>
                    <td>
                        <a href="/assessment_sub_kategori/{{$assessment_sub_kategori ->id}}/ubah" class="btn btn-primary float-end mb-2">Edit</a>
                        <form action="/assessment_sub_kategori/{{$assessment_sub_kategori->id}}" method="POST">
                            @method("DELETE")
                            @csrf
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
