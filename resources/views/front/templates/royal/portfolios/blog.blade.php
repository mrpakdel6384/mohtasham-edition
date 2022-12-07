@component('front.templates.royal.layouts.contents')

<div class="bg_gray">
    <div class="container">
        <div class="row d-flex align-content-between py-4 align-items-center">
            <div class="col-md-6 ">
                <h4>پروژه ها</h4>
            </div>
            <div class="col-md-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-end">
                        <li class="breadcrumb-item " ><a href="/"><i class="fa fa-home"> </i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">پروژه ها</li>
                        <li class="breadcrumb-item active " aria-current="page">{{$category->name}}</li>
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
                        @foreach($categories as $cat)
                            <li class="list-group-item d-flex {{$cat->id == $category->id ? "active_cat" : "" }} justify-content-between align-items-center">
                                <a href="{{route('portfolio.blog',['category'=>$cat->id])}}">{{$cat->name}}</a>
                                <span class="badge  badge-pill text-muted"> <i class="fas fa-chevron-left"></i> </span>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-9">
                    @foreach($projects->chunk(2) as $row)
                        <div class="row pt-3">
                            @foreach($row as $project)
                            <div class="col-md-6">
                                <div class="card text-justify" >
                                    <img class="card-img-top" src="{{$project->image}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h6 class="card-title py-3">{{$project->title}}</h6>
                                        <a href="{{route('portfolio.single',['category'=>$category->id,'project'=>$project->id])}}" class="btn  btn-warning btn-rounded text-white py-4">مشاهده</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>


                        @endforeach
                    {{$projects->render()}}
                </div>

            </div>
        </div>
    </div>
@endcomponent
