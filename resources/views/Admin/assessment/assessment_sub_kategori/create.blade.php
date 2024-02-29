@extends('admin.layouts.master')

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Tambah Sub Kategori</h6>
        </div>
        <div class="card-body px-3 pt-0 pb-2">
            <form action='/assessment_sub_kategori' method="POST">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Assessment Kategori</label>
                  <select name="" class="form-control">
                    @foreach ($assessment_kategori as $item)
                        <option value="{{$assessment_kategori->nama}}">{{$assessment_kategori->nama}}</option>
                    @endforeach
                  </select>
                  <label for="exampleInputEmail1">Nama</label>
                  <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Sub Kategori">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
      </div>
    </div>
</div>
@endsection
