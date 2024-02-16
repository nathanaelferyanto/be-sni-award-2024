@extends('layouts.master')

@section('content')
<main>
  <article id="jumbotron" class="bg-theme">
    <div class="row" id="container-jumbotron">
      <div class="title-container col-8">
        <h1>
          Selamat Datang di Website
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

  <article id="dokumentasi">
  <section id="slider" class="pt-5">
      <div class="carousel-container">
        <h1 class="text-center">Dokumentasi</h1>
        <hr class="mb-4">
        <p class="text-center pb-5">"Jelajah dan Kenali Kami dengan Anda Dimulai Di sini!"</p>
        <div class="slider py-5 px-5">
          <div class="owl-carousel">
            <div class="slider-card">
              <div
                class="d-flex justify-content-center align-items-center mb-4"
              >
                <img src="{{ asset('assets') }}/images/dokumentasi/berita.png" alt="" />
              </div>
              <!-- <h5 class="mb-0 text-center"><b>HTML CSS3 Tutorials</b></h5>
              <p class="text-center p-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam
                temporibus quidem magni qui doloribus quasi natus inventore nisi
                velit minima.
              </p> -->
            </div>
            <div class="slider-card">
              <div
                class="d-flex justify-content-center align-items-center mb-4"
              >
                <img src="{{ asset('assets') }}/images/dokumentasi/berita-terkini.png" alt="" />
              </div>
            </div>
            <div class="slider-card">
              <div
                class="d-flex justify-content-center align-items-center mb-4"
              >
                <img src="{{ asset('assets') }}/images/dokumentasi/berita.png" alt="" />
              </div>
            </div>
            <div class="slider-card">
              <div
                class="d-flex justify-content-center align-items-center mb-4"
              >
                <img src="{{ asset('assets') }}/images/dokumentasi/berita-terkini.png" alt="" />
              </div>
            </div>
            <div class="slider-card">
              <div
                class="d-flex justify-content-center align-items-center mb-4"
              >
                <img src="{{ asset('assets') }}/images/dokumentasi/berita.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </article>

  <article id="news">
    <div class="artikel-container row">
      <div class="title-container col-12">
        <h1>Artikel</h1>
        <hr class="mx-0" />
      </div>
      <div class="content-container col-6">
        <div class="content row">
          <h2>Berita Terkini</h2>
          <img
            src="{{ asset('assets') }}/images/dokumentasi/berita-terkini.png"
            class="p-0"
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

  <article id="acara">
    <div class="acara-container">
      <div class="title col-12">
        <h1>Kumpulan Acara</h1>
        <hr class="mx-0">
        <p>Beberapa acara yang telah dilaksanakan sebelumnya: </p>
      </div>
      <div class="content-atas row">
        <div class="col-6">
          <img src="{{ asset('assets') }}/images/acara/acara1.png" alt="">
        </div>
        <div class="col-6">
          <h3>SNI Award 2023, untuk Kinerja Unggul dan efisien</h3>
          <p>BSN akan mengadakan Seminar Nasional dalam rangka Peringatan Hari Standar Dunia dan Bulan Mutu Nasional (BMN) 2021. Seminar akan dilaksanakan pada bulan November 2021 .</p>
          <button class="btn float-end">Baca Selengkapnya</button>
        </div>          
      </div>

      <div class="content-bawah row">
        <div class="col-6">
          <h3>Pendaftaran SNI 2024 menjadi sorotan para pekerja</h3>
          <p>BSN akan mengadakan Seminar Nasional dalam rangka Peringatan Hari Standar Dunia dan Bulan Mutu Nasional (BMN) 2021. Seminar akan dilaksanakan pada bulan November 2021 .</p>
          <button class="btn float-end">Baca Selengkapnya</button>
        </div>
        <div class="col-6">
          <img src="{{ asset('assets') }}/images/acara/acara2.png" alt="">
        </div>
      </div>
    </div>
  </article>

  <!-- FAQ 1 - Bootstrap Brain Component -->
  <!-- FAQ 1 - Bootstrap Brain Component -->
<section class="py-3 py-md-5">
  <div class="container">
    <div class="row gy-5 gy-lg-0 align-items-lg-center">
      <div class="col-6">
        <div class="row justify-content-xl-end">
          <div class="col-12 col-xl-11">
            <div class="accordion accordion-flush" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    How Do I Change My Billing Information?
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>To change your billing information, please follow these steps:</p>
                    <ul>
                      <li>Go to our website and sign in to your account.</li>
                      <li>Click on your profile picture in the top right corner of the page and select "Account Settings."</li>
                      <li>Under the "Billing Information" section, click on "Edit."</li>
                      <li>Make your changes and click on "Save."</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    How Does Payment System Work?
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    A payment system is a way to transfer money from one person or organization to another. It is a complex process that involves many different parties, including banks, credit card companies, and merchants.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    How Do I Cancel My Account?
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>To cancel your account, please follow these steps:</p>
                    <ul>
                      <li>Go to our website and sign in to your account.</li>
                      <li>Click on your profile picture in the top right corner of the page and select "Account Settings."</li>
                      <li>Scroll to the bottom of the page and click on "Cancel Account."</li>
                      <li>Enter your password and click on "Cancel Account."</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <article id="contact">
    <div class="contact-container">
      <div class="title">
        <h1>Tinggal Balasan di Sini</h1>
        <hr class="mx-0" />
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