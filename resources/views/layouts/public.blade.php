@props([
    'title' => null,
])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $title ? "{$title} - " : null }} {{ config('filament.brand') }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @livewireStyles

    @vite('resources/css/public.css')

    @stack('styles')

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="{{ route('home') }}"><i class="bx bx-water"></i>Desa Bluru</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto {{ $title == 'home' ? 'active' : null }}"
                            href="{{ route('home') }}#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('home') }}#profile">Profile</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('galeri') }}#galeri">Galeri</a></li>
                    <li class="dropdown"><a href="#"><span>Struktur</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ route('struktur.pemerintah-desa') }}">Struktur Pemerintahan Desa</a></li>
                            <li><a href="{{ route('struktur.badan-permusyawaratan-desa') }}">Struktur Badan
                                    Permusyawaratan Desa</a></li>
                        </ul>
                    </li>
                    <li><a class="getstarted scrollto" href="{{ route('filament.auth.login') }}">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    {{ $slot }}

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 footer-contact">
                        <h3>Desa Bluru</h3>
                        <p>
                            Jl. Manggis, No. 128 <br>
                            Suka Maju, Hanian Timur<br>
                            Indonesia <br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>List Menu</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('home') }}">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('home') }}#profile">Profile</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('galeri') }}#galeri">Galeri</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a
                                    href="{{ route('struktur.pemerintah-desa') }}">Struktur Pemerintahan Desa</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a
                                    href="{{ route('struktur.badan-permusyawaratan-desa') }}">Struktur Badan
                                    Permusyawaratan Desa</a></li>
                        </ul>
                    </div>

                    {{-- <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Populer</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Desa XYZ Raih Penghargaan Sebagai Desa Terbaik dalam Pengelolaan Lingkungan</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Inovasi Desa XYZ: Pemanfaatan Energi Terbarukan untuk Penerangan Jalan Umum</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Masyarakat Desa XYZ Dirikan Koperasi Bersama, Dorong Perekonomian Lokal</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Desa ABC Gelar Pelatihan Kewirausahaan Bagi Pemuda, Cetak Generasi Mandiri dan Berdaya Saing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Transformasi Digital di Desa XYZ: Akses Internet Cepat dan Layanan E-Government untuk Kemajuan Desa</a></li>
                        </ul>
                    </div> --}}

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Sosial Media</h4>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Desa Bluru</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @livewireScripts

    @vite('resources/js/public.js')

    @stack('scripts')

</body>

</html>
