@component('front.templates.aron.layouts.contents',['classTopMenu'=>'navbar-normal navbar-shadow'])

    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-9 py-5">
                    <nav>
                       <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="/">صفحه اصلی</a></li>
                           <li class="breadcrumb-item active">{{$category->title}}</li>
                       </ol>
                    </nav>
                    <h1 class="mb-5">{{$category->title}}</h1>
                    @foreach($contents as $content)
                        <article class="card card-horizontal card-hover mb-grid-gutter">
                            <a class="card-img-top {{$loop->iteration % 2 == 0 ? "order-sm-2" : ""}}" href="blog-single-rs.html" style="background-image: url({{$content->thumbImage(600)}});"></a>
                            <div class="card-body {{$loop->iteration % 2 == 0 ? "order-sm-1" : ""}}">
                                <a class="meta-link fs-sm mb-2" href="#">{{$content->category->title}}</a>
                                <h2 class="h4 nav-heading mb-4">
                                    <a href="{{route('content.single',['category'=>$content->category->slug,'content'=>$content->slug])}}">{{$content->title}}</a>
                                </h2>
                                <a class="d-flex meta-link fs-sm align-items-center pt-3" href="{{route('content.single',['category'=>$content->category->slug,'content'=>$content->slug])}}">
                                    <img class="rounded-circle" src="/front/aron/images/user07.jpeg" alt="{{$content->user->name}}" width="36">
                                    <div class="ps-2 ms-1 mt-n1">توسط<span class="fw-semibold ms-1">{{$content->user->name}}</span>
                                    </div>
                                </a>
                                <div class="mt-3 text-end text-nowrap">
                                    <a class="meta-link fs-xs" href="#">
                                        <i class="fad fa-comments me-1"></i> {{$content->comments()->count()}}
                                    </a>
                                    <span class="meta-divider"></span>
                                    <a class="meta-link fs-xs" href="#">
                                        <i class="far fa-calendar me-1 mt-n1"></i>{{ jdate($content->created_at)->format('%B %d، %Y') }}
                                    </a>
                                    </div>
                            </div>
                        </article>
                        @endforeach
                    {{$contents->render()}}
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
                            @foreach($category->child as $cate)
                            <li><a class="widget-link" href="{{route('content.blog',['category'=>$cate->slug])}}">{{$cate->title}}<small class="text-muted ps-1 ms-2">23</small></a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget mt-n1 mb-5">
                        <h3 class="widget-title pb-1">پست های مرتبط</h3>
                        @foreach($relatedPosts as $post)
                        <div class="d-flex align-items-center pb-1 mb-3">
                            <a class="d-block flex-shrink-0" href="#">
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
