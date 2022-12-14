@component('admin.layouts.content',['title'=>' ویرایش دسترسی'])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="/admin" class=""> داشبورد</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.permissions.index')}}" class=""> همه دسترسی ها</a></li>
        <li class="breadcrumb-item active">  ویرایش دسترسی</li>
    @endslot

    <div class="row">
        <!-- left column -->
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-lg-12">
            <!-- Horizontal Form -->
            @include('admin.layouts.errors')
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">فرم های ویرایش دسترسی</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('admin.permissions.update' , ['permission'=>$permission->id])}}" method="post" class="form-horizontal">
                    @csrf
                    {{method_field('patch')}}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">عنوان دسترسی </label>

                            <div class="">
                                <input type="text" name="name" class="form-control" id="name" placeholder="عنوان دسترسی را وارد کنید" value="{{old('name' , $permission->name)}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="label" class="col-sm-2 control-label">توضیح دسترسی</label>

                            <div class="">
                                <input type="text" name="label" class="form-control" id="label" placeholder="توضیح را وارد کنید" value="{{old('label' , $permission->label)}}">
                            </div>
                        </div>



                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">ویرایش دسترسی</button>
                        <a href="{{route('admin.permissions.index')}}" class="btn btn-default float-left">لغو</a>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->
            <!-- /.card -->
        </div>
        <!--/.col (right) -->
    </div>
    <!-- /.row -->

@endcomponent
