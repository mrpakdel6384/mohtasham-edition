@component('admin.layouts.content',['title'=>'لیست  تصاویر'])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="/admin" class=""> داشبورد</a></li>
        <li class="breadcrumb-item active"> لیست  تصاویر</li>
    @endslot

    <div class="row">
        <div class="col-12">
            <h4>لیست تصاویر</h4>
            <div class="card-deck">

                @foreach($images as $image)
                <div class="card">
                    <img class="card-img-top" src="{{$image->image}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$image->alt}}</h5>
                        <p class="card-text">

                        </p>
                        <div class="card-footer">

                            @can('delete-gallery')
                                <form action="{{ route('admin.galleries.image.destroy' ,['gallery'=>$gallery->id , 'image'=>$image->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger ml-1">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            @endcan
                        </div>
                    </div>
                </div>

            @endforeach
            </div>

            <!-- /.card -->
        </div>
    </div>

@endcomponent
