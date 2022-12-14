@component('admin.layouts.content',['title'=>'لیست ماژول ها'])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="/admin" class=""> داشبورد</a></li>
        <li class="breadcrumb-item active"> لیست ماژول ها</li>
    @endslot

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">ماژول ها</h3>

                    <div class="card-tools d-flex">
                        <form action="" class="form">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="search" class="form-control float-right" placeholder="جستجو">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>

                        </form>
                        <div class="btn-group-sm mr-1">
                            @can('create-content')
                            <a href="{{route('admin.modules.create')}}" class="btn btn-info">ایجاد ماژول جدید</a>
                            @endcan
                        </div>

                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive table-bordered p-0">
                    <table class="table table-hover">
                        <tbody><tr>
                            <th>شماره</th>
                            <th>عنوان</th>
                            <th>قیمت</th>
                            <th> دسته بندی </th>
                            <th>توضیحات</th>
                            <th>اقدامات</th>
                        </tr>
                        @foreach($modules as $module)
                        <tr>
                            <td>{{$module->id}}</td>
                            <td>{{$module->name}}</td>
                            <td>{{$module->price}}</td>
                            <td>{{$module->categoryModule->name}}</td>
                            <td></td>
                            <td class="d-flex">
                                @can('delete-content')
                                <form action="{{ route('admin.modules.destroy' , ['module' => $module->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger ml-1">حذف</button>
                                </form>
                                @endcan

                                @can('edit-content')
                                <a href="{{route('admin.modules.edit', ['module'=>$module->id])}}" class="btn btn-sm btn-primary">ویرایش</a>
                                @endcan

                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    {{ $modules->appends(['search'=>request('search')])->render() }}
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>

@endcomponent
