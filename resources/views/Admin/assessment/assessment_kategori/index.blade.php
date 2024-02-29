@extends('admin.layouts.master')

@section('content')

<script>
  function openDeleteAlert() {
    document.getElementById('deleteKategori').style.display = 'block';
  }
  function closeDeleteAlert() {
    document.getElementById('deleteKategori').style.display = 'none';
  }
</script>

{{-- Pop up tambah --}}
<!-- Pop up kategori -->
<div class="modal fade" id="tambahKategori" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <form class="modal-content" method="POST" action="/assessment_kategori">
      @csrf
      <div class="modal-header" style="border: none;">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Tambah Kategori</h1>
      </div>
      <div class="modal-body" style="border: none;">
        <div action="" class="pb-0 mb-0">
          <div class="d-flex flex-column gap-2">
              <h6 class="ms-1 mb-0">Kategori</h6>
              <input type="text" name="nama" class="form-control form-control-lg ps-4" placeholder="Tuliskan Jenis Kategori" style="font-size: 100%;"/>
          </div>
        </div>
      </div>
      <div class="modal-footer gap-2" style="border: none;">
        <button class="btn nonactive"  data-bs-toggle="modal" data-bs-dismiss="modal" aria-label="Close">Batal</button>
        <button type="submit" class="btn" data-bs-toggle="modal" >Simpan</button>
      </div>
    </form>
  </div>
</div>

<!-- Pop up sub kategori -->
<div class="modal fade" id="tambahSubKategori" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <form action="/assessment_sub_kategori" method="POST" class="modal-content">
          @csrf
      <div class="modal-header" style="border: none;">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Tambah Sub Kategori</h1>
      </div>
      <div class="modal-body" style="border: none;">
        <div class="d-flex flex-column gap-2 pb-0 mb-0">
          <div class="d-flex flex-column gap-2 mb-3">
            <h6 class="ms-1 mb-0">Kategori</h6>
            <select class="form-select form-control-lg ps-4" aria-label="Default select example" name="assessment_kategori_id">
              <option hidden>Pilih Kategori</option>
              @foreach ($assessment_kategori as $data)
                  <option value="{{ $data->id }}">{{ $data->nama }}</option>
              @endforeach

              {{-- <option value="1">Kepemimpinan</option>
              <option value="2">Strategi</option>
              <option value="3">Pelanggan</option>
              <option value="4">dan lain-lain..</option> --}}
            </select>
          </div>
          <div class="d-flex flex-column gap-2">
            <h6 class="ms-1 mb-0">Sub Kategori</h6>
            <input type="text" name="nama" class="form-control form-control-lg ps-4" placeholder="Tuliskan Sub Kategori" style="font-size: 100%;"/>
          </div>
        </div>
      </div>
      <div class="modal-footer gap-2" style="border: none;">
        <button class="btn nonactive"  data-bs-toggle="modal" data-bs-dismiss="modal" aria-label="Close">Batal</button>
        <button class="btn" data-bs-toggle="modal" type="submit" >Simpan</button>
      </div>
    </form>
  </div>
</div>

<!-- Pop up pertanyaan -->
<div class="modal fade" id="tambahPertanyaan" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="border: none;">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Tambah Pertanyaan</h1>
      </div>
      <div class="modal-body" style="border: none;">
        <form action="" class="d-flex flex-column gap-2 pb-0 mb-0">
          <div class="d-flex flex-column gap-2 mb-3">
            <h6 class="ms-1 mb-0">Kategori</h6>
            <select class="form-select form-control-lg ps-4" aria-label="Default select example">
              <option hidden class="selected">Pilih Kategori</option>
              <option value="1">Kepemimpinan</option>
              <option value="2">Strategi</option>
              <option value="3">Pelanggan</option>
              <option value="4">dan lain-lain..</option>
            </select>
          </div>

          <div class="d-flex flex-column gap-2 mb-3">
            <h6 class="ms-1 mb-0">Sub Kategori</h6>
            <select class="form-select form-control-lg ps-4" aria-label="Default select example">
              <option hidden>Pilih Sub Kategori</option>
              <option value="1">Visi, Tata nilai dan Misi</option>
              <option value="2">Penerapan Strategi</option>
              <option value="3">Pelanggan</option>
              <option value="4">dan lain-lain..</option>
            </select>
          </div>
          
          <div class="d-flex flex-column gap-2">
            <h6 class="ms-1 mb-0">Pertanyaan</h6>
            <textarea rows="3" class="form-control-lg ps-4" style="font-size: 100%;" placeholder="Tuliskan pertanyaan"></textarea>
          </div>

        </form>
      </div>
      <div class="modal-footer gap-2" style="border: none;">
        <button class="btn nonactive"  data-bs-toggle="modal" data-bs-dismiss="modal" aria-label="Close">Batal</button>
        <button class="btn" data-bs-toggle="modal" >Simpan</button>
      </div>
    </div>
  </div>
