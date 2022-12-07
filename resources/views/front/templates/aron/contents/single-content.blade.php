@component('front.templates.aron.layouts.contents',['classTopMenu'=>'navbar-normal navbar-shadow'])

    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-9 py-5">
                    <nav class="pb-4">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">صفحه اصلی</a></li>
                            <li class="breadcrumb-item"><a href="{{route('content.blog',['category'=>$category->slug])}}">{{$category->title}}</a></li>
                            <li class="breadcrumb-item active">{{$content->title}}</li>
                        </ol>
                    </nav>
                    <h1 class="h3">{{$content->title}}</h1>
                    <div class="row position-relative g-0 align-items-center border-top border-bottom mb-4">
                        <div class="col-md-6 py-3 pe-md-3">
                            <div class="d-flex align-items-center justify-content-center justify-content-md-start">
                                <div class="d-flex align-items-center ms-grid-gutter">
                                    <a class="d-block" href="#">
                                        <img class="rounded-circle me-1" src="{{asset('front/aron/images/user07.jpeg')}}" alt="Emma Brown" width="64">
                                    </a>
                                    <div class="ps-2">
                                        <h6 class="nav-heading mb-1">
                                            <a href="#">{{$content->user->name}}</a>
                                        </h6>
                                        <div class="text-nowrap">
                                            <div class="meta-link fs-xs">
                                                <i class="far fa-calendar me-1 mt-n1"></i>{{ jdate($content->created_at)->format('%B %d، %Y') }}</div>
                                            <span class="meta-divider"></span>
                                            <a class="meta-link fs-xs" href="#comments" data-scroll="">
                                                <i class="fas fa-comments me-1 align-vertical"></i>  3</a>
                                        </div>
                                    </div>
                                </div><a class="btn btn-translucent-primary btn-sm" href="#">Follow</a>
                            </div>
                        </div>
                        <div class="d-none d-md-block position-absolute border-start h-100" style="top: 0; left: 50%; width: 1px;"></div>
                        <div class="col-md-6 ps-md-3 py-3">
                            <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                                <h6 class="text-nowrap my-2 me-3">اشتراک گذاری:</h6>
                                {{--<a class="btn-social bs-outline bs-facebook ms-2 my-2" href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn-social bs-outline bs-twitter ms-2 my-2" href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="btn-social bs-outline bs-facebook ms-2 my-2" href="#">
                                    <i class="fab fa-linkedin"></i>
                                </a>--}}

                            </div>
                        </div>
                    </div>
                    <img src="{{$content->image}}" alt="" class="img-fluid rounded my-3">
                    {!! $content->body !!}
                    <div class="row g-0 position-relative align-items-center border-top border-bottom my-5">
                        <div class="col-md-6 py-2 py-dm-3 pe-md-3 text-center text-md-start"><a class="btn-tag me-2 my-2" href="#">#ui design</a><a class="btn-tag me-2 my-2" href="#">#workshop</a><a class="btn-tag me-2 my-2" href="#">#business</a></div>
                        <div class="d-none d-md-block position-absolute border-start h-100" style="top: 0; left: 50%; width: 1px;"></div>
                        <div class="col-md-6 ps-md-3 py-2 py-md-3">
                            <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                                <h6 class="text-nowrap my-2 me-3">اشتراک گذاری:</h6><a class="btn-social bs-outline bs-facebook ms-2 my-2" href="#"><i class="ai-facebook"></i></a><a class="btn-social bs-outline bs-twitter ms-2 my-2" href="#"><i class="ai-twitter"></i></a><a class="btn-social bs-outline bs-google ms-2 my-2" href="#"><i class="ai-google"></i></a><a class="btn-social bs-outline bs-email ms-2 my-2" href="#"><i class="ai-mail"></i></a>
                            </div>
                        </div>
                    </div>
                    <nav class="d-flex justify-content-between pb-4 mb-5" aria-label="Entry navigation">
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
                    <div class="pb-4 mb-5" id="comments">
                        <h2 class="h3 pb-4">نظرات </h2>

                        <a class="btn btn-translucent-primary d-block w-100" href="#comment-form" data-bs-toggle="collapse">نظراتان را بنویسید</a>
                        <!-- Comment form-->
                        <div class="collapse" id="comment-form">
                            <form class="needs-validation bg-light rounded-3 shadow p-4 p-lg-5 mt-4" method="post" action="{{route('send.comment')}}">
                                @csrf
                                <input type="hidden" class="hidden" value="0" name="parent_id">
                                <input type="hidden" class="hidden" value="{{get_class($content)}}" name="commentable_type">
                                <input type="hidden" class="hidden" value="{{$content->id}}" name="commentable_id">
                                <div class="mb-3">
                                    <label class="form-label" for="com-text">نظر:<sup class="text-danger ms-1">*</sup></label>
                                    <textarea class="form-control @error('comment') is-invalid @enderror" id="com-text" name="comment" rows="6" placeholder="نظر خود را بنویسید" required=""></textarea>
                                    @error('comment')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="mb-3">
                                    <x-recaptcha :has-error="$errors->has('g-recaptcha-response')"></x-recaptcha>
                                    @error('g-recaptcha-response')
                                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                                    @enderror
                                </div>
                                <button class="btn btn-primary" type="submit">ارسال نظر</button>
                            </form>
                        </div>
                    </div>
                    @include('layouts.comments',['comments'=>$comments,'subject'=>$content])

                </div>
                <div class="col-md-3 sidebar py-4 px-5">
                    <div class="widget mb-5">
                        <h3 class="widget-title">جستجو  </h3>
                        <div class="input-group">
                            <i class="far fa-search position-absolute top-50 start-0 translate-middle-y "></i>
                            <input class="form-control rounded" type="text" placeholder="جستجو">
                        </div>
                    </div>
                    <div class="widget widget-categories mb-5">
                        <h3 class="widget-title">دسته بندی ها</h3>
                        <ul>
                            @foreach($content->category->child as $cate)
                                <li><a class="widget-link" href="{{route('content.blog',['category'=>$cate->slug])}}">{{$cate->title}}<small class="text-muted ps-1 ms-2">23</small></a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget mt-n1 mb-5">
                        <h3 class="widget-title pb-1">پست های مرتبط</h3>
                        @foreach($relatedPosts as $post)
                            <div class="d-flex align-items-center pb-1 mb-3">
                                <a class="d-block flex-shrink-0" href="{{route('content.single',['category'=>$post->category->slug,'content'=>$post->slug])}}">
                                    <img class="rounded" src="{{$post->image}}" alt="Post" width="64">
                                </a>
                                <div class="ps-2 ms-1">
                                    <h4 class="fs-md nav-heading mb-1">
                                        <a class="fw-medium" href="{{route('content.single',['category'=>$post->category->slug,'content'=>$post->slug])}}">{{$post->title}}</a></h4>
                                    <p class="fs-xs text-muted mb-0">{{$post->user->name}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
@endcomponent
