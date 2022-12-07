@component('admin.layouts.content',['title'=>'افزودن کاربران'])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="/admin" class=""> داشبورد</a></li>
        <li class="breadcrumb-item active"> افزودن کاربران</li>
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
                            <h3 class="card-title">فرم های افزودن کاربر</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('admin.users.store')}}" method="post" class="form-horizontal">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name" class="col-sm-2 control-label">نام کاربر</label>

                                    <div class="">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="نام را وارد کنید">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">ایمیل</label>

                                    <div class="">
                                        <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="ایمیل را وارد کنید">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">پسورد</label>

                                    <div class="">
                                        <input type="password" name="password" class="form-control" id="password" placeholder="پسورد را وارد کنید">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">تکرار پسورد</label>

                                    <div class="">
                                        <input type="password" name="password_confirmation" class="form-control" id="inputPassword3" placeholder="پسورد را وارد کنید">
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="verify" class="form-check-input" id="verify">
                                    <label class="form-check-label" for="verify">اکانت فعال باشد</label>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">ثبت کاربر</button>
                                <a href="{{route('admin.users.index')}}" class="btn btn-default float-left">لغو</a>
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
