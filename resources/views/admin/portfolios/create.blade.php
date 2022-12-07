@component('admin.layouts.content' , ['title' => 'ایجاد پروژه'])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.portfolios.index') }}">لیست پروژه ها</a></li>
        <li class="breadcrumb-item active">ایجاد پروژه</li>
    @endslot

    @slot('script')
        <script src="/ckeditor/ckeditor.js"></script>
        <script>

            CKEDITOR.replace('description', {filebrowserImageBrowseUrl: '/file-manager/ckeditor'});

            $('#categories').select2({
                'placeholder' : 'دسترسی مورد نظر را انتخاب کنید'
            })

        </script>
    @endslot

    <div class="row">
        <div class="col-lg-12">
            @include('admin.layouts.errors')
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">فرم ایجاد پروژه جدید</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{ route('admin.portfolios.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">نام پروژه</label>
                            <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="نام پروژه را وارد کنید" value="{{ old('title') }}">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">ادرس پروژه</label>
                            <input type="text" name="link" class="form-control" id="inputEmail3" placeholder="ادرس پروژه را وارد کنید" value="{{ old('link') }}">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">توضیحات</label>
                            <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">تصویر شاخص</label>
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
                            <select class="form-control" name="category_portfolio_id[]" id="categories" multiple>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">ثبت پروژه</button>
                        <a href="{{ route('admin.portfolios.index') }}" class="btn btn-default float-left">لغو</a>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </div>

@endcomponent
