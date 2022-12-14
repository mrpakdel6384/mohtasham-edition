@component('front.templates.royal.layouts.contents')

    <div class="bg_gray">
        <div class="container">
            <div class="row d-flex align-content-between py-4 align-items-center">
                <div class="col-md-6 ">
                    <h4>{{$category->title}}</h4>
                </div>
                <div class="col-md-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item " ><a href="/"><i class="fa fa-home"> </i></a></li>
                            <li class="breadcrumb-item " ><a href="{{route('content.blog' ,$category->slug)}}">{{$category->title}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$content->title}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="bg_white">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-9">
                    <div class="card" >
                        <img class="card-img-top" src="{{$content->image}}" alt="{{$content->title}}">
                        <div class="card-body">
                            <div class="post-details my-3">
                                <span class="border-right pl-3">دسته بندی:{{$category->title}}</span>
                                <span class="">{{$content->view_count}}</span>
                                <span class="border-right"><i class="fa fa-calender"></i>{{ jdate($content->created_at)->ago() }}</span>

                            </div>
                            <h5 class="card-title box-header">{{$content->title}}</h5>
                            <div class="card-text">
                                {!! $content->body !!}
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-3">
                    <h6 class="box-header mb-4">مطالب مرتبط</h6>
                    @foreach($relatedPosts as $post)

                        <div class="media mb-5">
                            <img class="ml-3 img-fluid" width="100px" height="auto" src="{{$post->image}}" alt="{{$post->title}}">
                            <div class="media-body">
                                <h6 class="mt-1">{{$post->title}}</h6>
                                <small class="text-muted">{{ jdate($post->created_at)->ago() }}</small>
                            </div>
                        </div>
                    @endforeach
                    <h6 class="box-header">دسته بندی ها</h6>
                    <ul class="widget_categories">
                        @foreach(\App\Category::all() as $category)
                        <li class="cat-item cat-item-9">
                            <a href="{{route('content.blog' , $category->slug)}}">{{$category->title}}</a>
                        </li>
                            @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
@endcomponent