</div>

{{-- Pop up ubah --}}
<!-- Pop up kategori -->
<div class="modal fade" id="ubahKategori" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <form class="modal-content" id="form_ubah_kategori" method="POST">
      @method('PUT')
      @csrf
      <div class="modal-header" style="border: none;">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Ubah Kategori</h1>
      </div>
      <div class="modal-body" style="border: none;">
        <div action="" class="pb-0 mb-0">
          <div class="d-flex flex-column gap-2">
              <h6 class="ms-1 mb-0">Kategori</h6>
              <input type="text" id="nama_kategori" name="nama" class="form-control form-control-lg ps-4" style="font-size: 100%;"/>
          </div>
        </div>
      </div>
      <div class="modal-footer gap-2" style="border: none;">
        <div class="btn nonactive"  data-bs-toggle="modal" data-bs-dismiss="modal" aria-label="Close">Batal</div>
        <button type="submit" class="btn" data-bs-toggle="modal">Ubah</button>
      </div>
    </form>
  </div>
</div>

{{-- delete --}}
<div class="modal fade" id="hapusKategori" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <form class="modal-content" id="form_hapus_kategori" method="POST" >
      @method('DELETE')
      @csrf
      <div class="modal-header" style="border: none;">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Peringatan!</h1>
      </div>
      <div class="modal-body" style="border: none;">
        <p>Apakah Anda yakin menghapus item ini?</p>
      </div>
      <div class="modal-footer gap-2" style="border: none;">
        <div class="btn nonactive"  data-bs-toggle="modal" data-bs-dismiss="modal" aria-label="Close">Tidak</div>
        <button type="submit" class="btn" data-bs-toggle="modal">Ya</button>
      </div>
    </form>
  </div>
</div>
{{-- end delete --}}

{{-- Pop up sub kategori --}}
<div class="modal fade" id="tambahSubKategori" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <form action="/assessment_sub_kategori" method="POST" class="modal-content">
          @csrf
      <div class="modal-header" style="border: none;">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Ubah Sub Kategori</h1>
      </div>
      <div class="modal-body" style="border: none;">
        <div class="d-flex flex-column gap-2 pb-0 mb-0">
          <div class="d-flex flex-column gap-2 mb-3">
            <h6 class="ms-1 mb-0">Kategori</h6>
            <select class="form-select form-control-lg ps-4" aria-label="Default select example" name="assessment_kategori_id">
              <option hidden>Pilih Kategori</option>
              @foreach ($assessment_kategori as $data)
                  <option value="{{ $data->id }}">{{ $data->nama }}</option>
              @endforeach

              {{-- <option value="1">Kepemimpinan</option>
              <option value="2">Strategi</option>
              <option value="3">Pelanggan</option>
              <option value="4">dan lain-lain..</option> --}}
            </select>
          </div>
          <div class="d-flex flex-column gap-2">
            <h6 class="ms-1 mb-0">Sub Kategori</h6>
            <input type="text" name="nama" class="form-control form-control-lg ps-4" placeholder="Tuliskan Sub Kategori" style="font-size: 100%;"/>
          </div>
        </div>
      </div>
      <div class="modal-footer gap-2" style="border: none;">
        <button class="btn nonactive"  data-bs-toggle="modal" data-bs-dismiss="modal" aria-label="Close">Batal</button>
        <button class="btn" data-bs-toggle="modal" type="submit" >Ubah</button>
      </div>
    </form>
  </div>
</div>



<ul class="nav nav-tabs d-flex gap-2 text-center" id="tabs-profil" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="assessment_kategori" data-bs-toggle="tab" href="#assessment_kategori_form" role="tab" aria-controls="assessment_kategori_form" aria-selected="true">Kategori</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="assessment_sub_kategori" data-bs-toggle="tab" href="#assessment_sub_kategori_form" role="tab" aria-controls="assessment_sub_kategori_form" aria-selected="false" tabindex="-1">Sub Kategori</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="simple-tab-2" data-bs-toggle="tab" href="#simple-tabpanel-2" role="tab" aria-controls="simple-tabpanel-2" aria-selected="false" tabindex="-1">Pertanyaan</a>
  </li>
