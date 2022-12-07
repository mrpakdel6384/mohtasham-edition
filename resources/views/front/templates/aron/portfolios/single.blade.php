@component('front.templates.royal.layouts.contents')

    <div class="bg_gray">
        <div class="container">
            <div class="row d-flex align-content-between py-4 align-items-center">
                <div class="col-md-6 ">
                    <h4>{{$category->name}}</h4>
                </div>
                <div class="col-md-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item " ><a href="/"><i class="fa fa-home"> </i></a></li>
                            <li class="breadcrumb-item " ><a href="{{route('portfolio.blog' ,$category->id)}}">{{$category->name}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$project->title}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="bg_white">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-3">
                    <h6 class="box-header mb-4">دسته بندی ها</h6>
                    <ul class="list-group portfolio-list">
                        @foreach(\App\CategoryPortfolio::all() as $cat)
                            <li class="list-group-item {{in_array($cat->id , $project->categories->pluck('id')->toArray()) ? "active_cat" : "" }} d-flex justify-content-between align-items-center">
                                <a href="{{route('portfolio.blog',['category'=>$cat->id])}}">{{$cat->name}}</a>
                                <span class="badge  badge-pill text-muted"> <i class="fas fa-chevron-left"></i> </span>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-9">
                    <div class="card" >
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach($project->gallery as $image)
                                <div class="carousel-item {{$loop->iteration == 1 ? "active" : ""}}">
                                    <img class="d-block w-100" src="{{$image->image}}" alt="First slide">
                                </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="post-details my-3">
                                <span class="border-left pl-3">
                                    @foreach($project->categories as $current_cat)
                                        <a href="{{route('portfolio.blog' ,['category'=>$current_cat->id])}}">{{$current_cat->name}}</a> -
                                    @endforeach
                                </span>
                                <span class="">{{$project->view_count}}</span>
                                <span class="border-right"><i class="fa fa-calender"></i>{{ jdate($project->created_at) }}</span>

                            </div>
                            <h5 class="card-title box-header">{{$project->title}}</h5>
                            <div class="card-text text-justify">
                                {!! $project->description !!}
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endcomponent
