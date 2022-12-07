@component('front.templates.royal.layouts.contents')
    @slot('script')
        <script src="/js/leaflet.js"></script>
        <script>
            var mymap = L.map('map').setView([35.772510517783836, 51.46299219646609], 18);

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

            L.marker([35.772510517783836, 51.46299219646609], {icon: greenIcon}).bindPopup("royal Home").addTo(layerGroup);
        </script>
    @endslot
    <link rel="stylesheet" href="/css/leaflet.css">
    <div class="bg_gray">
        <div class="container">
            <div class="row d-flex align-content-between py-4 align-items-center">
                <div class="col-md-6 ">
                    <h4>تماس با ما</h4>
                </div>
                <div class="col-md-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item " ><a href="/"><i class="fa fa-home"> </i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">تماس با ما</li>
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
                <form method="POST" class="form d-flex justify-content-between " action="{{ route('contact') }}">
                    @csrf
                    <div class="col-md-6">
                        <div class="form-group ">
                            <label for="name"  class="col-form-label text-md-right">نام</label>


                            <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror"  value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                        <div class="form-group ">
                            <label for="email" class=" col-form-label text-md-right">ایمیل</label>


                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group ">
                            <label for="phone"  class=" col-form-label text-md-right">تلفن</label>


                            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group ">
                            <label for="text"  class=" col-form-label text-md-right">متن پیام</label>
                            <textarea name="message"  class="form-control" id="" cols="30" rows="10">{{old('text')}}</textarea>

                            @error('text')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>

                        <div class="form-group  ">
                            <x-recaptcha :has-error="$errors->has('g-recaptcha-response')"></x-recaptcha>
                            @error('g-recaptcha-response')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>



                        <div class="form-group  d-flex justify-content-end">
                            <button type="submit" class="btn  btn-warning btn-rounded text-white py-4">
                                ارسال
                            </button>
                        </div>

                    </div>

                </form>
            </div>

        </div>
    </div>
@endcomponent
