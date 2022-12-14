<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="{{asset('front/mohtasham/assets/css/bootstrap.min.css')}}">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="{{asset('front/mohtasham/assets/css/animate.min.css')}}">
    <!-- FontAwesome Min CSS -->
    <link rel="stylesheet" href="{{asset('front/mohtasham/assets/css/fontawesome.min.css')}}">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="{{asset('front/mohtasham/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/mohtasham/assets/css/owl.theme.default.min.css')}}">
    <!-- FlatIcon CSS -->
    <link rel="stylesheet" href="{{asset('front/mohtasham/assets/css/flaticon.css')}}">
    <!-- Odometer CSS -->
    <link rel="stylesheet" href="{{asset('front/mohtasham/assets/css/odometer.min.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('front/mohtasham/assets/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('front/mohtasham/assets/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('front/mohtasham/assets/css/color6.css')}}">

    {!! SEO::generate() !!}

    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('front/mohtasham/assets/img/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('front/mohtasham/assets/img/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('front/mohtasham/assets/img/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('front/mohtasham/assets/img/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('front/mohtasham/assets/img/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('front/mohtasham/assets/img/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('front/mohtasham/assets/img/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('front/mohtasham/assets/img/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('front/mohtasham/assets/img/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('front/mohtasham/assets/img/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('front/mohtasham/assets/img/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('front/mohtasham/assets/img/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('front/mohtasham/assets/img/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('front/mohtasham/assets/img/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('front/mohtasham/assets/img/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
</head>

<body id="home" data-bs-spy="scroll" data-bs-offset="70">

<!-- Preloader -->
<div class="preloader">
    <div class="loader">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>

        <span>M</span>
    </div>
</div>
<!-- End Preloader -->

<!-- Start Navbar Area -->
@include('front.templates.mohtasham.layouts.navbar')
<!-- End Navbar Area -->
@yield('maincontent')
@include('front.templates.mohtasham.layouts.footer')

<!-- Start Copyright Area -->
<div class="copyright-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <p>
                    <i class="far fa-copyright"></i>
                    <a href="https://aron-soft.com" target="_blank" class="text-white">Design By : <span class="text-warning">Aron Soft</span></a>. All Rights Reserved,
                    <script>document.write(new Date().getFullYear())</script></p>
            </div>

            <div class="col-lg-6 col-md-6">
                {{--<ul>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>--}}
            </div>
        </div>
    </div>
</div>
<!-- End Copyright Area -->

<!-- jQuery Min JS -->
<script src="{{asset('front/mohtasham/assets/js/jquery.min.js')}}"></script>
<!-- Bootstrap Min JS -->
<script src="{{asset('front/mohtasham/assets/js/bootstrap.bundle.min.js')}}"></script>
<!-- Owl Carousel Min JS -->
<script src="{{asset('front/mohtasham/assets/js/owl.carousel.min.js')}}"></script>
<!-- Appear Min JS -->
<script src="{{asset('front/mohtasham/assets/js/jquery.appear.min.js')}}"></script>
<!-- Odometer Min JS -->
<script src="{{asset('front/mohtasham/assets/js/odometer.min.js')}}"></script>
<!-- Tilt Min JS -->
<script src="{{asset('front/mohtasham/assets/js/tilt.jquery.min.js')}}"></script>
<!-- WOW Min JS -->
<script src="{{asset('front/mohtasham/assets/js/wow.min.js')}}"></script>
<!-- AjaxChimp Min JS -->
<script src="{{asset('front/mohtasham/assets/js/jquery.ajaxchimp.min.js')}}"></script>
<!-- Form Validator Min JS -->
<script src="{{asset('front/mohtasham/assets/js/form-validator.min.js')}}"></script>
<!-- Contact Form Min JS -->
<script src="{{asset('front/mohtasham/assets/js/contact-form-script.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('front/mohtasham/assets/js/main.js')}}"></script>
</body>
</html>