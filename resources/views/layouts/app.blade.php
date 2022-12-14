<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <title>ورود و ثبت نام</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- SEO Meta Tags-->
    <meta name="description" content="Around - Multipurpose Bootstrap Template">
    <meta name="keywords" content="bootstrap, business, consulting, coworking space, services, creative agency, dashboard, e-commerce, mobile app showcase, multipurpose, product landing, shop, software, ui kit, web studio, landing, html5, css3, javascript, gallery, slider, touch, creative">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#5bbad5" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#766df4">
    <meta name="theme-color" content="#ffffff">
    <!-- Page loading styles-->
    <style>
        .page-loading {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -webkit-transition: all .4s .2s ease-in-out;
            transition: all .4s .2s ease-in-out;
            background-color: #fff;
            opacity: 0;
            visibility: hidden;
            z-index: 9999;
        }
        .page-loading.active {
            opacity: 1;
            visibility: visible;
        }
        .page-loading-inner {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            text-align: center;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: opacity .2s ease-in-out;
            transition: opacity .2s ease-in-out;
            opacity: 0;
        }
        .page-loading.active > .page-loading-inner {
            opacity: 1;
        }
        .page-loading-inner > span {
            display: block;
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            font-weight: normal;
            color: #737491;
        }
        .page-spinner {
            display: inline-block;
            width: 2.75rem;
            height: 2.75rem;
            margin-bottom: .75rem;
            vertical-align: text-bottom;
            border: .15em solid #766df4;
            border-right-color: transparent;
            border-radius: 50%;
            -webkit-animation: spinner .75s linear infinite;
            animation: spinner .75s linear infinite;
        }
        @-webkit-keyframes spinner {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        @keyframes spinner {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

    </style>
    <!-- Page loading scripts-->
    <script>
        (function () {
            window.onload = function () {
                var preloader = document.querySelector('.page-loading');
                preloader.classList.remove('active');
                setTimeout(function () {
                    preloader.remove();
                }, 2000);
            };
        })();

    </script>
    <!-- Vendor Styles-->
    <link rel="stylesheet" media="screen" href="{{asset('/front/around/vendor/simplebar/dist/simplebar.min.css')}}"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{asset('/front/around/css/theme.min.css')}}">
    <link rel="stylesheet" media="screen" href="{{asset('/front/around/css/custom.css')}}">
</head>
<!-- Body-->
<body @yield('bgcolor')>
<!-- Page loading spinner-->
<div class="page-loading active">
    <div class="page-loading-inner">
        <div class="page-spinner"></div><span>Loading...</span>
    </div>
</div>
<main class="page-wrapper d-flex flex-column">
    <!-- Sign In Modal-->
    <div class="modal fade" id="modal-signin" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0">
                <div class="view show" id="modal-signin-view">
                    <div class="modal-header border-0 bg-dark px-4">
                        <h4 class="modal-title text-light">Sign in</h4>
                        <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="btn-close "></button>
                    </div>
                    <div class="modal-body px-4">
                        <p class="fs-ms text-muted">Sign in to your account using email and password provided during registration.</p>
                        <form class="needs-validation" novalidate>
                            <div class="mb-3">
                                <div class="input-group"><i class="ai-mail position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                                    <input class="form-control rounded" type="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group"><i class="ai-lock position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                                    <div class="password-toggle w-100">
                                        <input class="form-control" type="password" placeholder="Password" required>
                                        <label class="password-toggle-btn" aria-label="Show/hide password">
                                            <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3 mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="keep-signed">
                                    <label class="form-check-label fs-sm" for="keep-signed">Keep me signed in</label>
                                </div><a class="nav-link-style fs-ms" href="password-recovery.html">Forgot password?</a>
                            </div>
                            <button class="btn btn-primary d-block w-100" type="submit">Sign in</button>
                            <p class="fs-sm pt-3 mb-0">Don't have an account? <a href='#' class='fw-medium' data-view='#modal-signup-view'>Sign up</a></p>
                        </form>
                    </div>
                </div>
                <div class="view" id="modal-signup-view">
                    <div class="modal-header border-0 bg-dark px-4">
                        <h4 class="modal-title text-light">Sign up</h4>
                        <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="btn-close"></button>
                    </div>
                    <div class="modal-body px-4">
                        <p class="fs-ms text-muted">Registration takes less than a minute but gives you full control over your orders.</p>
                        <form class="needs-validation" novalidate>
                            <div class="mb-3">
                                <input class="form-control" type="text" placeholder="Full name" required>
                            </div>
                            <div class="mb-3">
                                <input class="form-control" type="text" placeholder="Email" required>
                            </div>
                            <div class="mb-3 password-toggle">
                                <input class="form-control" type="password" placeholder="Password" required>
                                <label class="password-toggle-btn" aria-label="Show/hide password">
                                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                                </label>
                            </div>
                            <div class="mb-3 password-toggle">
                                <input class="form-control" type="password" placeholder="Confirm password" required>
                                <label class="password-toggle-btn" aria-label="Show/hide password">
                                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                                </label>
                            </div>
                            <button class="btn btn-primary d-block w-100" type="submit">Sign up</button>
                            <p class="fs-sm pt-3 mb-0">Already have an account? <a href='#' class='fw-medium' data-view='#modal-signin-view'>Sign in</a></p>
                        </form>
                    </div>
                </div>
                <div class="modal-body text-center px-4 pt-2 pb-4">
                    <hr class="my-0">
                    <p class="fs-sm fw-medium text-heading pt-4">Or sign in with</p><a class="btn-social bs-facebook bs-lg mx-1 mb-2" href="#"><i class="ai-facebook"></i></a><a class="btn-social bs-twitter bs-lg mx-1 mb-2" href="#"><i class="ai-twitter"></i></a><a class="btn-social bs-instagram bs-lg mx-1 mb-2" href="#"><i class="ai-instagram"></i></a><a class="btn-social bs-google bs-lg mx-1 mb-2" href="#"><i class="ai-google"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar (Floating dark)-->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
    @include('front.templates.aronv1.layouts.header')
    <!-- Page content-->
    @yield('content')
</main>
<!-- Footer-->
<footer class="footer py-4">
    <div class="container d-md-flex align-items-center justify-content-between py-2 text-center text-md-end">
        <ul class="list-inline fs-sm mb-3 mb-md-0 order-md-2">
            <li class="list-inline-item my-1"><a class="nav-link-style" href="{{route('contact')}}">تماس با ما</a></li>
            <li class="list-inline-item my-1"><a class="nav-link-style" href="#">پشتیبانی</a></li>
            <li class="list-inline-item my-1"><a class="nav-link-style" href="#">قوانین و مقررات</a></li>
        </ul>
        <p class="fs-sm mb-0 me-3 order-md-1">
            <span class="text-muted me-1">© کلیه حقوق برای طراحی سایت </span>
            <a class="nav-link-style fw-normal" href="/" target="_blank" rel="noopener">Aron Soft</a> محفوض است</p>
    </div>
</footer>
<!-- Back to top button-->
<a class="btn-scroll-top" href="#top" data-scroll data-fixed-element>
    <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
    <i class="btn-scroll-top-icon ai-arrow-up"></i>
</a>

<script src="{{asset('/front/around/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('/front/around/vendor/simplebar/dist/simplebar.min.js')}}"></script>
<script src="{{asset('/front/around/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js')}}"></script>
<!-- Main theme script-->
<script src="{{asset('/front/around/js/theme.min.js')}}"></script>

@yield('script')
@include('sweet::alert')
</body>

</html>
