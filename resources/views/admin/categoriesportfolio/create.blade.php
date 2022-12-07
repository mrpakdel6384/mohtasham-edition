@component('admin.layouts.content' , ['title' => 'ایجاد دسته بندی '])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.categoriesproduct.index') }}">لیست دسته بندی ها</a></li>
        <li class="breadcrumb-item active">ایجاد دسته بندی</li>
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
                    <h3 class="card-title">فرم ایجاد دسته بندی </h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{ route('admin.categoriesportfolio.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">نام دسته بندی</label>
                            <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="نام دسته بندی را وارد کنید" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">توضیحات</label>
                            <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">دسته مرتبط</label>
                            <select class="form-control" name="parent_id" id="permissions">
                                <option value="0">انتخاب</option>
                                @foreach(\App\CategoryPortfolio::all() as $cate)
                                    <option value="{{ $cate->id }}" >{{ $cate->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">ایجاد دسته</button>
                        <a href="{{ route('admin.categoriesproduct.index') }}" class="btn btn-default float-left">لغو</a>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </div>

@endcomponent
