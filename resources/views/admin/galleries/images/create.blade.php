@component('admin.layouts.content' , ['title' => 'بارگذاری تصاویر'])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.galleries.image.index' , $gallery->id) }}">لیست گالری</a></li>
        <li class="breadcrumb-item active">اپلود تصاویر </li>
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
                    <h3 class="card-title">فرم ایجاد گالری</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{ route('admin.galleries.image.store',$gallery->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">
                        <div class="row" id="attribute-${id}">
                            <div class="col-5">
                                <div class="form-group">
                                    <label for="exampleInputFile">ارسال فایل</label>
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
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <label>متن جایگزین</label>
                                    <input type="text" class="form-control" id="alt" name="alt" placeholder="متن جایگزین را وارد کنید">
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">ثبت تصویر</button>
                        <a href="{{ route('admin.galleries.image.index',$gallery->id) }}" class="btn btn-default float-left">لغو</a>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </div>

@endcomponent
