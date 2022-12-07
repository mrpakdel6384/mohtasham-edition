@component('front.templates.aronv1.layouts.contents')


<!-- Page content-->
<!-- Hero-->
<section class="jarallax bg-dark py-7" data-jarallax data-speed="0.25">
    <div class="jarallax-img" style="background-image: url({{asset('/front/around/img/demo/booking/hero-bg.jpg')}});"></div>
    <div class="container py-5 py-sm-7 text-center">
        <div class="py-md-6">
            <h1 class="text-light pb-1">ارائه دهنده راهکار های مبتنی بر وب</h1>
            <p class="fs-lg text-light">تجربه جذابی برای شما رقم میزنیم</p>
        </div>
    </div>
</section>
<!-- Booking form-->
<form class="container position-relative zindex-5 d-rtl" style="margin-top: -68px;">
    <div class="d-lg-flex align-items-center bg-secondary border rounded-3 px-4 pt-4 pb-3">
        <div class="d-sm-flex align-items-center flex-grow-1">
            <div class="mb-3 pb-1 w-100 mb-sm-4 ms-sm-3">
                <label class="form-label" for="from-destination">نوع دوره </label>
                <select class="form-select" id="to-destination">

                </select>
            </div>
            <div class="mb-3 pb-1 w-100 mb-sm-4 ms-sm-3">
                <label class="form-label" for="to-destination">دسته بندی</label>
                <select class="form-select" id="to-destination">

                </select>
            </div>
        </div>
        <div class="d-sm-flex align-items-center">

            <div class="mb-3 pb-1 w-100 mb-sm-4 ms-sm-3">
                <label class="form-label"></label>
                <div class="input-group">
                    <input class="form-control rounded appended-form-control " type="text" placeholder="نام دوره"  id="return-date">

                </div>
            </div>
            <div class="text-center text-sm-start mt-2 mt-sm-4 mb-4">
                <button class="btn btn-primary" type="submit">جستجو</button>
            </div>
        </div>
    </div>
</form>

<section class="container pt-5 pt-lg-6 d-rtl">
    <h2 class="text-center">اهمیت طراحی سایت برای موفقیت کسب و کارها</h2>
    <p class="text-center text-muted mb-0">اگر می خواهید در بازار امروز کسب و کار شما حرفی برای گفتن داشته باشد همین امروز اقدام کنید.</p>
    <!-- RWD Service-->
    <div class="row align-items-center border-bottom py-5">
        <div class="col-md-6 py-3"><img class="d-block mx-auto" src="{{asset('/front/around/img/demo/web-studio/services/01.svg')}}" alt="Responsive Web Design"></div>
        <div class="col-xl-4 col-lg-5 col-md-6 offset-lg-1 py-3">
            <h3 class="h4 mb-4">مزایایی که طراحی سایت برای کسب و کارها دارد</h3>
            <ul class="list-unstyled pe-0">
                <li class="d-flex mb-2 pb-1">
                    <i class="ai-check-circle text-success fs-xl mt-1 ms-3"></i>
                    <span>افزایش فروش محصولات</span>
                </li>
                <li class="d-flex mb-2 pb-1">
                    <i class="ai-check-circle text-success fs-xl mt-1 ms-3"></i>
                    <span>در دسترس بودن</span>
                </li>
                <li class="d-flex mb-2 pb-1">
                    <i class="ai-check-circle text-success fs-xl mt-1 ms-3"></i>
                    <span>ایجاد اعتبار برای کسب و کار</span>
                </li>
                <li class="d-flex mb-2 pb-1">
                    <i class="ai-check-circle text-success fs-xl mt-1 ms-3"></i>
                    <span>برند سازی</span>
                </li>
                <li class="d-flex mb-2 pb-1">
                    <i class="ai-check-circle text-success fs-xl mt-1 ms-3"></i>
                    <span>تعامل با مشتری</span>
                </li>
            </ul>
            <h4 class="h6 pt-2 mb-1">نیاز به مشاور و راهنمایی بیشتری دارید؟</h4>
            <p class="pb-1">کارشناسان ما اماده پاسخگویی به سوالات شما هستند</p>
            <a class="fw-medium" href="#">درخواست مشاوره<i class="ai-chevron-left fs-xl me-1 align-middle"></i>
            </a>
        </div>
    </div>
