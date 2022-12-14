@component('admin.layouts.content' , ['title' => 'ایجاد مطلب'])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.contents.index') }}">لیست مطالب</a></li>
        <li class="breadcrumb-item active">ایجاد مطلب</li>
    @endslot

    @slot('script')
        <script src="/ckeditor/ckeditor.js"></script>
        <script>
            var config = {
                extraPlugins: 'codesnippet',
                codeSnippet_theme: 'monokai_sublime',
                height: 356
            };
            CKEDITOR.replace('body', {filebrowserImageBrowseUrl: '/file-manager/ckeditor'});
            CKEDITOR.replace('description', {filebrowserImageBrowseUrl: '/file-manager/ckeditor'});
        </script>
    @endslot

    <div class="row">
        <div class="col-lg-12">
            @include('admin.layouts.errors')
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">فرم ایجاد مطلب</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{ route('admin.contents.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">عنوان</label>
                            <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="عنوان را وارد کنید" value="{{ old('title') }}">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">خلاصه مطلب</label>
                            <textarea class="form-control" name="description" id="description" cols="20" rows="7">{{ old('description') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">متن کامل</label>
                            <textarea class="form-control" name="body" id="body" cols="30" rows="10">{{ old('body') }}</textarea>
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
                            <select class="form-control" name="category_id" id="categories" >
                                <option value="0">انتخاب</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!--<input name="status" value="1" type="checkbox" data-toggle="switchbutton" checked data-onlabel="<i class='fa fa-eye'></i> انتشار" data-offlabel="<i class='fa fa-eye-slash'></i> پیش نویس">-->
                        <input name="status" value="1" type="radio"> انتشار
                        <input name="status" value="0" type="radio"> پیش نویس
                 
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">ثبت مطلب</button>
                        <a href="{{ route('admin.contents.index') }}" class="btn btn-default float-left">لغو</a>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </div>

@endcomponent
