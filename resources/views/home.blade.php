<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('img/fav.png') }}">
    <!-- Author Meta -->
    <meta name="author" content="">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>EXPO IT - Fakultas Ilmu Komputer, Universitas Jember</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700" rel="stylesheet">
    @toastr_css

    <!--
CSS
============================================= -->

    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

</head>

<body>

<!-- Preloader -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>

<!-- Start header section -->
<header class="header-area" id="header-area">
    <div class="dope-nav-container breakpoint-off">
        <div class="container">
            <div class="row">
                <!-- dope Menu -->
                <nav class="dope-navbar justify-content-between" id="dopeNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.html">
                        <img src="{{ asset('img/logoexpo.png') }}" alt="">
                    </a>

                    <!-- Navbar Toggler -->
                    <div class="dope-navbar-toggler">
                            <span class="navbarToggler">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                    </div>

                    <!-- Menu -->
                    <div class="dope-menu">

                        <!-- close btn -->
                        <div class="dopecloseIcon">
                            <div class="cross-wrap">
                                <span class="top"></span>
                                <span class="bottom"></span>
                            </div>
                        </div>

                        <!-- Nav Start -->
                        <div class="dopenav">
                            <ul id="nav">
                                <li>
                                    <a href="#banner-section">Home</a>
                                </li>
                                <li>
                                    <a href="#about-expo-section">About</a>
                                </li>
                                <li>
                                    <a href="#feature-section">Announcement</a>
                                </li>
                                <li>
                                    <a href="#faq-section">FAQ</a>
                                </li>
                                <li>
                                    <a href="#download-section">Registration</a>
                                </li>
                            </ul>

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Start header section -->

<!-- Start banner section -->
<section class="banner-section relative section-gap-full" id="banner-section">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 banner-left">
                <h1 class="text-uppercase"><b>creative digital industry for the solution to your success in the
                        future</b>
                </h1>
                <p>creativity and digital industry are one package creativity is the key to success, digital
                    industry is the way to make it happend </p>
                <a class="video-btn primary-btn" href="#about-expo-section">About More</a>
            </div>
            <div class="col-md-6 banner-right text-center">
                <img class="img-fluid" src="{{ asset('img/screen1.png') }}" alt="">
            </div>
        </div>
    </div>
    <div class="wave">
        <svg class="nectar-shape-divider" fill="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 300"
             preserveAspectRatio="none">
            <path
                    d="M 1000 299 l 2 -279 c -155 -36 -310 135 -415 164 c -102.64 28.35 -149 -32 -232 -31 c -80 1 -142 53 -229 80 c -65.54 20.34 -101 15 -126 11.61 v 54.39 z">
            </path>
            <path
                    d="M 1000 286 l 2 -252 c -157 -43 -302 144 -405 178 c -101.11 33.38 -159 -47 -242 -46 c -80 1 -145.09 54.07 -229 87 c -65.21 25.59 -104.07 16.72 -126 10.61 v 22.39 z">
            </path>
            <path
                    d="M 1000 300 l 1 -230.29 c -217 -12.71 -300.47 129.15 -404 156.29 c -103 27 -174 -30 -257 -29 c -80 1 -130.09 37.07 -214 70 c -61.23 24 -108 15.61 -126 10.61 v 22.39 z">
            </path>
        </svg>
    </div>
</section>
<!-- End banner section -->

<!-- Start featured section -->
<section class="featured-section">
    <div class="container">
        <div class="section-title">
            <h2 class="text-center">Sub Event EXPO IT 2019</h2>
        </div>
        <div class="row align-item-center">
            <div class="col-lg-4 col-md-4 col-sm-4 single-logo">
                <img class="img-fluid" src="{{ asset('img/logo/logo1.png') }}" alt="">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 single-logo">
                <img class="img-fluid" src="{{ asset('img/logo/logo2.png') }}" alt="">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 single-logo">
                <img class="img-fluid" src="{{ asset('img/logo/logo3.png') }}" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End featured section -->

