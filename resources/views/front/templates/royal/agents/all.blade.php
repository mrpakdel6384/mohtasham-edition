@component('front.templates.royal.layouts.contents')
    @slot('script')
        <script src="/js/leaflet.js"></script>
        <script>

            var mymap = L.map('map').setView([35.772510517783836, 51.46299219646609], 7);

            L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                maxZoom: 18,
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                    '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                id: 'mapbox/streets-v11'
            }).addTo(mymap);
            var layerGroup = L.layerGroup().addTo(mymap);
            var LeafIcon = L.Icon.extend({

            });

            var greenIcon = new LeafIcon({iconUrl: '/images/marker-icon.png'}),
                redIcon = new LeafIcon({iconUrl: '/images/marker-icon.png'}),
                orangeIcon = new LeafIcon({iconUrl: '/images/marker-icon.png'});
            @foreach($agents as $agent)
                L.marker([{{$agent->lat}}, {{$agent->lng}}], {icon: greenIcon}).bindPopup("{{$agent->name}}").addTo(layerGroup);
            @endforeach
        </script>
    @endslot
    <link rel="stylesheet" href="/css/leaflet.css">
    <div class="bg_gray">
        <div class="container">
            <div class="row d-flex align-content-between py-4 align-items-center">
                <div class="col-md-6 ">
                    <h4>لیست نمایندگی های ما</h4>
                </div>
                <div class="col-md-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item " ><a href="/"><i class="fa fa-home"> </i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">نمایندگی ها</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="" id="map"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row py-5">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">نام نمایندگی</th>
                            <th scope="col">آدرس </th>
                            <th scope="col">تلفن</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($agents as $agent)
                            <tr>
                                <th scope="row">{{$agent->id}}</th>
                                <td>{{$agent->name}}</td>
                                <td>{{$agent->address}}</td>
                                <td>{{$agent->phone}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endcomponent
