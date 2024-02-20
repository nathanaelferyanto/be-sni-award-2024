<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SNI Award 2024</title>

    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />

    <!-- Arimo Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&display=swap"
      rel="stylesheet"
    />

    <!-- Josefin Sans Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
      rel="stylesheet"
    />

    <!-- icon -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="https://unpkg.com/feather-icons"></script>


    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/owl.carousel.min.css" />

    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/styles.css" />
  </head>
  <body>
    <header class="header">
      
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid ">
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse justify-content-center"
            id="navbarNavAltMarkup"
          >
            <div class="navbar-container py-2 px-4 d-flex align-items-center justify-content-between"> 
              <div class="logo-container me-5">
                <a href=""><img src="{{ asset('assets') }}/images/icon/logo-bsn.svg" class="logo-bsn ms-2" alt="Logo BSN"/></a>
                <a href=""><img src="{{ asset('assets') }}/images/icon/logo-sniaward.svg" class="logo-sniaward ms-2" alt="Logo SNI Award"/></a>
              </div>
              
              <div class="navbar-nav">
                <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="/"
                  >Beranda</a
                >
                <a class="nav-link {{ request()->is('informasi') ? 'active' : '' }}" href="/informasi">Informasi</a>
                <a class="nav-link {{ request()->is('unduh') ? 'active' : '' }}" href="/unduh">Unduh</a>
                <a class="nav-link {{ request()->is('linimasa') ? 'active' : '' }}" href="/linimasa">Linimasa</a>
                <a class="nav-link {{ request()->is('acara') ? 'active' : '' }}" href="/acara">Acara</a>
                <a class="nav-link {{ request()->is('faq') ? 'active' : '' }}" href="/faq">FAQ</a>
                <a class="nav-link {{ request()->is('kontak') ? 'active' : '' }}" href="/kontak">Kontak</a>
                <a class="nav-link" href="/login"><img src="{{ asset('assets') }}/images/icon/user.svg" alt="" style="width: 20px; filter:invert(1);"/></a>
              </div>
            </div>

          </div>
        </div>
      </nav>

    </header>
    
    @yield('content')

    <footer>
        <div class="row m-0">
          <div class="col-6">
            <div class="row ms-5 align-items-center">
              <div class="col-3 text-start">
                <img src="{{ asset('assets') }}/images/icon/logo-sniaward.svg" alt="" />
              </div>
              <div class="col-9 text-start">
                <img src="{{ asset('assets') }}/images/icon/logo-bsn.svg" alt="" />
              </div>
              <div class="col-12 mt-4">
                <p>
                  Gedung I BPPT Jl. M.H. Thamrin No.8 Kebon Sirih,
                  <br />
                  Jakarta Pusat 10340
                </p>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="row">
              <h4 class="mb-3">Info Lebih Lanjut</h4>
              <ul>
                <a href=""><li>FAQ</li></a>
                <a href=""><li>Kontak</li></a>
                <a href=""><li>Syarat dan Ketentuan</li></a>
                <a href=""><li>Kebijakan Privacy</li></a>
                <a href=""><li>Refund Policy</li></a>
              </ul>
            </div>
          </div>
          <div class="col-3">
            <div class="social-media row">
              <h4 class="mb-3">Social Media</h4>
              <div class="col mb-1">
                <a href=""
                  ><p><img src="{{ asset('assets') }}/images/icon/link.svg" alt="" /> www.bsn.go.id</p></a
                >
              </div>
              <div class="sosmed-container row">
                <div
                  class="sosmed col-3 d-flex justify-content-center align-items-center"
                >
                  <i data-feather="twitter"></i>
                </div>
                <div
                  class="sosmed col-3 d-flex justify-content-center align-items-center"
                >
                  <i data-feather="instagram"></i>
                </div>
                <div
                  class="sosmed col-3 d-flex justify-content-center align-items-center"
                >
                  <i data-feather="facebook"></i>
                </div>
                <div
                  class="sosmed col-3 d-flex justify-content-center align-items-center"
                >
                  <i data-feather="youtube"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="copyright-container col-12 mt-3 text-center align-items-center">
            <p class="m-0 fs-6">
              Copyright © 2024. All Rights Reserved by
              <a href="">Badan Standardisasi Nasional</a>
            </p>
          </div>
        </div>
      </footer>

    <script>
      feather.replace();
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
      integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
      crossorigin="anonymous"
    ></script>
    <script src="{{ asset('assets') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('assets') }}/js/script.js"></script>
  </body>
</html>