<!-- Start about expo it section -->
<section class="about-section section-gap-half relative" id="about-expo-section">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 col-md-12 about-left">
                <img class="img-fluid" src="{{ asset('img/app1-img.png') }}" alt="">
            </div>
            <div class="col-lg-5 col-md-7 about-right">
                <h4>ABOUT EXPO IT</h4>
                <h1></h1>
                <p>Expo IT merupakan sebuah ajang yang mempertunjukkan hasil mahasiswa Fakultas Ilmu Komputer
                    Universitas Jember pada khalayak umum yang diharapkan membawa manfaat untuk siswa - siswi
                    Sekolah Menengah Atas (SMA) dan masyarakat umum</p>
            </div>
        </div>
    </div>

    <div class="floating-shapes">
            <span data-parallax='{"x": 150, "y": -20, "rotateZ":500}'>
                <img src="{{ asset('img/shape/fl-shape-1.png') }}" alt="">
            </span>
        <span data-parallax='{"x": 250, "y": 150, "rotateZ":500}'>
                <img src="{{ asset('img/shape/fl-shape-2.png') }}" alt="">
            </span>
        <span data-parallax='{"x": -180, "y": 80, "rotateY":2000}'>
                <img src="{{ asset('img/shape/fl-shape-3.png') }}" alt="">
            </span>
        <span data-parallax='{"x": -20, "y": 180}'>
                <img src="{{ asset('img/shape/fl-shape-4.png') }}" alt="">
            </span>
        <span data-parallax='{"x": 300, "y": 70}'>
                <img src="{{ asset('img/shape/fl-shape-5.png') }}" alt="">
            </span>
        <span data-parallax='{"x": 250, "y": 180, "rotateZ":1500}'>
                <img src="{{ asset('img/shape/fl-shape-6.png') }}" alt="">
            </span>
        <span data-parallax='{"x": 180, "y": 10, "rotateZ":2000}'>
                <img src="{{ asset('img/shape/fl-shape-7.png') }}" alt="">
            </span>
        <span data-parallax='{"x": 60, "y": -100}'>
                <img src="{{ asset('img/shape/fl-shape-9.png') }}" alt="">
            </span>
        <span data-parallax='{"x": -30, "y": 150, "rotateZ":1500}'>
                <img src="{{ asset('img/shape/fl-shape-10.png') }}" alt="">
            </span>
    </div>
</section>
<!-- End about expo it section -->

<!-- Start about semnas section -->
<section class="about-section section-gap-half relative" id="about-semnas-section">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-5 col-md-7 about-right">
                <h4>ABOUT SEMINAR NASIONAL</h4>
                <h2>Developing the creative and innovative potential of young people</h2>
                <p>Seminar nasional EXPO IT 2019 diharapkan memberikan pembelajaran bagaimana kita mampu untuk
                    mengambil pemanfaatan dan peran penting dalam bisnis start up di era Revolusi dan Industri 4.0
                </p>
            </div>
            <div class="col-lg-6 col-md-12 about-left">
                <img class="img-fluid" src="{{ asset('img/app2-img.png') }}" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End about semnas section -->

<!-- Start about next career section -->
<section class="about-section section-gap-half relative" id="about-nextcareer-section">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 col-md-12 about-left">
                <img class="img-fluid" src="{{ asset('img/app3-img.png') }}" alt="">
            </div>
            <div class="col-lg-5 col-md-7 about-right">
                <h4>ABOUT NEXT CAREER</h4>
                <h1>Planning your career for the future</h1>
                <p>Next Carrier merupakan kegiatan dalam bentuk pameran dan workshop yang diisi oleh berbagai
                    perusahaan pencari tenaga kerja. Kegiatan Next Carrier diperuntukkan khususnya mahasiswa tingkat
                    akhir atau alumni Sistem Informasi Fakultas Ilmu Komputer dan masyarakat Jember. </p>
            </div>
        </div>
    </div>
    <div class="floating-shapes">
            <span data-parallax='{"x": 150, "y": -20, "rotateZ":500}'>
                <img src="{{ asset('img/shape/fl-shape-1.png') }}" alt="">
            </span>
        <span data-parallax='{"x": 250, "y": 150, "rotateZ":500}'>
                <img src="{{ asset('img/shape/fl-shape-2.png') }}" alt="">
            </span>
        <span data-parallax='{"x": -180, "y": 80, "rotateY":2000}'>
                <img src="{{ asset('img/shape/fl-shape-3.png') }}" alt="">
            </span>
        <span data-parallax='{"x": -20, "y": 180}'>
                <img src="{{ asset('img/shape/fl-shape-4.png') }}" alt="">
            </span>
        <span data-parallax='{"x": 300, "y": 70}'>
                <img src="{{ asset('img/shape/fl-shape-5.png') }}" alt="">
            </span>
        <span data-parallax='{"x": 250, "y": 180, "rotateZ":1500}'>
                <img src="{{ asset('img/shape/fl-shape-6.png') }}" alt="">
            </span>
        <span data-parallax='{"x": 180, "y": 10, "rotateZ":2000}'>
                <img src="{{ asset('img/shape/fl-shape-7.png') }}" alt="">
            </span>
        <span data-parallax='{"x": 60, "y": -100}'>
                <img src="{{ asset('img/shape/fl-shape-9.png') }}" alt="">
            </span>
        <span data-parallax='{"x": -30, "y": 150, "rotateZ":1500}'>
                <img src="{{ asset('img/shape/fl-shape-10.png') }}" alt="">
            </span>
    </div>
