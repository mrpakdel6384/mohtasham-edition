<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.rtl.min.css" integrity="sha384-trxYGD5BY4TyBTvU5H23FalSCYwpLA0vWEvXXGm5eytyztxb+97WzzY+IWDOSbav" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/front/aron/plugins/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('/front/aron/css/main.css')}}">
    @yield('topcss')
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CH2QFC76ZY"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-CH2QFC76ZY');
    </script>

    {!! SEO::generate() !!}
</head>

<body>
<header class="menu-holder">
    <nav class="navbar navbar-expand-lg @yield('classTopMenu') navbar-light nav-menu">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand flex-shrink-0  mx-auto ms-lg-0 pe-lg-2 me-lg-4" href="/">
                <img src="/front/aron/images/logo-light.png" class="navbar-floating-logo d-none d-lg-block" width="153" alt="">
                <img src="/front/aron/images/logo-dark.png" class="navbar-stuck-logo" width="153" alt="">
                <img src="/front/aron/images/logo-icon.png" class="d-lg-none" width="58" alt="">
            </a>
            <div class="collapse navbar-collapse order-lg-2 " id="navbarTogglerDemo01">
                <div class="py-3 d-flex justify-content-between border-bottom">
                    <span class="d-md-none ms-4">منو</span>
                    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fal fa-times"></i>
                    </button>
                </div>

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">طراحی سایت</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">نمونه کارهای سایت</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">طراحی سایت فروشگاهی </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            بلاگ
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach($sharecategories as $blogCategory)
                                <li><a class="dropdown-item" href="{{route('content.blog',['category'=>$blogCategory->slug])}}">{{$blogCategory->title}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">سئو</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">آکادمی آرون</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="{{route('contact')}}">
                            تماس با ما
                        </a>

                    </li>
                </ul>

            </div>

            <div class="d-flex align-items-center order-lg-3 ms-lg-auto">
                @guest
                <span class=" btn btn-sm text-mj me-3" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"> ورود
                    <i class="far fa-user ms-2"></i>
                </span>
                    <span class="btn btn-primary  btn-signup d-none d-md-block">ثبت نام</span>
                @endguest
                @auth

                    <div class="d-flex align-items-center  ms-lg-auto">
                        <div class="navbar-tool dropdown">
                            <a class="navbar-tool-icon-box" href="{{route('profile')}}">
                                <img class="navbar-tool-icon-box-img" src="{{asset('front/aron/images/user07.jpeg')}}" alt="Avatar">
                            </a>
                            <a class="navbar-tool-label dropdown-toggle" href="{{route('profile')}}">
                                <small>سلام,</small>{{auth()->user()->name}}
                            </a>

                            <ul class="dropdown-menu dropdown-menu-end" style="width: 15rem;">
                                @if(auth()->user()->isSuperUser() || auth()->user()->isStaffUser())
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center" href="/admin">
                                            <i class="fad fa-user-crown fs-base opacity-60 me-2"></i>

                                            پنل مدیریت
                                            <span class="nav-indicator"></span>

                                        </a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                @endif
                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="{{route('profile')}}">
                                        <i class="fad fa-id-card-alt fs-base opacity-60 me-2"></i>
                                        حساب کاربری
                                        <span class="nav-indicator"></span>

                                    </a>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="dashboard-orders.html">
                                        <i class="fal fa-shopping-bag fs-base opacity-60 me-2"></i>
                                        سفارش ها
                                        <span class="nav-indicator"></span>
                                        <span class="ms-auto fs-xs text-muted">2</span>
                                    </a>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            <i class="fad fa-dollar-sign opacity-60 me-2"></i>
                                       فروش
                                            <span class="ms-auto fs-xs text-muted">۱۲۵۴۵۰۰ تومان</span>
                                        </a>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="dashboard-messages.html">
                                        <i class="fal fa-comment-alt-lines fs-base opacity-60 me-2"></i>

                                        پیام ها<span class="nav-indicator"></span>
                                        <span class="ms-auto fs-xs text-muted">1</span>
                                    </a>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="dashboard-followers.html">
                                        <i class="fad fa-user-friends opacity-60 me-2"></i>

                                        فالورها<span class="ms-auto fs-xs text-muted">34</span>
                                    </a>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="dashboard-reviews.html">
                                        <i class="fad fa-comments opacity-60 me-2"></i>

                                        نظرات
                                        <span class="ms-auto fs-xs text-muted">15</span>
                                    </a>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="dashboard-favorites.html">
                                        <i class="fal fa-heart opacity-60 me-2"></i>

                                        علاقمندیها
                                        <span class="ms-auto fs-xs text-muted">6</span>
                                    </a>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                        <i class="fad fa-sign-out opacity-60 me-2"></i>

                                        خروج
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endauth

            </div>
        </div>
    </nav>

</header>


@yield('maincontent')


<!--FOOTER-->
<footer class="footer bg-dark pt-5 pt-md-6">
    <div class="container pt-3 pt-md-0">
        <div class="row pb-3">
            <div class="col-md-4 mt-n2 pb-3 pb-md-0 mb-4">
                <a class="d-block mb-3" href="/" style="width: 153px;">
                    <img src="/front/aron/images/logo-footer-alt.png" alt="Aron soft"></a>
                <p class="fs-sm text-light opacity-60 pb-2 pb-sm-3">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                <a class="btn-social bs-outline bs-facebook bs-light bs-lg me-2 mb-2" href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="btn-social bs-outline bs-twitter bs-light bs-lg me-2 mb-2" href="#">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a class="btn-social bs-outline bs-instagram bs-light bs-lg me-2 mb-2" href="https://www.instagram.com/aron.soft/" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
            <div class="col-md-2 col-sm-4 ms-auto pb-1 mb-4">
                <div class="widget widget-light">
                    <h4 class="widget-title">آکادمی</h4>
                    <ul>
                        <li><a class="widget-link" href="#">آکادمی آرون</a></li>
                        <li><a class="widget-link" href="#">دوره ها ی آموزشی</a></li>
                        <li><a class="widget-link" href="#"> مقالات آموزشی</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-1 mb-4">
                <div class="widget widget-light">
                    <h4 class="widget-title">مطالب سایت</h4>
                    <ul>
                        <li><a class="widget-link" href="#">اخبار</a></li>
                        <li><a class="widget-link" href="#">فرصت های شغلی</a></li>
                        <li><a class="widget-link" href="#">پروژه ها</a></li>
                        <li><a class="widget-link" href="#">بیانیه ماموریت </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 mb-4">
                <div class="widget widget-light">
                    <h4 class="widget-title">تماس با ما</h4>
                    <ul>
                        <li><a class="widget-link" href="#">پشتیبانی</a></li>
                        <li><a class="widget-link" href="{{route('contact')}}">تماس با ما</a></li>
                        <li><a class="widget-link" href="#">پنل کاربری</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-0 border-light">
        <div class="row align-items-center mt-3 py-4">
            <div class="col-md-6 order-md-2 text-md-end mb-3">
                <ul class="list-inline fs-sm mb-0">
                    <li class="list-inline-item"><a class="nav-link-style nav-link-light" href="#">پشتیبانی</a></li>
                    <li class="list-inline-item"><a class="nav-link-style nav-link-light" href="#">تماس با ما</a></li>
                    <li class="list-inline-item"><a class="nav-link-style nav-link-light" href="#">قوانین و مقررات</a></li>
                </ul>
            </div>
            <div class="col-md-6 order-md-1 mb-3">
                <p class="fs-sm mb-0">
                    <span class="text-light opacity-50 me-1">© کلیه حقوق برای طراحی سایت آرون محفوظ است</span>
                    <a class="nav-link-style nav-link-light" href="https://aron-soft.com" target="_blank" rel="noopener">Aron Soft</a></p>
            </div>
        </div>
    </div>
</footer>





<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog rounded">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h4 class="modal-title text-light" id="exampleModalLabel">ورود و ثبت نام</h4>
                <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="fs-ms text-muted"> ورود به حساب کاربری از طریق حساب گوگل یا مشخصاتی که ثبت نام کرده اید</p>
                <form class="needs-validation" action="{{route('login')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <div class="input-group">
                            <i class="far fa-mail position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                            <input class="form-control rounded" type="email" placeholder="ایمیل" >
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <i class="far fa-lock position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                            <div class="password-toggle w-100">
                                <input class="form-control" id="pass" type="password" placeholder="روزعبور" required="">
                                <label class="password-toggle-btn" aria-label="Show/hide password">
                                    <input class="password-toggle-check" type="checkbox">
                                    <span class="password-toggle-indicator"><i class="fal fa-eye-slash"></i></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3 mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="keep-signed">
                            <label class="form-check-label fs-sm" for="keep-signed">مرا به خاطر بسپار</label>
                        </div>
                        @if (Route::has('password.request'))
                            <a class="nav-link-style fs-ms" href="{{ route('password.request') }}">
                                رمز عبور خود را فراموش کرده اید؟
                            </a>
                        @endif
                    </div>
                    <div class="mb-3">
                        <div class="form-group col-md-8 offset-md-1">
                            <x-recaptcha :has-error="$errors->has('g-recaptcha-response')"></x-recaptcha>
                            @error('g-recaptcha-response')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <button class="btn btn-primary d-block w-100" type="submit">ورود</button>
                    <p class="fs-sm pt-3 mb-0">حساب کاربری ندارید؟ <a href="#" class="fw-medium" data-view="#modal-signup-view">ثبت نام</a></p>
                </form>
            </div>
            <div class="modal-body text-center px-4 pt-2 pb-4">
                <hr class="my-0">
                <p class="fs-sm fw-medium text-heading pt-4">یا ورود با حساب:</p>
                <a class="btn-social bs-google bs-lg mx-1 mb-2" href="{{route('auth.google')}}">
                    <i class="fab fa-google"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('/front/aron/js/jquery-3.6.0.min.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

<script src="{{asset('/front/aron/js/script.js')}}"></script>
<script>
    $(document).ready(function() {

        $(".password-toggle-btn").on('click', function(event) {
            event.preventDefault();
            if($('#pass').attr("type") == "text"){
                $('#pass').attr('type', 'password');
                $('.password-toggle-indicator i').addClass( "fa-eye-slash" );
                $('.password-toggle-indicator i').removeClass( "fa-eye" );
            }else if($('#pass').attr("type") == "password"){
                $('#pass').attr('type', 'text');
                $('.password-toggle-indicator i').removeClass( "fa-eye-slash" );
                $('.password-toggle-indicator i').addClass( "fa-eye" );
            }
        });
    })
</script>

@yield('masterscript')
@include('sweet::alert')
</body>

</html>