</ul>
<hr class="p-0">
<div class="tab-content" id="tab-content">
  <div class="tab-pane active" id="assessment_kategori_form" role="tabpanel" aria-labelledby="assessment_kategori">
    <div class="content-profil py-5">
      <div class="d-flex justify-content-between align-items-center">
        <h3 class="text-center mb-0 pb-0" style="font-size: 150%; font-weight: bold;">Kategori</h3>
        <a href="#tambahKategori" class="btn" data-bs-toggle="modal" role="button">+ Tambah Kategori</a>
      </div>
        <div class="container mt-4">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kategori</th>
      <th scope="col" class="text-center">Aksi</th>
    </tr>
  </thead>

  <tbody style="position: relative;">
    @foreach ($list_assessment_kategori as $ak)
    {{-- delete --}}
    <div class="modal fade" id="hapusKategori" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="1" style="">
      <div class="modal-dialog modal-dialog-centered">
        <form class="modal-content" method="POST" action="/assessment_kategori/{{$ak->id}}">
          @method('DELETE')
          @csrf
          <div class="modal-header" style="border: none;">
            <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Peringatan!</h1>
          </div>
          <div class="modal-body" style="border: none;">
            <p>Apakah Anda yakin menghapus item ini?</p>
          </div>
          <div class="modal-footer gap-2" style="border: none;">
            <button class="btn nonactive"  data-bs-toggle="modal" data-bs-dismiss="modal" aria-label="Close">Tidak</button>
            <button type="submit" class="btn" data-bs-toggle="modal">Ya</button>
          </div>
        </form>
      </div>
    </div>
    <div id="deleteKategori" style="
      display: none;
      background-color: gray;
      border: 1px solid red;
      padding: 100px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 1;
      border-radius: 20px;
    ">
      lkmclkmcxkm
      <form action="/assessment_kategori/{{$ak->id}}" method="POST" style="
      displa: flex;
      align-items: center;
      justify-content: center;
      gap: 20px;
    ">
        @method('DELETE')
        @csrf
        <div onclick="closeDeleteAlert()" class="btn btn-info">Tidak</div>
        <button type="submit" class="btn btn-danger">Ya</button>
      </form>
    </div>
    {{-- end delete --}}
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$ak->nama}}</td>
        <td>
          <div class="d-flex justify-content-center gap-2">
            {{-- <a href="/assessment_kategori/{{$ak ->id}}/ubah">
              <button class="btn btn-ubah">
                Ubah
              </button>
            </a> --}}
            <button onclick="openModalUbah('{{ $ak->id }}', ' {{ $ak->nama }} ')" class="btn btn-ubah" data-bs-toggle="modal" role="button">Ubah</button>
            {{-- <a href="#hapusKategori" class="btn btn-hapus" data-bs-toggle="modal" role="button">Hapus</a> --}}
            <button onclick="openModalHapus('{{ $ak->id }}', ' {{ $ak->nama }} ')" class="btn btn-hapus">Hapus</button>
          </div>
        </td>
    </tr>
    @endforeach

    <div id="hidden-data" style="display: none">
      <input type="hidden" id="id_kategori">
      <input type="hidden" id="nama_kategori">
    </div>
  </tbody>
</table>
        </div>
    </div>
  </div>
    
  <!-- Sub Kategori Section -->
