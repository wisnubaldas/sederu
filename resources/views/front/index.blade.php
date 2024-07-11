<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PT SEDERU KARYA SELARAS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
<link rel="apple-touch-icon" sizes="180x180" href="{{asset('FlexStart/assets/img/favicon_io/apple-touch-icon.png')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{asset('FlexStart/assets/img/favicon_io/favicon-32x32.png')}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('FlexStart/assets/img/favicon_io/favicon-16x16.png')}}">
<link rel="manifest" href="/site.webmanifest">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('FlexStart/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('FlexStart/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('FlexStart/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('FlexStart/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('FlexStart/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('FlexStart/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('FlexStart/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  @stack('css')

</head>

<body>
    @include('front.component.header')
    @include('front.component.section-hero')
  <main id="main">
    @include('front.component.section-clients')
    @include('front.component.section-about')
    {{-- @include('front.component.section-values') --}}
    {{-- @include('front.component.section-counts') --}}
    {{-- @include('front.component.section-features') --}}
    @include('front.component.section-services')
    {{-- @include('front.component.section-pricing') --}}
    {{-- @include('front.component.section-faq') --}}
    @include('front.component.section-portofolio',['galeri'=>['1.jpg','3.jpg','3.jpg','4.jpg']])
    @include('front.component.section-team',['galeri'=>[
    [
      'img'=>'pak-zam.png',
      'fb'=>'',
      'tw'=>'',
      'inst'=>'',
      'ld'=>'',
      'name'=>'Zamzam R',
      'pos'=>'Executive Manager',
      'des'=>''
    ],
    [
      'img'=>'nadiyah.png',
      'fb'=>'',
      'tw'=>'',
      'inst'=>'',
      'ld'=>'',
      'name'=>'Nadiayaah F',
      'pos'=>'Ops',
      'des'=>''
  ],
  [
      'img'=>'azam.png',
      'fb'=>'',
      'tw'=>'',
      'inst'=>'',
      'ld'=>'',
      'name'=>'Abdullah Azam',
      'pos'=>'Software Arsitect',
      'des'=>''
  ],
  [
      'img'=>'bu-arta.png',
      'fb'=>'',
      'tw'=>'',
      'inst'=>'',
      'ld'=>'',
      'name'=>'Arta R',
      'pos'=>'Director',
      'des'=>''
      ]
    ]])
    {{-- @include('front.component.section-recent-blog') --}}
    @include('front.component.section-contact')
  </main><!-- End #main -->
    @include('front.component.footer')
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('FlexStart/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('FlexStart/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('FlexStart/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('FlexStart/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('FlexStart/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('FlexStart/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('FlexStart/assets/vendor/php-email-form/validate.js')}}"></script>
  @stack('js')

  <!-- Template Main JS File -->
  <script src="{{asset('FlexStart/assets/js/main.js')}}"></script>
  @stack('app-js')
</body>

</html>