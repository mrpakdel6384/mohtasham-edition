@component('admin.layouts.content' , ['title' => 'ویرایش دسته'])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.categoriesportfolio.index') }}">لیست دسته بندی ها</a></li>
        <li class="breadcrumb-item active">ویرایش دسته</li>
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
                    <h3 class="card-title">فرم ویرایش دسته</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{ route('admin.categoriesportfolio.update' , $categoriesportfolio->slug) }}" method="POST">
                    @csrf
                    @method('patch')

                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">نام دسته</label>
                            <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="نام دسته را وارد کنید" value="{{ old('name' , $categoriesportfolio->name) }}">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">توضیحات</label>
                            <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ old('description',$categoriesportfolio->description) }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">دسته مرتبط</label>
                            <select class="form-control" name="parent_id" id="permissions">
                                <option value="0">انتخاب</option>
                                @foreach(\App\CategoryPortfolio::all()->except($categoriesportfolio->id) as $cate)
                                    <option value="{{ $cate->id }}" {{ $cate->id === $categoriesportfolio->parent_id ? 'selected' : '' }}>{{ $cate->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">ویرایش دسته</button>
                        <a href="{{ route('admin.categoriesportfolio.index') }}" class="btn btn-default float-left">لغو</a>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </div>

@endcomponent