@component('admin.layouts.content' , ['title' => 'ویرایش نظر'])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.testimonials.index') }}">لیست رضایت مشتریان</a></li>
        <li class="breadcrumb-item active">ویرایش نظر</li>
    @endslot

    @slot('script')

    @endslot

    <div class="row">
        <div class="col-lg-12">
            @include('admin.layouts.errors')
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">فرم ویرایش نظر مشتریان</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{ route('admin.testimonials.update' ,$testimonial->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{method_field('patch')}}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">نام</label>
                            <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="نام را وارد کنید" value="{{ old('name' , $testimonial->name) }}">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">سمت شغلی</label>
                            <input type="text" name="role" class="form-control" id="inputEmail3" placeholder="سمت شغلی را وارد کنید" value="{{ old('role' , $testimonial->role) }}">
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">نظر</label>
                            <textarea class="form-control" name="comment" id="comment" cols="20" rows="7">{{ old('comment',$testimonial->comment) }}</textarea>
                        </div>
                        <div class="form-group">
                            <img src="{{$testimonial->image}}" alt="" class="img-responsive img-fluid" width="300px" height="auto">
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
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">ثبت نظر</button>
                        <a href="{{ route('admin.testimonials.index') }}" class="btn btn-default float-left">لغو</a>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </div>

@endcomponent
