<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Cache-Control" content="max-age=3600" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $website->deskripsi }}">
    <meta name="{{ $website->keyword }}">

    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $title }}" />
    <meta property="og:description" content="{{ $website->deskripsi }}" />
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:image" content="{{ asset('img/' . $website->icon) }}" />

    <link rel="shortcut icon" href="{{ asset('img/' . $website->icon) }}">
    <title>{{ $title }}</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Poppins:wght@300&display=swap" rel="preload"
        as="style" onload="this.onload=null;this.rel='stylesheet'">

    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<style type="text/css">
    html,
    body {
        overflow-x: hidden;
    }
</style>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white poppins fixed-top shadow-sm wow pulse">
        <div class="container-fluid">
            <a href="{{ url('/') }}">
                <img src="{{ asset('img/logo.png') }}" alt="Logo Eegyo SIMS" width="120px" height="100%"
                    class="me-5 ms-4 my-1">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <div class="d-lg-none mt-2"></div>

                <ul class="navbar-nav me-auto mb-2 mb-lg-0 fw-bold">
                    <li class="nav-item">
                        <a class="nav-link link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link" href="#fitur-utama">Fitur Utama</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link" href="#sekolah">Sekolah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link" href="#mengapa-sims">Mengapa Eegyo SIMS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link" href="#faq">Pertanyaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link" href="{{ url('login') }}">Login</a>
                    </li>
                </ul>

                <!-- Tombol login dan daftar dekstop -->
                <div class="d-none d-lg-flex me-3">
                    <a href="https://demosims.eegyo.com" target="_blank" class="btn bg-kuning"
                        style="border-radius: 20px;"><i class="fas fa-right-to-bracket"></i> Demo</a>
                </div>

            </div>
        </div>
    </nav>
    <!-- END Navbar -->


    @yield('content')


    <footer class="padding py-4">

        <div class="row">
            <div class="col-lg-3">
                <img class="lazyload" src="{{ asset('img/preview.png') }}"
                    data-src="{{ asset('img/' . $website->logo) }}" alt="Logo Eegyo" width="200px" height="80px">
                <p class="sans mt-4 mb-2"><i class="fas fa-envelope"></i> eegyocompanion@gmail.com</p>
                <p class="sans"><i class="fa-brands fa-whatsapp"></i> 0896-1332-5456</p>
            </div>

            <div class="d-lg-none"><br></div>

            <div class="col-lg-4">
                <p class="sans fw-bold mb-4">Navigasi Situs</p>
                <div class="row">
                    <div class="col-6">
                        <a href="#main" class="text-decoration-none text-dark sans d-inline-block mb-2">Selamat
                            Datang</a>
                        <br>
                        <a href="#fitur-utama" class="text-decoration-none text-dark sans d-inline-block mb-2">Fitur
                            Utama</a>
                        <br>
                        <a href="#mengapa-sims"
                            class="text-decoration-none text-dark sans d-inline-block mb-2">Menggunakan SIMS</a>
                    </div>

                    <div class="col-6">
                        <a href="#sekolah" class="text-decoration-none text-dark sans d-inline-block mb-2">Sekolah
                            Pengguna</a>
                        <br>
                        <a href="#faq" class="text-decoration-none text-dark sans d-inline-block mb-2">FAQ</a>
                        <br>
                        <a href="https://demosims.eegyo.com"
                            class="text-decoration-none text-dark sans d-inline-block mb-2">Demo</a>
                        <br>
                    </div>
                </div>
            </div>

            <div class="d-lg-none"><br></div>

            <div class="col-lg-3">
                <p class="sans fw-bold mb-4">Tentang Kami</p>

                <a href="https://profile.eegyo.com/" target="_blank"
                    class="text-decoration-none text-dark sans d-inline-block mb-2">PT. Eegyo
                    Link Partner</a>
                <br>
                <a href="https://fazal.eegyo.com" target="_blank"
                    class="text-decoration-none text-dark sans d-inline-block mb-2">Muhammad
                    Toffazal</a>
                <br>
                <a href="https://wa.me/6289613325456?text=Saya ingin menjadi Affiliator sims" target="_blank"
                    class="text-decoration-none text-dark sans d-inline-block mb-2">Menjadi Affiliator</a>
            </div>

            <div class="d-lg-none"><br></div>

            <div class="col-lg-2">
                <p class="sans fw-bold mb-4">Media Sosial Kami</p>

                <a href="https://instagram.com/eegyo_official" target="_blank"><img src="{{ asset('img/ig.webp') }}"
                        alt="Instagram" width="30px" height="30px"></a>
                <a href="https://www.youtube.com/playlist?list=PL3vqB8GTDnlw_-frhu5WYpdl3t7zUZ4E4"
                    target="_blank"><img src="{{ asset('img/youtube.svg') }}" alt="Youtube" width="40px"
                        height="30px"></a>
            </div>
        </div>

    </footer>

    <div class="bg-white text-center poppins fw-bold py-3">&copy; 2024 - <?= date('Y') ?> Eegyo SIMS, PT. Eegyo Link
        Partner. All Rights Reserved
    </div>


    <!-- WA ICON -->
    <a href="https://wa.me/6289613325456" class="position-fixed" style="bottom: 30px; right: 30px;"
        title="Hubungi Admin" target="_blank"><img src="{{ asset('img/wa.png') }}" alt="Icon WA" width="50px"
            height="50px"></a>


    <!-- JS -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/lazysize.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    @stack('scripts')
    @yield('scripts')

</body>

</html>
