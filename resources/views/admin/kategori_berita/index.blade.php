@extends('admin.layouts.master')

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Kategori</h6>
          <a href="/kategori_berita/tambah" class="btn btn-primary float-end">Tambah</a>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0 text-center">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Kategori</th>
                  <th class="text-secondary opacity-7"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($kategori_berita as $kategori_berita)
                <tr>
                  <td>{{$kategori_berita->nama}}</td>
                  <td>
                    <a href="/kategori_berita/{{$kategori_berita->id}}/edit" class="btn btn-warning">Edit</a>
                    <form class="hapus" action="/kategori_berita/{{$kategori_berita->id}}/edit" method="POST">
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
