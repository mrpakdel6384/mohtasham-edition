@component('admin.layouts.content',['title'=>'لیست نظرات '])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="/admin" class=""> داشبورد</a></li>
        <li class="breadcrumb-item active"> لیست نظرات </li>
    @endslot

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">نظرات همکاران</h3>

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
                            <a href="{{route('admin.testimonials.create')}}" class="btn btn-info">نوشتن نظر جدید</a>
                            @endcan
                        </div>

                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive table-bordered p-0">
                    <table class="table table-hover">
                        <tbody><tr>
                            <th>شماره</th>
                            <th>نام</th>
                            <th> سمت شغلی </th>
                            <th>نظر</th>
                            <th>اقدامات</th>
                        </tr>
                        @foreach($testimonials as $testimonial)
                        <tr>
                            <td>{{$testimonial->id}}</td>
                            <td>{{$testimonial->name}}</td>
                            <td>{{$testimonial->role}}</td>
                            <td>{{$testimonial->comment}}</td>
                            <td class="d-flex">
                                @can('delete-testimonial')
                                <form action="{{ route('admin.testimonials.destroy' , ['testimonial' => $testimonial->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger ml-1">حذف</button>
                                </form>
                                @endcan

                                @can('edit-testimonial')
                                <a href="{{route('admin.testimonials.edit', ['testimonial'=>$testimonial->id])}}" class="btn btn-sm btn-primary">ویرایش</a>
                                @endcan

                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    {{ $testimonials->appends(['search'=>request('search')])->render() }}
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>

@endcomponent
