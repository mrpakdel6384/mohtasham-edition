@component('admin.layouts.content' , ['title' => 'ویرایش دسته بندی'])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.categories.index') }}">لیست دسته بندی</a></li>
        <li class="breadcrumb-item active">ویرایش دسته بندی</li>
    @endslot

    @slot('script')
        <script src="/ckeditor/ckeditor.js"></script>
        <script>

            CKEDITOR.replace('body', {filebrowserImageBrowseUrl: '/file-manager/ckeditor'});


        </script>
    @endslot

    <div class="row">
        <div class="col-lg-12">
            @include('admin.layouts.errors')
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">فرم ویرایش دسته بندی</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{ route('admin.categories.update' , ['category'=>$category->slug]) }}"  method="POST" enctype="multipart/form-data">
                    @csrf
                    {{method_field('patch')}}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">عنوان</label>
                            <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="عنوان را وارد کنید" value="{{ old('title' , $category->title) }}">
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">متن کامل</label>
                            <textarea class="form-control" name="body" id="body" cols="30" rows="10">{{ old('body' , $category->body) }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="image" class="col-sm-2 control-label">عکس </label>
                            <input type="file" name="image" class="form-control" id="image"  >
                        </div>
                        <div class="form-group">
                            <img src="{{$category->image}}" alt="" class="img-responsive img-fluid" width="300px" height="auto">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">دسته بندی ها</label>
                            <select class="form-control" name="parent_id" id="categories" >
                                <option value="0">انتخاب</option>
                                @foreach($categories as $cat)
                                    <option value="{{ $cat->id }}" {{$category->parent_id == $cat->id ? "selected" : ""}}>{{ $cat->title }}</option>
                                @endforeach
                            </select>

                        </div>


                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">ویرایش دسبته  بندی</button>
                        <a href="{{ route('admin.categories.index') }}" class="btn btn-default float-left">لغو</a>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </div>

@endcomponent