</section>

<!-- Portfolio-->
<section class="container overflow-hidden pt-5 pt-md-5 pt-lg-5 pb-4 pb-md-2">
    <h2 class="text-center pt-4 pt-md-0">پروژه ها</h2>
    <p class="text-center text-muted pb-4">برخی از پروژه های آرون</p>
    <div class="masonry-filterable mb-3">
        <!-- Portfolio nav (Filters)-->
        <ul class="masonry-filters nav nav-tabs justify-content-center pb-4 d-rtl">
            <li class="nav-item"><a class="nav-link active" href="#" data-group="all">همه</a></li>
            <li class="nav-item"><a class="nav-link" href="#" data-group="web">سایت شرکتی</a></li>
            <li class="nav-item"><a class="nav-link" href="#" data-group="mobile">فروشگاه اینترنتی</a></li>
            <li class="nav-item"><a class="nav-link" href="#" data-group="identity">آموزشی</a></li>
        </ul>
        <!-- Portfolio grid-->
        <div class="masonry-grid" data-columns="3">
            <div class="masonry-grid-item" data-groups="[&quot;web&quot;]">
                <a class="card card-hover border-0 shadow" href="#">
                    <img class="card-img-top" src="{{asset('/front/around/img/portfolio/01.jpg')}}" alt="Portfolio thumb">
                    <div class="card-body text-center">
                        <h3 class="h5 nav-heading mb-2">وب سایت شرکت کابان</h3>
                        <p class="fs-sm text-muted mb-2">uX/ Ui / Aron CMS</p>
                    </div>
                </a>
            </div>
            <div class="masonry-grid-item" data-groups="[&quot;web&quot;]">
                <a class="card card-hover border-0 shadow" href="#">
                    <img class="card-img-top" src="{{asset('/front/around/img/portfolio/02.jpg')}}" alt="Portfolio thumb">
                    <div class="card-body text-center">
                        <h3 class="h5 nav-heading mb-2">فروشگا اینترنتی مد پوش</h3>
                        <p class="fs-sm text-muted mb-2">UX/UI / Aron CMS</p>
                    </div>
                </a>
            </div>
            <div class="masonry-grid-item" data-groups="[&quot;identity&quot;]">
                <a class="card card-hover border-0 shadow" href="#">
                    <img class="card-img-top" src="{{asset('/front/around/img/portfolio/03.jpg')}}" alt="Portfolio thumb">
                    <div class="card-body text-center">
                        <h3 class="h5 nav-heading mb-2">مجتمع درمانی امیران</h3>
                        <p class="fs-sm text-muted mb-2">UX/UI - ARON CMS</p>
                    </div>
                </a>
            </div>
            <div class="masonry-grid-item" data-groups="[&quot;web&quot;]">
                <a class="card card-hover border-0 shadow" href="#">
                    <img class="card-img-top" src="{{asset('/front/around/img/portfolio/04.jpg')}}" alt="Portfolio thumb">
                    <div class="card-body text-center">
                        <h3 class="h5 nav-heading mb-2">وب سایت مجموعه دیتا تجارت البرز</h3>
                        <p class="fs-sm text-muted mb-2">UX / UI - Aron CMS</p>
                    </div>
                </a>
            </div>
            <div class="masonry-grid-item" data-groups="[&quot;mobile&quot;]">
                <a class="card card-hover border-0 shadow" href="#">
                    <img class="card-img-top" src="{{asset('/front/around/img/portfolio/05.jpg')}}" alt="Portfolio thumb">
                    <div class="card-body text-center">
                        <h3 class="h5 nav-heading mb-2">وب سایت شرکت قیر آذر پاسارگاد</h3>
                        <p class="fs-sm text-muted mb-2">UX / UI - Aron CMS</p>
                    </div>
                </a>
            </div>
            <div class="masonry-grid-item" data-groups="[&quot;web&quot;]">
                <a class="card card-hover border-0 shadow" href="#">
                    <img class="card-img-top" src="{{asset('/front/around/img/portfolio/06.jpg')}}" alt="Portfolio thumb">
                    <div class="card-body text-center">
                        <h3 class="h5 nav-heading mb-2">فروشگاه اینترنتی مبل فام</h3>
                        <p class="fs-sm text-muted mb-2">UI / UX Aron CMS</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="text-center">
        <a class="btn btn-primary" href="#">مشاهده پروژه ها</a>
    </div>
