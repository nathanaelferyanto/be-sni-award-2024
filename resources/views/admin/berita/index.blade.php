@extends('admin.layouts.master')

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Berita</h6>
          <a href="/berita/tambah" class="btn btn-primary float-end mb-4">Tambah</a>
        </div>
        <div class="card-body px-5 pt-2 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0 text-center">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Judul Berita</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kategori</th>
                  <th class="text-secondary opacity-7">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($berita as $berita)
                <tr>
                  <td>{{$berita->judul_berita}}</td>
                  <td>{{$berita->tanggal}}</td>
                  <td>{{$berita->kategori_berita->nama}}</td>
                  <td>
                    <a href="/berita/{{$berita->id}}/edit" class="btn btn-warning">Edit</a>
                    <form class="hapus" action="/berita/{{$berita->id}}/edit" method="POST">
                      @method("DELETE")
                      @csrf
                      <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                  </td>
                </tr>
                @endforeach
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
