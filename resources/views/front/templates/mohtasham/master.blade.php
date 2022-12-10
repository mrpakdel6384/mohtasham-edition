<!doctype html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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

    <link rel="icon" type="image/png" href="assets/img/favicon.png">
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
                <p><i class="far fa-copyright"></i> EnvyTheme. All Rights Reserved, <script>document.write(new Date().getFullYear())</script></p>
            </div>

            <div class="col-lg-6 col-md-6">
                <ul>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
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