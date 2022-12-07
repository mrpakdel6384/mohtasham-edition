@component('admin.layouts.content',['title'=>'لیست پروژه ها'])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="/admin" class=""> داشبورد</a></li>
        <li class="breadcrumb-item active"> لیست پروژه ها</li>
    @endslot

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">پروژه ها</h3>

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
                            @can('create-portfolio')
                            <a href="{{route('admin.portfolios.create')}}" class="btn btn-info">ایجاد پروژه جدید</a>
                            @endcan
                        </div>

                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive table-bordered p-0">
                    <table class="table table-hover">
                        <tbody><tr>
                            <th>شماره</th>
                            <th>نام پروژه</th>
                            <th> عکس</th>
                            <th>تعداد بازدید</th>
                            <th>اقدامات</th>
                        </tr>
                        @foreach($portfolios as $portfolio)
                        <tr>
                            <td>{{$portfolio->id}}</td>
                            <td>{{$portfolio->title}}</td>
                            <td><img src="{{$portfolio->image}}" width="100px" height="100px" alt=""></td>
                            <td>{{$portfolio->view_count}}</td>
                            <td class="d-flex">
                                @can('delete-portfolio')
                                <form action="{{ route('admin.portfolios.destroy' , ['portfolio' => $portfolio->slug]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger ml-1">حذف</button>
                                </form>
                                @endcan

                                @can('edit-portfolio')
                                <a href="{{route('admin.portfolios.edit', ['portfolio'=>$portfolio->slug])}}" class="btn btn-sm btn-primary">ویرایش</a>
                                @endcan
                                @can('create-image-portfolio')
                                        <a href="{{route('admin.portfolios.gallery.index', ['portfolio'=>$portfolio->slug])}}" class="btn btn-sm btn-warning mr-2">گالری تصاویر</a>
                                @endcan

                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    {{ $portfolios->appends(['search'=>request('search')])->render() }}
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>

@endcomponent