</section>
<!-- End about next career section -->

<!-- Start feature section -->
<section class="feature-section section-gap-full" id="feature-section">
    <div class="container">
        <div class="row align-items-center feature-wrap">
            <div class="col-lg-4 header-left">
                <h1>
                    Announcement
                </h1>
                <a class="primary-btn" href="#">Baca lebih lanjut
                    <span class="ti-arrow-right"></span>
                </a>
            </div>
            <div class="col-lg-8">
                <div class="row features-wrap">
                    <div class="col-md-4">
                        <div class="single-feature relative">
                            <div class="overlay overlay-bg"></div>
                            <h3>Lokasi Acara</h3>
                            <p>
                                Gedung Soetardjo, Universitas Jember
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-feature relative">
                            <div class="overlay overlay-bg"></div>
                            <h3>Tanggal Acara</h3>
                            <p>
                                Minggu, 27 Oktober 2019 <br>Pukul 07:00 WIB - Selesai
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-feature relative">
                            <div class="overlay overlay-bg"></div>
                            <h3>Fasilitas</h3>
                            <p>
                                WiFi, ilmu yang bermanfaat, panitia seksi
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End feature section -->

<!-- Start faq section -->
<section class="faq-section section-gap-half" id="faq-section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="faq-left col-lg-4">
                <h2>Frequently Asked Question</h2>
                <p>
                    Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorperi.
                </p>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est voluptatibus, tempora odio dicta
                    molestiae recusandae delectus perferendis eveniet aspernatur voluptatum earum dolore
                    necessitatibus odit perspiciatis eos, quidem soluta autem esse.
                </p>
            </div>
            <div class="col-lg-7">
                <dl class="accordion">
                    <dt>
                        <a href="#" class="active">Started several mistake joy say painful removed reached end.</a>
                    </dt>
                    <dd>
                        Far curiosity incommode now led smallness allowance. Favour bed assure son things yet. She
                        consisted consulted elsewhere happiness disposing household any old the. Widow downs you
                        new shade drift hopes small. So otherwise commanded sweetness we improving.
                    </dd>
                    <dt>
                        <a href="#">Although moreover mistaken kindness me feelings do be marianne?</a>
                    </dt>
                    <dd>
                        Far curiosity incommode now led smallness allowance. Favour bed assure son things yet. She
                        consisted consulted elsewhere happiness disposing household any old the. Widow downs you
                        new shade drift hopes small. So otherwise commanded sweetness we improving.
                    </dd>
                    <dt>
                        <a href="#">By in no ecstatic wondered disposal my speaking?</a>
                    </dt>
                    <dd>
                        Far curiosity incommode now led smallness allowance. Favour bed assure son things yet. She
                        consisted consulted elsewhere happiness disposing household any old the. Widow downs you
                        new shade drift hopes small. So otherwise commanded sweetness we improving.
                    </dd>
                </dl>
            </div>
        </div>
    </div>
</section>
<!-- End faq section -->

