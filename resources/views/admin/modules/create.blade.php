@component('admin.layouts.content' , ['title' => 'ایجاد ماژول'])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.modules.index') }}">لیست ماژول ها</a></li>
        <li class="breadcrumb-item active">ایجاد ماژول</li>
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
                    <h3 class="card-title">فرم ایجاد ماژول</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{ route('admin.modules.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">عنوان</label>
                            <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="عنوان را وارد کنید" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">قیمت</label>
                            <input type="text" name="price" class="form-control" id="inputEmail3" placeholder="قیمت را وارد کنید" value="{{ old('price') }}">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">توضیح </label>
                            <textarea class="form-control" name="description" id="description" cols="20" rows="7">{{ old('description') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">عکس</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">انتخاب فایل</label>
                                </div>
                                <div class="input-group-append">
                                            <span class="input-group-text" id="">
                                                <i class="fa  fa-cloud-download"></i>
                                            </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">دسته بندی ها</label>
                            <select class="form-control" name="category_module_id" id="categories" >
                                <option value="0">انتخاب</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <input type="hidden" name="status" value="1">
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">ثبت </button>
                        <a href="{{ route('admin.modules.index') }}" class="btn btn-default float-left">لغو</a>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </div>

@endcomponent
