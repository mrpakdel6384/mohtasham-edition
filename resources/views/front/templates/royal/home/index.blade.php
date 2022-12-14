@component('front.templates.royal.layouts.contents')
    <div class="bg_box">
        <div id="carouselExampleFade" class="carousel slide carousel-fade main-slider" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($sliders as $slider)
                <div class="carousel-item {{$loop->iteration == 1 ? "active" : ""}} ">
                    <img class="d-block w-100" src="{{asset($slider->image)}}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="title-caption border-bottom border-warning">
                            <h3 class="text-right">{{$slider->title}} </h3>
                        </div>

                        <p class="text-justify text-white  caption-text" >
                            {{$slider->description}}
                        </p>
                        @if(! empty($slider->link))
                            <a href="{{$slider->link}}" class="text-white btn-rounded ">مطالعه بیشتر</a>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </div>
    <div class="bg-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 d-flex price-box sl-large-wallet align-items-center">
                    <div >
                        <h5 class="h5">مشاوره تعمیرات و نوسازی</h5>
                        <p> با استفاده از فرم مشاوره ما از شرایط و قیمت های نوسازی و تعمیرات آگاه شمید.</p>
                    </div>

                </div>
                <div class="col-sm-3 d-flex align-items-center">
                    <a href="{{route('consult')}}" class="btn  btn-warning btn-rounded text-white py-4">درخواست مشاوره</a>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-cream pt-6">
        <div class="container">
            <div class="about_box row">
                <div class="col-12 text-center">
                    <div class="h3 box-header text-center font-weight-bold">
                        همه خدمات ما
                    </div>
                    <p class="text-center">
                      توضیحات خدمات ما
                    </p>
                </div>
                <div class="mt-md-5"></div>
                <div class="card-group">
                    @foreach($ourServices as $service)
                        <div class="card">
                        <a href="{{route('front.service.single',['service'=>$service->slug])}}">
                            <img class="card-img-top" src="{{$service->image}}" alt="Card image cap">
                        </a>

                        <div class="card-body">
                            <h5 class="card-title text-center service-category">{{$service->title}}</h5>
                            <p class="card-text text-center"></p>
                        </div>
                    </div>
                    @endforeach
                </div>
         {{--       <a href="" class="btn-rounded btn-warning py-4 text-white mr-auto ml-auto my-5">نمایش خدمات</a>--}}

            </div>

        </div>

    </div>



    <div class="bg-white-light pt-4 pb-5 ">
        <div class="container justify-content-md-center" id="our_partner">

            <div class="container">
                <h2 class="h3 box-header text-center font-weight-bold">همکاران ما</h2>
                <section class="customer-logos slider mt-4">
                    @foreach($gallery->images as $image)
                        <div class="slide"><img src="{{$image->image}}" alt="$image->alt"></div>
                    @endforeach
                </section>
            </div>

        </div>
    </div>
    <div class="bg_box ">
        <div class="container process_box pt-6 pb-5" style="padding-bottom: 70px;">
            <div class="row">
                <div class="col-12">
                    <div class="h3 box-header text-center font-weight-bold">
                        پروژه های اخیرما
                    </div>
                    <p class="text-center">
گروه ساختمانی رویال هوم با استفاده از تیم مهندسی و اجرایی مجرب تاکنون پروژه های نوسازی , بازسازی و دکور فراوانی را در کارنامه خود دارد.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-cream pb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="card-group projects-list">
                    @foreach($portfolios as $portfolio)
                    <div class="card">
                        <a href="#">
                            <img class="card-img-top" src="{{url($portfolio->image)}}" alt="Card image cap">
                        </a>

                        <div class="view text-center">
                            <div class="vertical-align-table">
                                <div class="vertical-align-cell">
                                    <p class="description">{{$portfolio->title}}</p>
                                    <a class="more simple" href="#" title="مشاهده">جزئیات پروژه</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-lg-12 text-center pt-5">
                    <a href="#" class="more d-inline-block">نمایش تمام پروژه ها</a>
                    <h4 class="d-inline-block">کاوش پروژه های ما</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white pt-6 pb-5 ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="h3 box-header text-center font-weight-bold">
                        همه خدمات ما
                    </div>
                    <p class="text-center">