<!-- Start download section -->
<section class="download-section section-gap-quarter" id="download-section">
    <div class="container">
        <div class="row justify-items-between align-items-center">
            <div class="col-lg-12 registration-title">
                <h1>Registration</h1>
                <p>
                    Daftarkan diri anda sekarang!! sebelum kuota terpenuhi dan anda menyesal tidak mengikuti
                    serangkaian acara EXPO IT
                </p>
            </div>
            <div class="col-lg-12 row">
                <div class="col-lg-6 registration-left">
                    <div class="row justify-content-center form-row">
                        <div class="col-lg-12">
                            <form action="{{ url('/register-participant') }}" method="post">
                                @csrf
                                <div class="row contact-form-wrap justify-content-center">
                                    <div class="col-md-12 form-title">
                                        <h3>Peserta</h3>
                                        <p>Daftarkan diri anda menjadi peserta seminar nasional EXPO IT</p>
                                    </div>
                                    <div class="col-md-12 contact-name form-col">
                                        <input name="name" id="name" class="form-control" type="text"
                                               placeholder="Name*" onfocus="this.placeholder=''"
                                               onblur="this.placeholder='Name*'">
                                    </div>
                                    <div class="col-md-12 contact-email form-col">
                                        <input name="email" id="mail" class="form-control" type="email"
                                               placeholder="E-mail*" onfocus="this.placeholder=''"
                                               onblur="this.placeholder='Email*'">
                                    </div>
                                    <div class="col-md-12">
                                        <input name="phone" id="phone" class="form-control" type="phone"
                                               placeholder="Phone Number*" onfocus="this.placeholder=''"
                                               onblur="this.placeholder='Phone Number*'">
                                    </div>
                                    <input type="submit" class="btn primary-btn" value="Registration">
                                    <div id="msg" class="message"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row justify-content-center form-row">
                        <div class="col-lg-12">
                            <form action="{{ url('/register-company') }}" method="post">
                                @csrf
                                <div class="row contact-form-wrap justify-content-center">
                                    <div class="col-md-12 form-title">
                                        <h3>Perusahaan</h3>
                                        <p>Daftarkan perusahaan anda untuk mendirikan stand di EXPO IT kami</p>
                                    </div>
                                    <div class="col-md-12 contact-name form-col">
                                        <input name="name" id="name" class="form-control" type="text"
                                               placeholder="Name*" onfocus="this.placeholder=''"
                                               onblur="this.placeholder='Name*'">
                                    </div>
                                    <div class="col-md-12 contact-email form-col">
                                        <input name="email" id="mail" class="form-control" type="email"
                                               placeholder="E-mail*" onfocus="this.placeholder=''"
                                               onblur="this.placeholder='Email*'">
                                    </div>
                                    <div class="col-md-12 form-col">
                                        <input name="phone" id="phone" class="form-control" type="phone"
                                               placeholder="Phone Number*" onfocus="this.placeholder=''"
                                               onblur="this.placeholder='Phone Number*'">
                                    </div>
                                    <div class="col-md-12">
                                        <input name="company" id="company" class="form-control" type="text"
                                               placeholder="Company*" onfocus="this.placeholder=''"
                                               onblur="this.placeholder='Company*'">
                                    </div>
                                    <input type="submit" class="btn primary-btn" value="Registration">
                                    <div id="msg" class="message"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End download section -->

<!-- Start footer section -->
<footer class="footer-section section-gap-half">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 footer-left">
                <a href="#">
                    <img src="{{ asset('img/logo-w.png') }}" alt="">
                </a>
                <p class="copyright-text">&copy; 2018 Design With
                    <i class="fa fa-heart" aria-hidden="true"></i> By
                    <a href="http://dopetheme.com" target="_blank">Dope Theme</a>
                </p>
            </div>
            <div class="col-lg-7">
                <ul id="social">
                    <li>
                        <a target="_blank" href="#">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="#">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="#">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="#">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
                <ul class="footer-menu">
                    <li>
                        <a href="#">Affiliate Program</a>
                    </li>
                    <li>
                        <a href="#">Terms & Conditionss</a>
                    </li>
                    <li>
                        <a href="#">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#">Refund Policy</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- End footer section -->

<div class="scroll-top">
    <i class="ti-angle-up"></i>
</div>

<!--
JS
============================================= -->
<script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('js/vendor/popper.min.js') }}"></script>
<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.parallax-scroll.js') }}"></script>
<script src="{{ asset('js/dopeNav.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
@toastr_js
@toastr_render
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <script>
            toastr.error('{{ $error }}');
        </script>
    @endforeach
@endif
</body>

</html>