</section>

<!-- Features CTA-->
<section class="bg-gradient position-relative pt-6 pb-5 py-sm-6 d-rtl">
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-size-cover" style="background-image: url({{asset('/front/around/img/demo/booking/bg-pattern01.png')}});"></div>
    <div class="position-relative zindex-5 container py-2">
        <div class="row align-items-center">
            <div class="col-lg-5  order-lg-2 pb-5 pb-lg-0 text-center text-lg-end">
                <h2 class="text-light">سیستم مدیریت محتوای آرون چیست؟</h2>
                <p class="text-light mb-0">
                    CMS اختصاصی گروه نرم افزاری آرون در واقع نرم افزار راه اندازی سایت ها و فروشگه های اینترنی مناسب برای هر کسب و کاری است
                </p>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="row">
                    <div class="col-sm-4 mb-2 pb-4 mb-sm-0 pb-sm-0">
                        <div class="px-2 text-center">
                            <img class="bg-light rounded-circle mb-2" src="{{asset('/front/around/img/demo/booking/icons/01.svg')}}" alt="Tickets" width="105">
                            <p class="fs-sm fw-medium text-light mb-0 pt-1">قابلیت نا محدود در تغییرات</p>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-2 pb-4 mb-sm-0 pb-sm-0">
                        <div class="px-2 text-center"><img class="bg-light rounded-circle mb-2" src="{{asset('/front/around/img/demo/booking/icons/02.svg')}}" alt="Search" width="105">
                            <p class="fs-sm fw-medium text-light mb-0 pt-1">دقت در پیاده سازی و طراحی</p>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-2 pb-4 mb-sm-0 pb-sm-0">
                        <div class="px-2 text-center"><img class="bg-light rounded-circle mb-2" src="{{asset('/front/around/img/demo/booking/icons/03.svg')}}" alt="Flight" width="105">
                            <p class="fs-sm fw-medium text-light mb-0 pt-1">سرعت بالا در طراحی</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Offers carousel-->
