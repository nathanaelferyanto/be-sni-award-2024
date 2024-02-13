@extends('layouts.master')

@section('content')
<main>
  <article class="row" id="jumbotron">
    <div class="title-container col-8">
      <h1>
        <span>Selamat </span>Datang di Website
        <span>SNI Award 2024</span>
      </h1>
      <p>
        SNI Award dicanangkan sebagai The National Quality Award of
        <br />Indonesia sejak tahun 2005
      </p>
    </div>
    <div class="image-container col-4">
      <img src="{{ asset('assets') }}/images/icon/Frame 2.png" class="w-100" alt="" />
    </div>
    <div class="card-container row">
      <div class="card col-3 align-content-center">
        <img src="{{ asset('assets') }}/images/icon/buku-biru.svg" alt="" />
        <p>Seputar SNI Award</p>
      </div>
      <div class="card col-3">
        <img src="{{ asset('assets') }}/images/icon/juri-biru.svg" alt="" />
        <p>Dewan Juri SNI Award</p>
      </div>
      <div class="card col-3">
        <img src="{{ asset('assets') }}/images/icon/medali-biru.svg" alt="" />
        <p>Peraih SNI Award</p>
      </div>
    </div>
  </article>

  <article id="about">
    <div class="about-container justify-content-center">
      <h1>Apa itu SNI Award?</h1>
      <hr />
      <p>
        SNI Award merupakan sebuah pemberian penghargaan tertinggi dari
        Pemerintah Repubik Indonesia bagi organisasi yang menerapkan Standar
        Nasional Indonesia (SNI) secara konsisten, berkinerja tinggi,
        memiliki kemampuan mengelola dinamisasi perubahan dan melakukan
        transformasi yang diperlukan secara tepat.
      </p>
    </div>
  </article>

  <article id="dokumentasi" class="half-bg-theme">
    <div
      class="dokumentasi-container row d-flex justify-content-center align-content-center"
    >
      <div class="title-container col-4">
        <h1>Dokumentasi</h1>
        <hr />
        <h2>Temukan <span>Kegiatan</span></h2>
        <p>"Jelajah dan Kenali Kami dengan Anda Dimulai Di Sini!"</p>
      </div>

      <div
        id="carouselExampleSlidesOnly"
        class="carousel slide col-8"
        data-bs-ride="carousel"
        data-bs-pause="false"
        data-bs-keyboard="false"
      >
        <div class="carousel-inner rounded-3 float-end">
          <div
            class="carousel-item bg-light active"
            data-bs-interval="2000"
          >
            <img src="{{ asset('assets') }}/images/dokumentasi/berita-terkini.png" class="p-0 w-100" alt="" />
          </div>

          <div class="carousel-item rounded-3" data-bs-interval="2000">
            <img src="{{ asset('assets') }}/images/dokumentasi/berita.png" class="p-0 w-100" alt="" />
          </div>
        </div>
      </div>
    </div>
  </article>

  <article id="news">
    <div class="artikel-container row">
      <div class="title-container col-12">
        <h1>Artikel</h1>
        <hr />
      </div>
      <div class="content-container col-6">
        <div class="content row">
          <h2>Berita Terkini</h2>
          <img
            src="{{ asset('assets') }}/images/dokumentasi/berita-terkini.png"
            class="p-0 rounded-3 border"
            alt=""
          />
        </div>
      </div>
      <div class="content-container col-6">
        <div class="content row">
          <h3>SEMINAR NASIONAL PERINGATAN HARI STANDAR DUNIA</h3>
          <div class="author-container d-flex">
            <div class="flex-grow-1"></div>
            <div
              class="author-content justify-content-end align-items-center"
            >
              <p class="hour">1 Hour Ago</p>
              <p class="author">
                Ditinjau oleh <a href="">Shinta Arafah</a>
              </p>
            </div>
          </div>

          <p class="description">
            BSN akan mengadakan Seminar Nasional dalam rangka Peringatan
            Hari Standar Dunia dan Bulan Mutu Nasional (BMN) 2021. Seminar
            akan dilaksanakan pada bulan November 2021 di Bandung. Acara
            akan dilaksanakan baik secara tatap muka dengan menerapkan
            protokol kesehatan maupun daring. PIC Kegiatan: Direktorat
            Penguatan Standar dan Penilaian Kesesuaian
            <a href="">baca selengkapnya.</a>
          </p>
          <div class="program-bsn-container row justify-content-end">
            <div
              class="program-bsn col-1 rounded-1 text-center d-flex justify-content-center align-items-center ms-2"
            >
              <p>SNIBSN</p>
            </div>
            <div
              class="program-bsn col-2 rounded-1 text-center d-flex justify-content-center align-items-center ms-2"
            >
              <p>SNIAWards2023</p>
            </div>
            <div
              class="program-bsn col-2 rounded-1 text-center d-flex justify-content-center align-items-center ms-2"
            >
              <p>#BerkasSNI</p>
            </div>
          </div>
        </div>
      </div>

      <!-- <div class="col-6">
        <h2>Berita Terkini</h2>
      </div>
      <div class="col-6">
        <h3>Seminar Nasional Peringatan Hari Standar Dunia</h3>
      </div>
      <div class="col-6">
        <img
          src="{{ asset('assets') }}/images/icon/berita-terkini.png"
          class="w-100 rounded-3 gambar-berita"
          alt="Berita Terkini"
        />
      </div>
      <div class="col-6">
        <div class="align-content-center">
          <p class="text-start">1 Hour Ago</p>
          <p class="text-start">Ditinjau oleh <span>Shinta Arafah</span></p>
        </div>
        <p>
          BSN akan mengadakan Seminar Nasional dalam rangka Peringatan Hari
          Standar Dunia dan Bulan Mutu Nasional (BMN) 2021. Seminar akan
          dilaksanakan pada bulan November 2021 di Bandung. Acara akan
          dilaksanakan baik secara tatap muka dengan menerapkan protokol
          kesehatan maupun daring. PIC Kegiatan: Direktorat Penguatan
          Standar dan Penilaian Kesesuaian baca selengkapnya.
        </p>
        <div class="row">
          <div class="col-2 border">SNIBSN</div>
          <div class="col-2 border">SNIAWards2023</div>
          <div class="col-2 border">#BerkasSNI</div>
          <div class="col-2 border">#Kriteria</div>
          <div class="col-2 border">#KegiatanBSN</div>
        </div>
      </div> -->
    </div>

    <div class="news-container">
      <div class="row justify-content-center">
        <div class="berita-container col-4 rounded-3 p-0 mx-4">
          <img src="{{ asset('assets') }}/images/dokumentasi/berita.png" class="w-100 rounded-3" alt="" />
          <div class="content">
            <h4>
              SIARAN PERS: Perusahaan/Organisasi Terbaik Penerap SNI, Raih
              SNI Award 2021
            </h4>
            <p>
              Badan Standardisasi Nasional (BSN) kembali menggelar SNI Award
              2021. SNI Award, yang dicanangkan sebagai The National Quality
              Award of Indonesia, telah dimulai sejak tahun 2005. SNI Award
              merupakan sebuah pemberian penghargaan tertinggi dari
              Pemerintah Repubik Indonesia bagi organisasi yang menerapkan
              Standar Nasional Indonesia (SNI).
            </p>
            <button class="btn">Baca Selengkapnya</button>
          </div>
        </div>
        <div class="berita-container col-4 rounded-3 p-0 mx-4">
          <img src="{{ asset('assets') }}/images/dokumentasi/berita.png" class="w-100 rounded-3" alt="" />
          <div class="content">
            <h4>
              SIARAN PERS: Perusahaan/Organisasi Terbaik Penerap SNI, Raih
              SNI Award 2021
            </h4>
            <p>
              Badan Standardisasi Nasional (BSN) kembali menggelar SNI Award
              2021. SNI Award, yang dicanangkan sebagai The National Quality
              Award of Indonesia, telah dimulai sejak tahun 2005. SNI Award
              merupakan sebuah pemberian penghargaan tertinggi dari
              Pemerintah Repubik Indonesia bagi organisasi yang menerapkan
              Standar Nasional Indonesia (SNI).
            </p>
            <button class="btn">Baca Selengkapnya</button>
          </div>
        </div>
        <div class="berita-container col-4 rounded-3 p-0 mx-4">
          <img src="{{ asset('assets') }}/images/dokumentasi/berita.png" class="w-100 rounded-3" alt="" />
          <div class="content">
            <h4>
              SIARAN PERS: Perusahaan/Organisasi Terbaik Penerap SNI, Raih
              SNI Award 2021
            </h4>
            <p>
              Badan Standardisasi Nasional (BSN) kembali menggelar SNI Award
              2021. SNI Award, yang dicanangkan sebagai The National Quality
              Award of Indonesia, telah dimulai sejak tahun 2005. SNI Award
              merupakan sebuah pemberian penghargaan tertinggi dari
              Pemerintah Repubik Indonesia bagi organisasi yang menerapkan
              Standar Nasional Indonesia (SNI).
            </p>
            <button class="btn">Baca Selengkapnya</button>
          </div>
        </div>
      </div>
    </div>
  </article>

  <article id="contact">
    <div class="contact-container">
      <div class="title">
        <h1>Tinggal Balasan di Sini</h1>
        <hr />
      </div>
      <div class="row justify-content-center">
        <div class="col-6">
          <form>
            <div class="row mb-3 justify-content-center">
              <div class="input-container col-12">
                <label for="exampleInputEmail1" class="form-label"></label>
                <input
                  type="email"
                  class="form-control border-dark rounded-3"
                  id="exampleInputEmail1"
                  aria-describedby="emailHelp"
                  placeholder="Nama Lengkap"
                />
              </div>

              <div class="input-container col-6">
                <label for="exampleInputEmail1" class="form-label"></label>
                <input
                  type="email"
                  class="form-control border-dark rounded-3"
                  id="exampleInputEmail1"
                  aria-describedby="emailHelp"
                  placeholder="No.telp"
                />
              </div>
              <div class="input-container col-6">
                <label for="exampleInputEmail1" class="form-label"></label>
                <input
                  type="email"
                  class="form-control border-dark rounded-3"
                  id="exampleInputEmail1"
                  aria-describedby="emailHelp"
                  placeholder="E-mail"
                />
              </div>
              <div class="input-container col-12">
                <label
                  for="exampleFormControlTextarea1"
                  class="form-label"
                ></label>
                <textarea
                  class="form-control border-dark rounded-3"
                  id="exampleFormControlTextarea1"
                  rows="5"
                  placeholder="Berikan Komentarmu!"
                ></textarea>
              </div>
            </div>
            <button type="submit" class="btn btn-primary float-end">
              Kirim Komentar
            </button>
          </form>
        </div>
        <div class="col-6 text-center">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.97659708331!2d106.82049436920713!3d-6.236432029161127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f36a70592c2d%3A0xb7e21ff0384fde0d!2sBadan%20Standardisasi%20Nasional%20(BSN)!5e0!3m2!1sid!2sid!4v1707458886395!5m2!1sid!2sid"
            width="579"
            height="351"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </div>
    </div>
  </article>
</main>
@endsection('content')