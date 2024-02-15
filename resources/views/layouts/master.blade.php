<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SNI Award 2024</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets') }}/bootstrap-5.3.2/css/bootstrap.css" />

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
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css" />
  </head>
  <body>
    <header>
      <div class="row">
        <div class="logo col-2">
          <a href=""
            ><img src="{{ asset('assets') }}/images/icon/logo-sniaward.svg" alt="Logo SNI Award"
          /></a>
        </div>
        <nav class="navbar navbar-expand-lg col-8">
          <div class="container-fluid">
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
              <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="#"
                  >Beranda</a
                >
                <a class="nav-link" href="#">Informasi</a>
                <a class="nav-link" href="#">Unduh</a>
                <a class="nav-link" href="#">Linimasa</a>
                <a class="nav-link" href="#">Acara</a>
                <a class="nav-link" href="#">FAQ</a>
                <a class="nav-link" href="#">Kontak</a>
              </div>
            </div>
          </div>
        </nav>
        <div class="navbar navbar-expand-lg col-2">
          <div
            class="icon-navbar collapse navbar-collapse justify-content-center"
          >
            <a href="#"><img src="{{ asset('assets') }}/images/icon/search.svg" alt="" /></a>
            <a href="#"><img src="{{ asset('assets') }}/images/icon/user.svg" alt="" /></a>
          </div>
        </div>
      </div>
    </header>
    @yield('content')
    <footer>
        <div class="row">
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
              <div class="sosmed-container row ps-4">
                <div
                  class="sosmed col-3 me-2 d-flex justify-content-center align-items-center"
                >
                  <i data-feather="twitter"></i>
                </div>
                <div
                  class="sosmed col-3 d-flex justify-content-center align-items-center me-2"
                >
                  <i data-feather="instagram"></i>
                </div>
                <div
                  class="sosmed col-3 d-flex justify-content-center align-items-center me-2"
                >
                  <i data-feather="facebook"></i>
                </div>
                <div
                  class="sosmed col-3 d-flex justify-content-center align-items-center me-2"
                >
                  <i data-feather="youtube"></i>
                </div>
              </div>
            </div>
          </div>
          <div
            class="copyright-container col-12 mt-3 bg-warning text-center align-items-center"
          >
            <p class="m-0">
              Copyright © 2024. All Rights Reserved by
              <a href="">Badan Standardisasi Nasional</a>
            </p>
          </div>
        </div>
      </footer>

    <script>
      feather.replace();
    </script>
    <script src="bootstrap-5.3.2-dist/js/bootstrap.js"></script>
  </body>
</html>