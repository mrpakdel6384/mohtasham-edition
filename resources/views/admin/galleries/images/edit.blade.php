@component('admin.layouts.content' , ['title' => 'ویرایش گالری'])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.galleries.index') }}">لیست گالری</a></li>
        <li class="breadcrumb-item active">ویرایش گالری</li>
    @endslot

    @slot('script')
        <script src="/ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('description', {filebrowserImageBrowseUrl: '/file-manager/ckeditor'});
        </script>
    @endslot

    <div class="row">
        <div class="col-lg-12">
            @include('admin.layouts.errors')
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">فرم ویرایش گالری</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{ route('admin.galleries.update' , $gallery->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{method_field('patch')}}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">عنوان</label>
                            <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="عنوان را وارد کنید" value="{{ old('title' ,$gallery->title) }}">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">خلاصه مطلب</label>
                            <textarea class="form-control" name="description" id="description" cols="20" rows="7">{{ old('description' , $gallery->description) }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="image" class="col-sm-2 control-label">عکس </label>
                            <input type="file" name="image" class="form-control" id="image"  >
                        </div>
                        <div class="form-group">
                            <img src="{{$gallery->image}}" alt="" class="img-responsive img-fluid" width="300px" height="auto">
                        </div>


                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">ویرایش گالری</button>
                        <a href="{{ route('admin.galleries.index') }}" class="btn btn-default float-left">لغو</a>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </div>

@endcomponent
