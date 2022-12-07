@component('admin.layouts.content',['title'=>'لیست  تصاویر'])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="/admin" class=""> داشبورد</a></li>
        <li class="breadcrumb-item active"> لیست  تصاویر</li>
    @endslot

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">تصاویر</h3>

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
                            @can('create-gallery')
                                <a href="{{route('admin.galleries.create')}}" class="btn btn-info">ایجاد گالری جدید</a>
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
                            <th> عکس </th>
                            <th>اقدامات</th>
                        </tr>
                        @foreach($galleries as $gallery)
                        <tr>
                            <td>{{$gallery->id}}</td>
                            <td>{{$gallery->title}}</td>
                            <td><img src="{{$gallery->image}}" width="150px" height="150px" class="img-responsive img-fluid" alt=""></td>
                            <td class="d-flex">
                                @can('delete-gallery')
                                <form action="{{ route('admin.galleries.destroy' ,$gallery->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger ml-1">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                                @endcan

                                @can('edit-gallery')
                                <a href="{{route('admin.galleries.edit', $gallery->id)}}" class="btn btn-sm btn-primary">
                                    <i class="fa fa-edit"></i>
                                </a>
                                @endcan
                                <a href="{{route('admin.galleries.image.create', $gallery->id)}}" class="btn btn-sm btn-primary mr-2">
                                    <i class="fa fa-picture-o"></i>
                                </a>

                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    {{ $galleries->appends(['search'=>request('search')])->render() }}
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>

@endcomponent
