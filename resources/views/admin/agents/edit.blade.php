@component('admin.layouts.content' , ['title' => 'ثبت نماینده'])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.agents.index') }}">لیست نمایندگان</a></li>
        <li class="breadcrumb-item active">ثبت نماینده</li>
    @endslot

    @slot('script')
        <script src="/js/leaflet.js"></script>
        <script>


            var mymap = L.map('map').setView([{{$agent->lat}},{{$agent->lng}}], 13);

            L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                maxZoom: 18,
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                    '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                id: 'mapbox/streets-v11'
            }).addTo(mymap);
            var layerGroup = L.layerGroup().addTo(mymap);

            mymap.on('click', function(e) {
                layerGroup.clearLayers();
                console.log(e.latlng);
                L.marker(e.latlng).addTo(layerGroup);
                $("#latinput").val(e.latlng.lat);
                $("#lnginput").val(e.latlng.lng);

            });
        </script>
    @endslot
    <link rel="stylesheet" href="/css/leaflet.css">
    <div class="row">
        <div class="col-lg-12">
            @include('admin.layouts.errors')
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">ثبت نمایندگان</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{ route('admin.agents.update',$agent->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{method_field('patch')}}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">نام</label>
                            <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="نام را وارد کنید" value="{{ old('name' , $agent->name) }}">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">نام مدیریت</label>
                            <input type="text" name="admin" class="form-control" id="inputEmail3" placeholder="نام مدیریت را وارد کنید" value="{{ old('admin' , $agent->admin) }}">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">تلفن</label>
                            <input type="text" name="phone" class="form-control" id="phone" placeholder="نام مدیریت را وارد کنید" value="{{ old('phone',$agent->phone) }}">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">استان</label>
                            <input type="text" name="province" class="form-control" id="province" placeholder="نام استان را وارد کنید" value="{{ old('province' ,$agent->province) }}">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">شهر</label>
                            <input type="text" name="city" class="form-control" id="city" placeholder="نام شهر را وارد کنید" value="{{ old('city',$agent->city) }}">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">آدرس</label>
                            <input type="text" name="address" class="form-control" id="address" placeholder="ادرس را وارد کنید" value="{{ old('address', $agent->address) }}">
                        </div>
                        <div class="form-group">
                            <div class="" id="map"></div>
                            <div class="row">
                                <div class="col-md-6"><input class="form-control" type="text" name="lat" id="latinput" value="{{$agent->lat}}" readonly></div>
                                <div class="col-md-6"><input class="form-control" type="text" name="lng" id="lnginput" value="{{$agent->lng}}" readonly></div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">ویرایش نمایندگی</button>
                        <a href="{{ route('admin.agents.index') }}" class="btn btn-default float-left">لغو</a>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </div>

@endcomponent
