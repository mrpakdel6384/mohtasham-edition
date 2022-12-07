@component('admin.layouts.content' , ['title' => 'لیست درخواست های مشاوره'])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item active">لیست درخواست های شماوره</li>
    @endslot

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">درخواست ها</h3>

                    <div class="card-tools d-flex">
                        <form action="">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="search" class="form-control float-right" placeholder="جستجو" value="{{ request('search') }}">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                        <div class="btn-group-sm mr-1">

                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>نام</th>
                                <th>ایمیل</th>
                                <th>تلفن</th>
                                <th>متن</th>
                                <th>اقدامات</th>
                            </tr>

                            @foreach($consults as $consult)
                                <tr>
                                    <td>{{ $consult->name }}</td>
                                    <td>{{ $consult->email }}</td>
                                    <td>{{ $consult->phone }}</td>
                                    <td>{{ $consult->text }}</td>
                                    <td class="d-flex">
                                        @can('delete-comment')
                                            <form action="{{ route('admin.consults.destroy' , $consult->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger ml-1">حذف</button>
                                            </form>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    {{ $consults->appends([ 'search' => request('search') ])->render() }}
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>

@endcomponent
