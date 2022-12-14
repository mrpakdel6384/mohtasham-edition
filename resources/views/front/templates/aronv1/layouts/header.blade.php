<!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
<header class="header navbar navbar-expand-lg @yield('classTopMenu')  d-rtl" >
    <div class="container px-0 px-xl-3">
        <button class="navbar-toggler ms-n2 me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#primaryMenu">
            <span class="navbar-toggler-icon">

            </span>
        </button>
        <a class="navbar-brand flex-shrink-0 order-lg-1 mx-auto ms-lg-0 pe-lg-2 me-lg-4" href="/">
            <img class="navbar-floating-logo d-none d-lg-block" src="{{asset('/front/around/img/logo/logo-light.png')}}" alt="Aron soft" width="153">
            <img class="navbar-stuck-logo" src="{{asset('/front/around/img/logo/logo-dark.png')}}" alt="Aron soft" width="153">
            <img class="d-lg-none" src="{{asset('/front/around/img/logo/logo-icon.png')}}" alt="Aron soft" width="58">
        </a>
        @auth
        <div class="d-flex align-items-center order-lg-3 ms-lg-auto">
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
                                <i class="ai-user-check fs-base opacity-60 ms-2"></i>
                                پنل مدیریت

                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                    @endif

                    {{--<li>
                        <a class="dropdown-item d-flex align-items-center" href="dashboard-orders.html">
                            <i class="ai-shopping-bag fs-base opacity-60 me-2"></i>Orders<span class="nav-indicator"></span>
                            <span class="ms-auto fs-xs text-muted">2</span>
                        </a>
                    </li>--}}
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{route('profile')}}">
                            <i class="ai-user-x fs-base opacity-60 ms-2"></i>
                            پروفایل

                        </a>
                    </li>
                    <li class="dropdown-divider"></li>
                    {{--<li><a class="dropdown-item d-flex align-items-center" href="">
                            <i class="ai-dollar-sign fs-base opacity-60 ms-2"></i>
                            سفارش ها
                            <span class="me-auto fs-xs text-muted">1500000تومان</span></a></li>--}}
                    <li class="dropdown-divider"></li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="">
                            <i class="ai-message-square fs-base opacity-60 ms-2"></i>
                            پیام ها
                            <span class="nav-indicator"></span>
                            <span class="me-auto fs-xs text-muted">1</span>
                        </a>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <i class="ai-users fs-base opacity-60 ms-2"></i>
                            Followers
                            <span class="me-auto fs-xs text-muted">{{auth()->user()->followers()->count()}}</span>
                        </a>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <i class="ai-star fs-base opacity-60 ms-2"></i>
                            نظرات
                            <span class="me-auto fs-xs text-muted">15
                            </span>
                        </a>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <i class="ai-heart fs-base opacity-60 ms-2"></i>
                            علاقمندیها
                            <span class="me-auto fs-xs text-muted">6</span>
                        </a>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            <i class="ai-log-out fs-base opacity-60 ms-2"></i>خروج</a>
                    </li>
                </ul>
            </div>
        </div>
        @endauth
        @guest
        <div class="d-flex align-items-center order-lg-3 ms-lg-auto">
            <a class="nav-link-style fs-sm text-nowrap" href="#modal-signin" data-bs-toggle="modal" data-view="#modal-signin-view">
                <i class="ai-user fs-xl me-2 align-middle"></i>ورود
            </a>
            <a class="btn btn-primary me-grid-gutter d-none d-lg-inline-block navbar-btn" href="#modal-signin" data-bs-toggle="modal" data-view="#modal-signup-view">ثبت نام</a>
            <a class="btn btn-primary me-grid-gutter d-none d-lg-inline-block navbar-stuck-btn" href="#modal-signin" data-bs-toggle="modal" data-view="#modal-signup-view">ثبت نام</a>
        </div>
        @endguest
        <div class="offcanvas offcanvas-collapse order-lg-2" id="primaryMenu">
            <div class="offcanvas-header navbar-shadow">
                <h5 class="mt-1 mb-0">منو</h5>
                <button class="btn-close lead" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <!-- Menu-->
                <ul class="navbar-nav">
                    <li class="nav-item  active">
                        <a class="nav-link" href="/">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown dropdown-mega"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">بلاگ</a>
                        <div class="dropdown-menu">
                            @foreach(\App\Category::where('parent_id',0)->get() as $parent)
                                <div class="dropdown-column mb-2 mb-lg-0">
                                    <h5 class="dropdown-header">{{$parent->title}}</h5>
                                    @if($parent->child->count() > 0)
                                        @foreach($parent->child as $child)
                                            <a href="{{route('content.blog',['category'=>$child->slug])}}" class="dropdown-item">{{$child->title}}</a>
                                        @endforeach
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">طراحی سایت</a>
                        <ul class="dropdown-menu">
                            @foreach(\App\CategoryPortfolio::all() as $categoryportfolio)
                                <li><a class="dropdown-item" href="{{route('portfolio.service',$categoryportfolio->slug)}}">{{$categoryportfolio->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">نمونه کارها</a>
                        <ul class="dropdown-menu">
                            @foreach(\App\CategoryPortfolio::all() as $categoryportfolio)
                                <li><a class="dropdown-item" href="{{route('portfolio.blog',$categoryportfolio->slug)}}">{{$categoryportfolio->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="#" >سئو</a>
                    </li>
                    <li class="nav-item dropdown dropdown-mega"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">آکادمی آرون</a>
                        <div class="dropdown-menu">
                            <div class="dropdown-column mb-2 mb-lg-0">
                                <h5 class="dropdown-header">طراحی وب</h5>
                                <a class="dropdown-item" href="">آموزشی</a>
                                <a class="dropdown-item" href="">خبری</a>

                            </div>
                            <div class="dropdown-column mb-2 mb-lg-0">
                                <h5 class="dropdown-header">برنامه نویسی وب</h5>
                                <a class="dropdown-item" href="">برنامه نویسی</a>
                                <a class="dropdown-item" href="">طراحی وب</a>
                                <a class="dropdown-item" href="">تکنولوژی</a>
                                <a class="dropdown-item" href="">نرم افزار</a>
                                <a class="dropdown-item" href="">سخت افزار</a>
                            </div>
                            <div class="dropdown-column mb-2 mb-lg-0">
                                <h5 class="dropdown-header">برنامه نویسی موبایل</h5>
                                <a class="dropdown-item" href="">برنامه نویسی</a>
                                <a class="dropdown-item" href="">طراحی وب</a>
                                <a class="dropdown-item" href="">تکنولوژی</a>
                                <a class="dropdown-item" href="">نرم افزار</a>
                                <a class="dropdown-item" href="">سخت افزار</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="#" >درباره ما</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="{{route('priceestimation')}}" >استعلام قیمت</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="{{route('contact')}}" >تماس با ما</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
