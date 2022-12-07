@component('front.templates.aronv1.layouts.contents' ,['classTopMenu'=>'navbar-light bg-light navbar-shadow navbar-sticky'])

    @slot('css')
        <link rel="stylesheet" media="screen" href="{{asset('/front/around/vendor/simplebar/dist/simplebar.min.css')}}"/>
    @endslot
    <!-- Page content-->
    <div class="sidebar-enabled">
        <div class="container">
            <div class="row">
                <!-- Sidebar-->
                <div class="sidebar col-lg-3 pt-lg-5 d-rtl">
                    <div class="offcanvas offcanvas-collapse" id="blog-sidebar">
                        <div class="offcanvas-header navbar-shadow px-4 mb-3">
                            <h5 class="mt-1 mb-0">Sidebar</h5>
                            <button class="btn-close lead" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body px-4 pt-3 pt-lg-0 ps-lg-0 pe-lg-2 pe-xl-4" data-simplebar>
                            <!-- Search-->
                            <div class="widget mb-5">
                                <h3 class="widget-title">جستجو در بلاگ</h3>
                                <div class="input-group"><i class="ai-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                                    <input class="form-control rounded d-rtl" type="text" placeholder="جستجو">
                                </div>
                            </div>
                            <!-- Categories-->
                            <div class="widget widget-categories mb-5">
                                <h3 class="widget-title">دسته بندی ها</h3>
                                <ul>
                                    @foreach(\App\Category::all() as $category_sidebar)
                                        <li><a class="widget-link" href="{{route('content.blog',['category'=>$category_sidebar->slug])}}">{{$category_sidebar->title}}<small class="text-muted pe-1 me-2">{{$category_sidebar->contents()->count()}}</small></a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- Featured posts-->
                            <div class="widget mt-n1 mb-5">
                                <h3 class="widget-title pb-1">محبوب ترین ها</h3>
                                <div class="d-flex align-items-center pb-1 mb-3"><a class="d-block flex-shrink-0" href="#">
                                        <img class="rounded" src="img/blog/th01.jpg" alt="Post" width="64">
                                    </a>
                                    <div class="ps-2 ms-1">
                                        <h4 class="fs-md nav-heading mb-1">
                                            <a class="fw-medium" href="#">Virtual Reality - game changing technology</a>
                                        </h4>
                                        <p class="fs-xs text-muted mb-0">by John Doe</p>
                                    </div>
                                </div>

                            </div>
                            <!-- Tag cloud-->
                            <div class="widget mb-5">
                                <h3 class="widget-title pb-1">تگها</h3>
                                <a class="btn-tag me-2 mb-2" href="#">#business</a>
                                <a class="btn-tag me-2 mb-2" href="#">#online shopping</a>
                                <a class="btn-tag me-2 mb-2" href="#">#gadgets</a>
                                <a class="btn-tag me-2 mb-2" href="#">#travel</a>
                                <a class="btn-tag me-2 mb-2" href="#">#brands</a>
                                <a class="btn-tag me-2 mb-2" href="#">#personal finance</a>
                                <a class="btn-tag mb-2" href="#">#around news</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Content-->
                <div class="col-lg-9 content py-4 mb-2 mb-sm-0 pb-sm-5 d-rtl">
                    <nav aria-label="breadcrumb">
                        <ol class="py-1 my-2 breadcrumb">
                            <li class="breadcrumb-item"><a href="/">صفحه اصلی</a></li>
                            <li class="breadcrumb-item">
                                <a href="{{route('content.all')}}">بلاگ</a>
                            </li>
                        </ol>
                    </nav>
                    <h1 class="mb-5">بلاگ</h1>
                    @foreach($contents as $content)
                    <!-- Post-->
                    <article class="card card-horizontal card-hover mb-grid-gutter">
                        <a class="card-img-top @if($loop->iteration % 2 !==0) order-sm-2 @endif" href="{{route('content.single',['category'=>$content->category->slug,'content'=>$content->slug])}}" style="background-image: url({{$content->thumbImage(300)}});"></a>
                        <div class="card-body @if($loop->iteration % 2 !==0) order-sm-1 @endif">
                            <a class="meta-link fs-sm mb-2" href="{{route('content.blog',['category'=>$content->category->slug])}}">{{$content->category->title}}</a>
                            <h2 class="h4 nav-heading mb-4">
                                <a href="{{route('content.single',['category'=>$content->category->slug,'content'=>$content->slug])}}">{{$content->title}}</a>
                            </h2>
                            <a class="d-flex meta-link fs-sm align-items-center pt-3" href="#">
                                <img class="rounded-circle" src="{{$content->User->userDetail->userAvatar()}}" alt="{{$content->user->name}}" width="36">
                                <div class="pe-2 me-1 mt-n1">نویسنده:<span class="fw-semibold ms-1">{{$content->User->userDetail->username}}</span></div></a>
                            <div class="mt-3 text-end text-nowrap">
                                <a class="meta-link fs-xs" href="#">
                                    <i class="ai-message-square me-1"></i>&nbsp;
                                    {{$content->comments()->count()}}
                                </a>
                                <span class="meta-divider"></span>
                                <a class="meta-link fs-xs" href="#">
                                    <i class="ai-calendar ms-1 mt-n1"></i>&nbsp;{{ jdate($content->created_at)->format('%d %B، %Y') }}</a>
                            </div>
                        </div>
                    </article>
                    @endforeach

                    <!-- Pagination-->
                    <div class="d-md-flex justify-content-between align-items-center pt-3 pb-2">
                        <div class="d-flex justify-content-center align-items-center mb-4">
                        </div>
                        <nav class="mb-4" aria-label="Page navigation">
                            {{$contents->render()}}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endcomponent
