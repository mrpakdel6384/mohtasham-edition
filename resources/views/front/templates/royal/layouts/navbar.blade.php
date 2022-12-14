<div class="nav-bg">
    <nav class="navbar navbar-expand-lg navbar-light   container py-lg-3 ">
        <a href="" class="navbar-brand">
            <img src="{{asset('front/royal/images/logo-royal.png')}}" alt="" style="width: 70px;height: auto" >
        </a>

        <button class="navbar-toggler bg-warning mr-auto" type="button" data-toggle="collapse" data-target="#navigationTop" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fad fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navigationTop">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="/" class="nav-link">صفحه اصلی</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        خدمات
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach($shareservices as $service)
                            <a class="dropdown-item text-right @if(!$loop->last) border-bottom @endif py-3 px-3" href="{{route('front.service.single' ,['service'=>$service->slug])}}">{{$service->title}}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        پروژه ها
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach($sharecategoryPortfolios as $categoryPortfolio)

                            <a class="dropdown-item text-right @if(!$loop->last) border-bottom @endif py-3 px-3" href="{{route('portfolio.blog' ,['category'=>$categoryPortfolio->id])}}">{{$categoryPortfolio->name}}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        بلاگ
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach($sharecategories as $category)

                            <a class="dropdown-item text-right @if(!$loop->last) border-bottom @endif py-3 px-3" href="{{route('content.blog' ,['category'=>$category->slug])}}">{{$category->title}}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{route('products')}}" class="nav-link">محصولات</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('content.single',['category'=>'مقالات-سایت','content'=>'درباره-ما'])}}" class="nav-link"> درباره ما</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('agents')}}" class="nav-link"> نمایندگی ها</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('contact')}}" class="nav-link"> تماس با ما</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">ورود</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">ثبت نام</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <i class="fa fa-user"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-right" href="{{route('profile')}}">
                                حساب کاربری
                            </a>
                            <a class="dropdown-item text-right" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                خروج
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>
</div>