<div class="tab-pane" id="assessment_sub_kategori_form" role="tabpanel" aria-labelledby="assessment_sub_kategori_form">
  <div class="content-profil py-5">
    <div class="d-flex justify-content-between align-items-center">
      <h3 class="text-center mb-0 pb-0" style="font-size: 150%; font-weight: bold;">Sub Kategori</h3>
      <a href="#tambahSubKategori" class="btn" data-bs-toggle="modal" role="button">+ Tambah Sub Kategori</a>
    </div>
      <div class="container mt-4">
        <table class="table">
          <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Kategori</th>
            <th scope="col">Sub Kategori</th>
            <th scope="col" class="text-center">Aksi</th>
          </tr>
          </thead>
          <tbody>
            @foreach ($assessment_sub_kategori as $ask)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$ask->nama}}</td>
        <td>{{$ask->assessment_kategori->nama}}</td>
        <td>
          <div class="d-flex justify-content-center gap-2">
            {{-- <a href="/assessment_kategori/{{$ask ->id}}/ubah">
              <button class="btn btn-ubah">
                Ubah
              </button>
            </a> --}}
            <a href="#ubahSubKategori" class="btn btn-ubah" data-bs-toggle="modal" role="button">
              Ubah
            </a>
            <form action="/assessment_kategori/{{$ask->id}}" method="POST">
              @method("DELETE")
              @csrf
              <button type="submit" class="btn btn-hapus">
                 Hapus</button>
            </form>
          </div>
        </td>
    </tr>
    @endforeach
            {{-- <tr>
              <th scope="row">1</th>
              <td>Kepemimpinan</td>
              <td>Kepemimpinan yang Berkuasa</td>
              <td>
                <div class="d-flex justify-content-center gap-2">
                  <button class="btn btn-ubah">Ubah</button>
                  <button class="btn btn-hapus">Hapus</button>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Strategi</td>
              <td>Penerapan Strategi</td>
              <td>
                <div class="d-flex justify-content-center gap-2">
                  <button class="btn btn-ubah">Ubah</button>
                  <button class="btn btn-hapus">Hapus</button>
                </div>
              </td>
              
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Pelanggan</td>
              <td>Pelanggan yang Terhormat</td>
              <td>
                <div class="d-flex justify-content-center gap-2">
                  <button class="btn btn-ubah">Ubah</button>
                  <button class="btn btn-hapus">Hapus</button>
                </div>
              </td>
              
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>Pelanggan</td>
              <td>Suara Pelanggan</td>
              <td>
                <div class="d-flex justify-content-center gap-2">
                  <button class="btn btn-ubah" fdprocessedid="vgnm23">Ubah</button>
                  <button class="btn btn-hapus" fdprocessedid="fqrv4c">Hapus</button>
                </div>
              </td>
              
            </tr> --}}
          </tbody>
        </table>
      </div>
  </div>
</div>

<!-- Pertanyaan Section -->
<div class="tab-pane" id="simple-tabpanel-2" role="tabpanel" aria-labelledby="simple-tab-2">
  <div class="content-profil py-5">
    <div class="d-flex justify-content-between align-items-center">
      <h3 class="text-center mb-0 pb-0" style="font-size: 150%; font-weight: bold;">Pertanyaan</h3>
      <a href="#tambahPertanyaan" class="btn" data-bs-toggle="modal" role="button">+ Tambah Pertanyaan</a>
    </div>
      <div class="container mt-4">
        <table class="table">
          <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Kategori</th>
            <th scope="col">Sub Kategori</th>
            <th scope="col">Pertanyaan</th>
            <th scope="col" class="text-center">Aksi</th>
          </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Kepemimpinan</td>
              <td>Kepemimpinan yang Berkuasa</td>
              <td>Dari mana Anda memperoleh informasi tentang SNI Award?</td>
              <td>
                <div class="d-flex justify-content-center gap-2">
                  <a href="#ubahPertanyaan" class="btn btn-ubah" data-bs-toggle="modal" role="button">
                    Ubah
                  </button></a>
                  <button class="btn btn-hapus">Hapus</button>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Strategi</td>
              <td>Penerapan Strategi</td>
              <td>Apa manfaat yang paling Anda harapkan dengan mengikuti SNI Award?</td>
              <td>
                <div class="d-flex justify-content-center gap-2">
                  <button class="btn btn-ubah">Ubah</button>
                  <button class="btn btn-hapus">Hapus</button>
                </div>
              </td>
              
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Pelanggan</td>
              <td>Pelanggan yang Terhormat</td>
              <td>Apa yang paling memotivasi organisasi Anda untuk mengikuti SNI Award?</td>
              <td>
                <div class="d-flex justify-content-center gap-2">
                  <button class="btn btn-ubah">Ubah</button>
                  <button class="btn btn-hapus">Hapus</button>
                </div>
              </td>
              
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>Pelanggan</td>
              <td>Suara Pelanggan</td>
              <td>Apa yang paling memotivasi organisasi Anda untuk mengikuti SNI Award?</td>
              <td>
                <div class="d-flex justify-content-center gap-2">
                  <button class="btn btn-ubah" fdprocessedid="vgnm23">Ubah</button>
                  <button class="btn btn-hapus" fdprocessedid="fqrv4c">Hapus</button>
                </div>
              </td>
              
            </tr>
          </tbody>
        </table>
      </div>
  </div>
</div>
</div>
</div>
@endsection('content')