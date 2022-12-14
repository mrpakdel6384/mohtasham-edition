@component('admin.layouts.content' , ['title' => 'ایجاد اسلایدر'])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.sliders.index') }}">لیست اسلایدرها</a></li>
        <li class="breadcrumb-item active">ایجاد اسلایدر</li>
    @endslot

    @slot('script')
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            document.getElementById('button-image').addEventListener('click', (event) => {
                event.preventDefault();

                window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
            });
        });

        // set file link
        function fmSetLink($url) {
            document.getElementById('image_label').value = $url;
        }

    </script>
    @endslot

    <div class="row">
        <div class="col-lg-12">
            @include('admin.layouts.errors')
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">فرم ایجاد اسلایدر</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{ route('admin.sliders.store') }}" method="POST">
                    @csrf

                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">عنوان</label>
                            <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="عنوان را وارد کنید" value="{{ old('title') }}">
                        </div>
                        <div class="form-group">
                            <label for="link" class="col-sm-2 control-label">لینک</label>
                            <input type="text" name="link" class="form-control" id="link" placeholder="لینک را وارد کنید" value="{{ old('link') }}">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">توضیحات</label>
                            <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
                        </div>
                        <div class="input-group">
                            <input type="text" id="image_label" class="form-control" name="image"
                                   aria-label="Image" aria-describedby="button-image">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="button-image">انتخاب عکس</button>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">ثبت اسلایدر</button>
                        <a href="{{ route('admin.sliders.index') }}" class="btn btn-default float-left">لغو</a>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </div>

@endcomponent