<section class="container py-5 my-4 my-sm-0 py-sm-5 py-md-5">
    <h2 class="text-center mb-4">آکادمی آرون</h2>
    <div class="tns-carousel-wrapper">
        <div class="tns-carousel-progress ms-auto mb-3">
            <div class="text-sm text-muted text-center mb-2">
                <span class="tns-current-slide me-1"></span>از
                <span class="tns-total-slides ms-1"></span>
            </div>
            <div class="progress">
                <div class="progress-bar" role="progressbar"></div>
            </div>
        </div>
        <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 3, &quot;nav&quot;: false, &quot;gutter&quot;: 23, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;540&quot;:{&quot;items&quot;:2},&quot;900&quot;:{&quot;items&quot;:3}}}">
            <div class="pb-2">
                <a class="card border-0 shadow card-hover mx-1 d-rtl" href="#">
                    <span class="badge badge-lg badge-floating badge-floating-end bg-danger" style="width: 6rem;">150000 تومان</span>
                    <div class="card-img-top card-img-gradient">
                        <img src="{{asset('/front/around/img/demo/booking/offers/01.jpg')}}" alt="Burano">
                        <span class="card-floating-text text-light fw-medium">
                            مشاهده
                            <i class="ai-chevron-right align-middle fs-lg me-1"></i>
                        </span>
                    </div>
                    <div class="card-body text-center">
                        <h3 class="h5 pt-1 mb-3">آموزش HTML و CSS</h3>
                        <p class="fs-sm text-muted mb-2">خرداد ۱۴۰۰</p>
                    </div>
                </a>
            </div>
            <div class="pb-2"><a class="card border-0 shadow card-hover mx-1 d-rtl" href="#">
                    <span class="badge badge-lg badge-floating badge-floating-end bg-danger" style="width: 6rem;">100000 تومان</span>
                    <div class="card-img-top card-img-gradient">
                        <img src="{{asset('/front/around/img/demo/booking/offers/02.jpg')}}" alt="New York">
                        <span class="card-floating-text text-light fw-medium">
                            مشاهده
                            <i class="ai-chevron-right align-middle fs-lg me-1"></i>
                        </span>
                    </div>
                    <div class="card-body text-center">
                        <h3 class="h5 pt-1 mb-3">آموزش مقدماتی لاراول</h3>
                        <p class="fs-sm text-muted mb-2">خرداد ۱۴۰۰</p>
                    </div>
                </a>
            </div>
            <div class="pb-2">
                <a class="card border-0 shadow card-hover mx-1 d-rtl" href="#">
                    <span class="badge badge-lg badge-floating badge-floating-end bg-danger" style="width: 6rem;">200000تومان</span>
                    <div class="card-img-top card-img-gradient">
                        <img src="{{asset('/front/around/img/demo/booking/offers/03.jpg')}}" alt="Maldives">
                        <span class="card-floating-text text-light fw-medium">مشاهده
                            <i class="ai-chevron-right align-middle fs-lg me-1"></i>
                        </span>
                    </div>
                    <div class="card-body text-center">
                        <h3 class="h5 pt-1 mb-3">آموزش مقدماتی PHP</h3>
                        <p class="fs-sm text-muted mb-2">تیر ۱۴۰۰</p>
                    </div>
                </a>
            </div>
            <div class="pb-2">
                <a class="card border-0 shadow card-hover mx-1 d-rtl" href="#">
                    <span class="badge badge-lg badge-floating badge-floating-end bg-danger" style="width: 6rem;">100000 تومان</span>
                    <div class="card-img-top card-img-gradient">
                        <img src="{{asset('/front/around/img/demo/booking/offers/04.jpg')}}" alt="Buenos Aires">
                        <span class="card-floating-text text-light fw-medium">مشاهده
                            <i class="ai-chevron-right align-middle fs-lg me-1"></i>
                        </span>
                    </div>
                    <div class="card-body text-center">
                        <h3 class="h5 pt-1 mb-3">آموزش مقدماتی linux</h3>
                        <p class="fs-sm text-muted mb-2">مرداد ۱۴۰۰</p>
                    </div>
                </a>
            </div>
            <div class="pb-2">
                <a class="card border-0 shadow card-hover mx-1 d-rtl" href="#">
                    <span class="badge badge-lg badge-floating badge-floating-end bg-danger" style="width: 6rem;">130000  تومان</span>
                    <div class="card-img-top card-img-gradient">
                        <img src="{{asset('/front/around/img/demo/booking/offers/05.jpg')}}" alt="Rome">
                        <span class="card-floating-text text-light fw-medium">مشاهده
                            <i class="ai-chevron-right align-middle fs-lg me-1"></i>
                        </span>
                    </div>
                    <div class="card-body text-center">
                        <h3 class="h5 pt-1 mb-3">آموزش مقدماتی Docker</h3>
                        <p class="fs-sm text-muted mb-2">مرداد ۱۴۰۰</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ-->
