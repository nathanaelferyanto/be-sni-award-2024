@extends('admin.layouts.master')

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Edit Berita</h6>
        </div>
        <div class="card-body px-3 pt-0 pb-2">
          @if($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach($errors->all() as $error)
                  <li>{{$error}}</li>
                @endforeach
              </ul>
            </div>
          @endif
            <form action="/berita/{{$berita->id}}/edit" method="POST">
                @method('put')
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Judul Berita</label>
                  <input name="judul_berita" type="string" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tambahkan Judul" value="{{$berita->judul_berita}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Deskripsi</label>
                    <input name="deskripsi" type="string" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tambahkan Deskripsi" value={{$berita->deskripsi}}>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal</label>
                    <input name="tanggal" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Tanggal">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">File</label>
                    <input name="file" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tambahkan File">
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
      </div>
    </div>
</div>
@endsection
