@component('front.templates.royal.layouts.contents')

<div class="bg_gray">
    <div class="container">
        <div class="row d-flex align-content-between py-4 align-items-center">
            <div class="col-md-6 ">
                <h4>{{$categoryproduct->name}}</h4>
            </div>
            <div class="col-md-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item " ><a href="/"><i class="fa fa-home"> </i></a></li>
                        <li class="breadcrumb-item " aria-current="page"><a href="{{route('products')}}">محصولات</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$categoryproduct->name}}</li>
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
                    @foreach($products->chunk(3) as $row)
                        <div class="row pt-3">
                            @foreach($row as $product)
                            <div class="col-md-4">
                                <div class="card text-justify" >
                                    <img class="card-img-top" src="{{$product->image}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h6 class="card-title">{{$product->title}}</h6>
                                        <p class="card-text text-justify">{{$product->price}} تومان</p>
                                        <a href="{{route('products.single',$product->id)}}" class="btn  btn-warning btn-rounded text-white py-4">مشاهده</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>


                        @endforeach
                    {{$products->render()}}
                </div>
                <div class="col-md-3">
                    <h6 class="box-header mb-4">جدیدترین ها</h6>
                    @foreach($newProducts as $pro)

                        <div class="media mb-5">
                            <a href="{{route('products.single',['product'=>$pro->id])}}">
                                <img class="ml-3 img-fluid" width="100px" height="auto" src="{{$pro->image}}" alt="{{$pro->title}}">
                            </a>
                            <div class="media-body">
                                <h6 class="mt-1">{{$pro->title}}</h6>
                                <small class="text-muted">{{$pro->price}} تومان</small>
                            </div>
                        </div>
                    @endforeach
                    <h6 class="box-header">دسته بندی ها</h6>
                    <ul class="widget_categories">
                        @foreach($productsCategories as $procategory)
                            <li class="cat-item cat-item-9">
                                <a href="{{route('product.blog' ,['categoryproduct'=> $procategory->id])}}">{{$procategory->name}}</a>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
@endcomponent
