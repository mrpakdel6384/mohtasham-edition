@component('front.templates.royal.layouts.contents')

<div class="bg_gray">
    <div class="container">
        <div class="row d-flex align-content-between py-4 align-items-center">
            <div class="col-md-6 ">
                <h4>خدمات</h4>
            </div>
            <div class="col-md-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item " ><a href="/"><i class="fa fa-home"> </i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$service->title}}</li>
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
                        @foreach(\App\CategoryService::all() as $cat)
                            <li class="list-group-item {{$cat->id == $service->id ? "active_cat" : ""}}  d-flex justify-content-between align-items-center">
                                <a href="{{route('front.service.single',['service'=>$cat->slug])}}" >{{$cat->title}}</a>
                                <span class="badge  badge-pill text-muted"> <i class="fas fa-chevron-left"></i> </span>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-9">
                        <div class="row pt-3">

                                <div class="card border-0" >
                                    <img class="card-img-top" src="{{$service->image}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$service->title}}</h5>
                                        <p class="card-text">{!! $service->body !!}</p>
                                    </div>
                                </div>

                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
@endcomponent
