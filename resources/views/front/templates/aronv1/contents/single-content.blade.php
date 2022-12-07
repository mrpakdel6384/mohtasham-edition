@component('front.templates.aronv1.layouts.contents' ,['classTopMenu'=>'navbar-light bg-light navbar-shadow navbar-sticky'])


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
                    <div class="pb-4" style="max-width: 38rem;">
                        <nav aria-label="breadcrumb">
                            <ol class="py-1 my-2 breadcrumb">
                                <li class="breadcrumb-item"><a href="/"><i class="ai-home ms-2"></i></a></li>
                                <li class="breadcrumb-item">
                                    <a href="{{route('content.all')}}">بلاگ</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{route('content.blog',$category->slug)}}">{{$category->title}}</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">{{$content->title}}</li>
                            </ol>
                        </nav>
                        <h1>{{$content->title}}</h1>
                    </div>
                    <!-- Post author + Sharing-->
                    <div class="row position-relative g-0 align-items-center border-top border-bottom mb-4">
                        <div class="col-md-6 py-3 pe-md-3">
                            <div class="d-flex align-items-center justify-content-center justify-content-md-start">
                                <div class="d-flex align-items-center ms-grid-gutter">
                                    <a class="d-block" href="#">
                                        <img class="rounded-circle ms-1" src="{{$content->User->userDetail->avatar}}" alt="{{$content->User->userDetail->suername}}" width="64">
                                    </a>
                                    <div class="ps-2">
                                        <h6 class="nav-heading mb-1">
                                            <a href="#">{{$content->User->userDetail->suername}}</a>
                                        </h6>
                                        <div class="text-nowrap">
                                            <div class="meta-link fs-xs">
                                                <i class="ai-calendar me-1 align-vertical"></i>&nbsp;{{ jdate($content->created_at)->format('%d %B، %Y') }}</div>
                                            <span class="meta-divider"></span>
                                            <a class="meta-link fs-xs" href="#comments" data-scroll>
                                                <i class="ai-message-square ms-1 align-vertical"></i>&nbsp;{{$content->comments()->count()}}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @auth
                                    @if(!in_array(auth()->user()->id , $content->User->followers->pluck('id')->toArray()))
                                        <a class="btn btn-translucent-primary btn-sm"  onclick="event.preventDefault();
                                            document.getElementById('follow-form').submit();">Follow</a>

                                        <form id="follow-form" action="{{ route('user.follow',$content->User->id) }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    @else
                                        <a class="btn btn-translucent-primary btn-sm"  onclick="event.preventDefault();
                                            document.getElementById('unfollow-form').submit();">UnFollow</a>

                                        <form id="unfollow-form" action="{{ route('user.unfollow',$content->User->id) }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    @endif
                                @endauth
                            </div>
                        </div>
                        <div class="d-none d-md-block position-absolute border-start h-100" style="top: 0; left: 50%; width: 1px;"></div>
                        <div class="col-md-6 ps-md-3 py-3">
                            <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                                <h6 class="text-nowrap my-2 me-3">اشتراک گذاری:</h6>
                                <a class="btn-social bs-outline bs-facebook me-2 my-2" href="#">
                                    <i class="ai-facebook"></i>
                                </a>
                                <a class="btn-social bs-outline bs-twitter me-2 my-2" href="#">
                                    <i class="ai-twitter"></i>
                                </a>
                                <a class="btn-social bs-outline bs-google me-2 my-2" href="#">
                                    <i class="ai-google"></i>
                                </a>
                                <a class="btn-social bs-outline bs-email me-2 my-2" href="#">
                                    <i class="ai-mail"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Post content-->
                    {!! $content->body !!}
                    <!-- Tags + Sharing-->
                    <div class="row g-0 position-relative align-items-center border-top border-bottom my-5">
                        <div class="col-md-6 py-2 py-dm-3 pe-md-3 text-center text-md-end">
                            <a class="btn-tag me-2 my-2" href="#">#ui design</a>
                            <a class="btn-tag me-2 my-2" href="#">#workshop</a>
                            <a class="btn-tag me-2 my-2" href="#">#business</a>
                        </div>
                        <div class="d-none d-md-block position-absolute border-start h-100" style="top: 0; left: 50%; width: 1px;"></div>
                        <div class="col-md-6 ps-md-3 py-2 py-md-3">
                            <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                                <h6 class="text-nowrap my-2 ms-3">اشتراک گذاری:</h6>
                                <a class="btn-social bs-outline bs-facebook ms-2 my-2" href="#">
                                    <i class="ai-facebook"></i>
                                </a>
                                <a class="btn-social bs-outline bs-twitter me-2 my-2" href="#">
                                    <i class="ai-twitter"></i>
                                </a>
                                <a class="btn-social bs-outline bs-email me-2 my-2" href="#">
                                    <i class="ai-mail"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Prev / Next post navigation-->
                    <nav class="d-flex justify-content-between pb-4 mb-5 d-rtl" aria-label="Entry navigation">
                        @if($prev_post)
                            <a class="entry-nav me-3" href="#">
                                <h3 class="h5 pb-sm-2">پست قبلی</h3>
                                <div class="d-flex align-items-start">
                                    <div class="entry-nav-thumb flex-shrink-0 d-none d-sm-block">
                                        <img class="rounded" src="{{$prev_post->thumbImage(300)}}" alt="{{$prev_post->title}}">
                                    </div>
                                    <div class="ps-sm-3">
                                        <h4 class="nav-heading fs-md fw-medium mb-0">{{$prev_post->title}}</h4>
                                        <span class="fs-xs text-muted">نویسنده:  {{$prev_post->user->name}}</span>
                                    </div>
                                </div>
                            </a>
                        @endif
                        @if($next_post)
                            <a class="entry-nav ms-3" href="#">
                                <h3 class="h5 pb-sm-2 text-end">پست بعدی</h3>
                                <div class="d-flex align-items-start">
                                    <div class="text-end pe-sm-3">
                                        <h4 class="nav-heading fs-md fw-medium mb-0">{{$next_post->title}}</h4>
                                        <span class="fs-xs text-muted">نویسنده:  {{$next_post->user->name}}</span>
                                    </div>
                                    <div class="entry-nav-thumb flex-shrink-0 d-none d-sm-block">
                                        <img class="rounded" src="{{$next_post->thumbImage(300)}}" alt="{{$next_post->title}}">
                                    </div>
                                </div>
                            </a>
                        @endif
                    </nav>
                    <!-- Comments-->
                    <div class="pb-4 mb-5" id="comments">
                        <h2 class="h3 pb-4">{{$content->comments()->count()}} نظر </h2>
                        @include('layouts.comments',['comments'=>$comments,'subject'=>$content])
                        @guest

                            <!-- Dark alert -->
                                <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                    <span class="fw-medium">توجه:</span> برای اراسل نظر باید وارد حساب کاربری خود شوید
                                    <button type="button" class="btn-close btn-close-white d-rti" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

                        @endguest
                        @auth
                        <a class="btn btn-translucent-primary d-block w-100" href="#comment-form" data-bs-toggle="collapse">ثبت نظر</a>
                        <!-- Comment form-->
                        <div class="collapse" id="comment-form">
                            @include('layouts.errors')
                            <form class="needs-validation bg-light rounded-3 shadow p-4 p-lg-5 mt-4" method="post" action="{{route('send.comment')}}">
                                @csrf
                                <input type="hidden" class="hidden" value="0" name="parent_id">
                                <input type="hidden" class="hidden" value="{{get_class($content)}}" name="commentable_type">
                                <input type="hidden" class="hidden" value="{{$content->id}}" name="commentable_id">

                                <div class="mb-3">
                                    <label class="form-label" for="com-text">متن نظر<sup class="text-danger ms-1">*</sup></label>
                                    <textarea class="form-control @error('comment') is-invalid @enderror" id="com-text" name="comment" rows="6" placeholder="نظر خود را بنویسید" required></textarea>
                                    @error('comment')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror

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
                                <button class="btn btn-primary" type="submit">ارسال نظر</button>
                            </form>
                        </div>
                        @endauth

                    </div>
                    <!-- Related posts (carousel)-->
                    <div class="pb-4 pb-md-5" style="direction:ltr">
                        <h2 class="h3 pb-4">پست های مرتبط</h2>
                        <div class="tns-carousel-wrapper">
                            <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;controls&quot;: false, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1, &quot;gutter&quot;: 16},&quot;500&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 16},&quot;850&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 16}, &quot;1100&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 23}}}">
                                @foreach($relatedPosts as $post)
                                <!-- Article-->
                                    <div class="pb-2">
                                    <article class="card card-hover mx-1">
                                        <a class="card-img-top" href="{{route('content.single',['category'=>$post->category->slug,'content'=>$post->slug])}}">
                                            <img src="{{$post->thumbImage(300)}}" alt="{{$post->title}}">
                                        </a>
                                        <div class="card-body">
                                            <a class="meta-link fs-sm mb-2" href="{{route('content.blog',['category'=>$post->category->slug])}}">{{$post->category->slug}}</a>
                                            <h2 class="h5 nav-heading mb-4">
                                                <a href="{{route('content.single',['category'=>$post->category->slug,'content'=>$post->slug])}}">{{$post->title}}</a>
                                            </h2>
                                            <a class="d-flex meta-link fs-sm align-items-center pt-3" href="#">
                                                <img class="rounded-circle" src="{{$post->user->userDetail->avatar}}" alt="" width="36">
                                                <div class="ps-2 ms-1 mt-n1">نویسنده:
                                                    <span class="fw-semibold ms-1">{{$post->user->userDetail->username}}</span>
                                                </div>
                                            </a>
                                            <div class="mt-3 text-end text-nowrap">
                                                <a class="meta-link fs-xs" href="#">
                                                    <i class="ai-message-square me-1"></i>&nbsp;
                                                    {{$post->comments->count()}}
                                                </a>
                                                <span class="meta-divider">

                                                </span>
                                                <a class="meta-link fs-xs" href="#">
                                                    <i class="ai-calendar me-1 mt-n1"></i>&nbsp;
                                                    {{ jdate($post->created_at)->format('%d %B، %Y') }}
                                                </a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                               @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @slot('css')
        <link rel="stylesheet" media="screen" href="{{asset('/front/around/vendor/simplebar/dist/simplebar.min.css')}}"/>
    @endslot

    @slot('topscript')
        
        <script src="{{asset('/front/around/vendor/tiny-slider/dist/min/tiny-slider.js')}}"></script>
        <script src="{{asset('/front/around/vendor/simplebar/dist/simplebar.min.js')}}"></script>
    @endslot

    @slot('bottomscript')
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @endslot
@endcomponent
