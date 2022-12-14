<header class="menu-holder">
    <nav class="navbar navbar-expand-lg {{$classTopMenu}} navbar-light ">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand flex-shrink-0  mx-auto ms-lg-0 pe-lg-2 me-lg-4" href="#">
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
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="#">
                            تماس با ما
                        </a>

                    </li>
                </ul>

            </div>

            <div class="d-flex align-items-center order-lg-3 ms-lg-auto">
                <span class=" btn btn-sm text-mj me-3" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"> ورود<i class="far fa-user ms-2"></i></span>
                <span class="btn btn-primary  btn-signup d-none d-md-block">ثبت نام</span>
            </div>
        </div>
    </nav>

</header>