<section class="container py-5 my-4 my-sm-0 py-sm-5 py-md-5 d-rtl">
    <h2 class="text-center pb-2 mb-5">سوالات متداول</h2>
    <div class="row pb-2">
        <div class="col-lg-6">
            <div class="accordion" id="faq">
                <div class="accordion-item shadow">
                    <h2 class="accordion-header" id="faq-heading-1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1" aria-expanded="true" aria-controls="faq-content-1">چرا باید سایت بزنم؟</button>
                    </h2>
                    <div class="accordion-collapse collapse show" id="faq-content-1" aria-labelledby="faq-heading-1" data-bs-parent="#faq">
                        <div class="accordion-body">
                            <div class="fs-sm">امروزه با گسترش فناوری و اینترنت در سرتا سر جهان و همچنین مشغله زیاد افراد اگثر نیاز های مردم از طریق اینترنت و سایت ها برطرف میشود. در نتیجه جضور نداشتن شما در دنیای اینترنت به منزله از دست دادن تعداد بسیاری از کاربران و مشتریان کسب و کار شماست</div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item shadow">
                    <h2 class="accordion-header" id="faq-heading-2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2" aria-expanded="false" aria-controls="faq-content-2">چقدر طول میکشه یه سایت اماده استفاده بشه؟</button>
                    </h2>
                    <div class="accordion-collapse collapse" id="faq-content-2" aria-labelledby="faq-heading-2" data-bs-parent="#faq">
                        <div class="accordion-body">
                            <div class="fs-sm">این کاملا به امکانات و نوع اون وبسایت بستگی داره . وب سایت فروشگاهی زمان خاص خودش رو داره , وبسایت شرکتی و خدماتی همینطور و وب سایت های شخصی هم زمان متفاوتی ولی بیشتر این مهمه که چه امکاناتی در اون سایت نیاز هست.</div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item shadow">
                    <h2 class="accordion-header" id="faq-heading-3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3" aria-expanded="false" aria-controls="faq-content-3">در شبکه های اجتماعی فعالیت کردن بهتر از وب سایت نیست؟</button>
                    </h2>
                    <div class="accordion-collapse collapse" id="faq-content-3" aria-labelledby="faq-heading-3" data-bs-parent="#faq">
                        <div class="accordion-body">
                            <div class="fs-sm">هر دوی این موارد برای کسب و کارهای امروزی لازم هستن و در واقع مکمل مسیر جذب مشتری هستن . خلی وقت ها با استفاده از شبکه های اجتماعی ترافیک برای سایت جذب میشه و خیلی وقت ها خدمات از طریق شبکه های اجتماعی معرفی میشن . توسیه ما فعالیت در هر دو زمینه هست.</div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item shadow">
                    <h2 class="accordion-header" id="faq-heading-4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4" aria-expanded="false" aria-controls="faq-content-4">طراحی سایت چقدر هزینه داره؟</button>
                    </h2>
                    <div class="accordion-collapse collapse" id="faq-content-4" aria-labelledby="faq-heading-4" data-bs-parent="#faq">
                        <div class="accordion-body">
                            <div class="fs-sm">سایت ها با توجه به امکانیتی که دارن هزینشون مشخص میشه . شما اول باید باش مشاوره و مطالعه نوع و بسایت و امکاناتتون رو مشخص کنید تا به قیمت معلومی برسیم هم سایت ارزان قیمت میشه طراحی کرد و هم سایت هایی با امکانات پیچیده و گران قمیت . اما تیم طراحی آرون با کمترین بودجه هم برای شما وب سایت مناسبی طراحی میکنه . میتونید قبل از ثبت سفارش از  , قیمت حدودی وب سایت خودتون رو مشاهده کنید .</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-none d-lg-block col-lg-5 offset-lg-1">
            <img src="{{asset('/front/around/img/developers-team-web-design-with-people-characters-illustration_9209-4582.jpeg')}}" alt="سوالات متداول">
        </div>
    </div>
</section>

<section class="container py-5 my-4 my-sm-0 py-sm-5 py-md-5 d-rtl">
    <div class="row blog-section">
        <h2 class="text-center pt-4 pt-md-0">بلاگ</h2>
        <p class="text-center text-muted pb-4">تازه های بلاگ</p>
        @foreach($posts as $post)
        <a class="card card-hover border-0 shadow col-md-3 pt-2" href="{{route('content.single',['category'=>$post->category->slug,'content'=>$post->slug])}}">
            <img class="card-img-top" src="{{$post->thumbImage(300)}}" alt="{{$post->title}}">
            <div class="card-body text-center">
                <h3 class="h5 nav-heading mb-2">{{\Str::limit($post->title,100,'...')}}</h3>
                <p class="fs-sm text-muted mb-2">{{$post->category->title}}</p>
            </div>
        </a>
        @endforeach
    </div>
</section>


    @slot('script')
        <script src="{{asset('/front/around/vendor/jarallax/dist/jarallax.min.js')}}"></script>
        <script src="{{asset('/front/around/vendor/tiny-slider/dist/min/tiny-slider.js')}}"></script>

        <script src="{{asset('/front/around//vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('/front/around/vendor/shufflejs/dist/shuffle.min.js')}}"></script>
    @endslot
@endcomponent
