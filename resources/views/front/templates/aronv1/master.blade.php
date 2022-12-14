<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">

    <!-- SEO Meta Tags-->
        {!! SEO::generate() !!}
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="57x57" href="/front/aron/images/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/front/aron/images/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/front/aron/images/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/front/aron/images/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/front/aron/images/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/front/aron/images/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/front/aron/images/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/front/aron/images/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/front/aron/images/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/front/aron/images/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/front/aron/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/front/aron/images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/front/aron/images/favicon-16x16.png">
    <link rel="manifest" href="/front/aron/images/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/front/aron/images/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="manifest" href="{{asset('/front/around/img/site.webmanifest')}}">
    <link rel="mask-icon" color="#5bbad5" href="{{asset('/front/around/img/safari-pinned-tab.svg')}}">
    <meta name="msapplication-TileColor" content="#766df4">
    <meta name="theme-color" content="#ffffff">
    <script async>
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
    <link edia="screen" href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v28.0.0/dist/font-face.css" rel="stylesheet" type="text/css" />
    <!-- Vendor Styles-->
    @yield('topcss')
    <link rel="stylesheet" media="screen" href="{{asset('/front/around/vendor/tiny-slider/dist/tiny-slider.css')}}" />
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{asset('/front/around/css/theme.min.css')}}">
    <!-- Google Tag Manager-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CH2QFC76ZY"></script>
    <script async>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-CH2QFC76ZY');
    </script>
</head>
<!-- Body-->
<body>
<!-- Page loading spinner-->
<div class="page-loading active">
    <div class="page-loading-inner">
        <div class="page-spinner"></div><span>درحال بارگذاری ...</span>
    </div>
</div>
<main class="page-wrapper">
    <!-- Sign In Modal-->
    <div class="modal fade" id="modal-signin" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0">
                <div class="view show" id="modal-signin-view">
                    <div class="modal-header border-0 bg-dark px-4">
                        <h4 class="modal-title text-light">ورود</h4>
                        <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="btn-close "></button>
                    </div>
                    <div class="modal-body px-4">
                        <p class="fs-ms text-muted">با استفاده از ایمیل و گذرواژه ارائه شده در هنگام ثبت نام وارد حساب خود شوید.</p>
                        <form class="needs-validation" action="{{route('login')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <div class="input-group">
                                    <i class="ai-mail position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                                    <input class="form-control rounded" type="email" name="email" placeholder="آدرس ایمیل" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <i class="ai-lock position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                                    <div class="password-toggle w-100">
                                        <input class="form-control" type="password" name="password" placeholder="رمز عبور" required>
                                        <label class="password-toggle-btn" aria-label="Show/hide password">
                                            <input class="password-toggle-check" type="checkbox">
                                            <span class="password-toggle-indicator"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-group col-md-8 ">
                                    <x-recaptcha :has-error="$errors->has('g-recaptcha-response')"></x-recaptcha>
                                    @error('g-recaptcha-response')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3 mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="keep-signed">
                                    <label class="form-check-label fs-sm" for="keep-signed">مرا به خاطر بسپار</label>
                                </div>
                                @if (Route::has('password.request'))
                                    <a class="nav-link-style fs-ms" href="{{ route('password.request') }}">رمز عبور خود را فرامشو کرده اید؟</a>
                                @endif
                            </div>
                            <button class="btn btn-primary d-block w-100" type="submit">ورود</button>
                            <p class="fs-sm pt-3 mb-0">ثبت نام نکرده اید؟ <a href='#' class='fw-medium' data-view='#modal-signup-view'>ثبت نام</a></p>
                        </form>
                    </div>
                </div>
                <div class="view" id="modal-signup-view">
                    <div class="modal-header border-0 bg-dark px-4">
                        <h4 class="modal-title text-light">ثبت نام</h4>
                        <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="btn-close"></button>
                    </div>
                    <div class="modal-body px-4">
                        <p class="fs-ms text-muted">ثبت نام کمتر از یک دقیقه طول می کشد اما به شما اما به شما امکانات خوبی رو ارائه میده.</p>
                        <form class="needs-validation" action="{{route('register')}}" method="post" novalidate>
                            @csrf
                            <div class="mb-3">
                                <input class="form-control" name="name" type="text" placeholder="نام" required>
                            </div>
                            <div class="mb-3">
                                <input class="form-control" name="email" type="text" placeholder="ایمیل" required>
                            </div>
                            <div class="mb-3 password-toggle">
                                <input class="form-control" name="password" type="password" placeholder="رمزعبور" required>
                                <label class="password-toggle-btn" aria-label="Show/hide password">
                                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                                </label>
                            </div>
                            <div class="mb-3 password-toggle">
                                <input class="form-control" type="password" name="password_confirmation" placeholder="تکرار رمز عبور" required>
                                <label class="password-toggle-btn" aria-label="Show/hide password">
                                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                                </label>
                            </div>
                            <div class="mb-3">
                                <div class="form-group col-md-8 ">
                                    <x-recaptcha :has-error="$errors->has('g-recaptcha-response')"></x-recaptcha>
                                    @error('g-recaptcha-response')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <button class="btn btn-primary d-block w-100" type="submit">ثبت نام</button>
                            <p class="fs-sm pt-3 mb-0">قبلا ثبت نام کرده اید؟ <a href='#' class='fw-medium' data-view='#modal-signin-view'>ورود</a></p>
                        </form>
                    </div>
                </div>
                <div class="modal-body text-center px-4 pt-2 pb-4">
                    <hr class="my-0">
                    <p class="fs-sm fw-medium text-heading pt-4">یا ورود با :</p>
                    <a class="btn-social bs-facebook bs-lg mx-1 mb-2" href="#">
                        <i class="ai-facebook"></i>
                    </a>
                    <a class="btn-social bs-twitter bs-lg mx-1 mb-2" href="#">
                        <i class="ai-twitter"></i>
                    </a>
                    <a class="btn-social bs-instagram bs-lg mx-1 mb-2" href="#">
                        <i class="ai-instagram"></i>
                    </a>
                    <a class="btn-social bs-google bs-lg mx-1 mb-2" href="{{route('auth.google')}}">
                        <i class="ai-google"></i>
                    </a>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar (Floating light)-->
@include('front.templates.aronv1.layouts.header')
@yield('maincontent')
</main>

@include('front.templates.aronv1.layouts.footer')
<!-- Back to top button-->
<a class="btn-scroll-top" href="#top" data-scroll data-fixed-element>
    <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
    <i class="btn-scroll-top-icon ai-arrow-up">   </i>
</a>
<!-- Vendor scrits: js libraries and plugins-->
<script src="{{asset('/front/around/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}" async></script>
<script src="{{asset('/front/around/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js')}}" async></script>

@yield('mstscript')
<!-- Main theme script-->
<script src="{{asset('/front/around/js/theme.min.js')}}" async></script>
@yield('bottomscript')
@include('sweet::alert')
</body>

</html>
