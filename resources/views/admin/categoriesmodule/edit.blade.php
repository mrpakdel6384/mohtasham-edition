@component('admin.layouts.content' , ['title' => 'ویرایش دسته بندی ماژول ها'])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.categoriesmodule.index') }}">لیست </a></li>
        <li class="breadcrumb-item active">ویرایش دسته بندی جدید</li>
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
                    <h3 class="card-title">فرم ایجاد دسته بندی مطلب</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{ route('admin.categoriesmodule.update',['categoriesmodule'=>$categoriesmodule->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{method_field('patch')}}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">عنوان</label>
                            <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="عنوان را وارد کنید" value="{{ old('name',$categoriesmodule->name) }}">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">متن کامل</label>
                            <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ old('description',$categoriesmodule->description) }}</textarea>
                        </div>
                        <div class="form-group">
                            <img src="{{$categoriesmodule->image}}" alt="" class="img-responsive img-fluid" width="300px" height="auto">
                        </div>
                        <div class="form-group">
                            <label for="image" class="col-sm-2 control-label">عکس </label>
                            <input type="file" name="image" class="form-control" id="image"  >
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">ثبت </button>
                        <a href="{{ route('admin.categoriesmodule.index') }}" class="btn btn-default float-left">لغو</a>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </div>

@endcomponent