مجموعه رویال هوم بیش از ۱۰ سال سابقه در زمینه طراحی , نظارت, و اجرا انواع سازه دارد و دارای سه نمایندگی در شهرهای تهران , تنکابن و متل قو است.
                    </p>
                </div>
                <div class="mt-md-5"></div>
                <div class="col-md-6">
                    <div class="circle">
                        <img src="{{asset('/front/royal/images/image_10-480x480.jpg')}}" class="img-fluid img-circle" alt="img">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature-item sl-small-helmet mt-5">
                        <h4>بیش از 10 سال تجربه</h4>
                        <p>با بکارگیری از دانش تخصصی معماری و عمران و تجربیات خود همراه شماست</p>
                    </div>
                    <div class="feature-item sl-small-roller mt-5">
                        <h4>سازه های LSF</h4>
                        <p>یکی از مهم ترین تخصص های مجموعه رویال هوم طراحی و اجرای سازه های LSF</p>
                    </div>
                    <div class="feature-item sl-small-driller mt-5">
                        <h4>استانداردهای حرفه ای</h4>
                        <p>در رویل هوم همه خدمات با رهترین استاندارد های جهانی اجرا میشود.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="bg-white-light pt-4 pb-5 ">
        <div class="container justify-content-md-center" id="home_tabs">

            <ul class="nav nav-tabs justify-content-center mb-5" id="myTab" role="tablist">
                <li class="nav-item ">
                    <a class="nav-link active sl-small-bubble-check active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">ما پیشنهاد میدهیم</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sl-small-shield" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">ما تضمین میکنیم </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sl-small-truck" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">ما فراهم میکنیم</a>
                </li>
            </ul>
            <div class="tab-content pt-5" id="myTabContent">
                <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="h4 box-header text-center font-weight-bold">
                        پیشنهاد شده
                    </div>
                    <p class="text-center">
                        با بیش از 15 سال تجربه و تمرکز واقعی بر روی رضایت مشتری، شما می توانید به ما برای به روز شده بعدی خود را تکیه می کنند،
                        کفپوش و سنگ جلوی خانه یا تعمیر خانه. ما با ارائه خدمات حرفه ای برای مشتریان خصوصی و تجاری.
                    </p>


                </div>
                <div class="tab-pane fade " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="h4 box-header text-center font-weight-bold">
                        پوشش گارانتی ما
                    </div>
                    <p class="text-center">
                        با بیش از 15 سال تجربه و تمرکز واقعی بر روی رضایت مشتری، شما می توانید به ما برای به روز شده بعدی خود را تکیه می کنند،
                        کفپوش و سنگ جلوی خانه یا تعمیر خانه. ما با ارائه خدمات حرفه ای برای مشتریان خصوصی و تجاری.
                    </p>

                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="h4 box-header text-center font-weight-bold">
                        همه خدمات
                    </div>
                    <p class="text-center">
                        با بیش از 15 سال تجربه و تمرکز واقعی بر روی رضایت مشتری، شما می توانید به ما برای به روز شده بعدی خود را تکیه می کنند،
                        کفپوش و سنگ جلوی خانه یا تعمیر خانه. ما با ارائه خدمات حرفه ای برای مشتریان خصوصی و تجاری.
                    </p>
                </div>
            </div>

        </div>
    </div>
    <div class="bg-white pt-6 pb-5 ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="h3 box-header text-center font-weight-bold">
                        چرا انتخاب LSF
                    </div>
                    <p class="text-center">
از آنجایی که ایران روی کمربندفعال زمین لرزه قرار دارد سبک کردن ساختمان ها اهمیت بالایی دارد . هدف از سازه LSF کاهش وزن ساختمان است
                    </p>
                </div>
                <div class="mt-md-5"></div>
                <div class="col-md-4">
                    <div class="f-wrapper">
                        <div class="feature-item sl-large-clock feature-item-big">
                            <div class="ornament"></div>
                            <h4 class="box-header mt-5 h5">سرعت بالا در اجرا</h4>
                            <p>فقط ظرف ۷۵ روز ساحب ویلای دلخواهتان شوید</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-item sl-large-house-1 feature-item-big">
                        <div class="ornament"></div>
                        <h4 class="box-header mt-5 h5">مقاومت در برابر زلزله</h4>
                        <p>سازه های LSF زلزله را تا ۸ ریشتر تحمل میکنند</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-item sl-small-truck feature-item-big">
                        <div class="ornament"></div>
                        <h4 class="box-header mt-5 h5">قابلیت حمل و نقل</h4>
                        <p>قابلیت حمل و نقل آسان در مسیر های سخت</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="bg-parallax">
        <div class="container">
            <div class="row">
                <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner testimonials pb-5">
                        @foreach($testimonials as $testimonial)
                        <div class="carousel-item {{$loop->iteration == 1 ? "active" : "" }} text-white text-center sl-small-conversation">
                            <div class="ornament"></div>
                            <p>{{$testimonial->comment}} </p>

                            <div class="author-details-box">
                                <div class="author">{{$testimonial->name}}</div>
                                <div class="author-details">{{$testimonial->role}} </div>
                            </div>
                        </div>
                        @endforeach


                    </div>
                    <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>


    </div>
@endcomponent
