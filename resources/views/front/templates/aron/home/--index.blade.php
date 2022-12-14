@component('front.templates.aron.layouts.contents')
    <section class="parallax py-7">
        <div class="container py-5 py-sm-7 text-center">
            <div class="py-md-6">
                <h1 class="text-light pb-1">ارائه دهنده راهکارهای مبتنی بر وب</h1>
                <p class="fs-lg text-light">تجربه هیجان انگیزی برای شما رقم میزنیم</p>
            </div>
        </div>
        <div class="parallax-container">
            <div class="parallax-img" style="    background-image: url({{asset('/front/aron/images/hero-bg.jpeg')}});
    object-fit: cover;
    object-position: 50% 50%;
    max-width: none;
    position: fixed;
    top: 0px;
    left: 0px;
    width: 1905px;
    height: 652.75px;
    overflow: hidden;
    pointer-events: none;
    transform-style: preserve-3d;
    backface-visibility: hidden;
    will-change: transform, opacity;
    margin-top: -0.375px;
    background-attachment: fixed;
    transform: translate3d(0px, -30.625px, 0px);">

            </div>
        </div>
    </section>
    <form action="" class="container position-relative zindex-5 mb-5" style="margin-top: -68px">
        <div class="d-lg-flex bg-secondary align-items-center border rounded-3 px-4 pt-4 pb-3">
            <div class="d-sm-flex align-items-center flex-grow-1">
                <div class="mb-3 pb-1 w-100 mb-sm-4 me-sm-3">
                    <label class="form-label" for="title">عنوان</label>
                    <div class="input-group">
                        <input type="text" class="form-control rounded" name="title" id="title" placeholder="عنوان دوره را وارد کنید">
                    </div>

                </div>
            </div>
            <div class="d-sm-flex align-items-center flex-grow-1">
                <div class="mb-3 pb-1 w-100 mb-sm-4 me-sm-3">
                    <label class="form-label" for="category">دسته بندی</label>
                    <div class="input-group">
                        <select class="form-select" name="type" id="category">
                            <option value="0">طراحی وب</option>
                            <option value="1">موبایل</option>
                            <option value="2">دیتابیس</option>
                            <option value="3">گرافیک</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 pb-1 w-100 mb-sm-4 me-sm-3">
                    <label class="form-label" for="type">نوع دوره</label>
                    <div class="input-group">
                        <select class="form-select" name="type" id="type">
                            <option value="0">رایگان</option>
                            <option value="1">نقدی</option>
                            <option value="2">همکاری</option>
                            <option value="3">عضویت ویژه</option>
                        </select>
                    </div>
                </div>
                <div class="text-center text-sm-start mt-2 mt-sm-4 mb-4">
                    <button class="btn btn-primary btn-signup" type="submit">جستجو</button>
                </div>
            </div>


        </div>
        </div>
        </div>
    </form>


    <!--what we ofer-->

    <section class="container what-we-offer pt-5  pt-lg-6 mt-4 border-button">
        <h2 class="text-center pb-2 mb-5">گام های موفقیت آمیز</h2>
        <p class="text-muted text-center mb-4">برای نتیجه گیری بهتر از فضای اینترنت باید روند و رویه درستی را طی کنید . ما این روند را بصورت ساده و کامل برای شما تشریح میکنیم .</p>
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('/front/aron/images/offer.svg')}}" alt="aron developer team">
            </div>
            <div class="col-xl-4 col-lg-5 col-md-6 offset-lg-1 py-3">

                <h3 class="h4 mb-4">قدم های شما تا موفقیت</h3>
                <ul class="list-unstyled">
                    <li class="d-flex mb-2 pb-1"><i class="far fa-check-circle text-success fs-xl mt-1 me-3"></i><span>تعیین استراتژی و شناخت بازار هدف</span></li>
                    <li class="d-flex mb-2 pb-1"><i class="far fa-check-circle text-success fs-xl mt-1 me-3"></i><span>حضور در شبکه های اجتماعی و طراحی وب سایت</span></li>
                    <li class="d-flex mb-2 pb-1"><i class="far fa-check-circle text-success fs-xl mt-1 me-3"></i><span>تولید محتوا و محصول </span></li>
                    <li class="d-flex mb-2 pb-1"><i class="far fa-check-circle text-success fs-xl mt-1 me-3"></i><span>جذب مخاطب و درنهایت فروش بیشتر </span></li>
                </ul>
                <a class="fw-medium" href="#">مطالعه بیشتر<i class="far fa-chevron-left fs-xl ms-2 align-middle"></i></a>
            </div>
        </div>
    </section>
<!--PORTFOLIO-->
    <section class="container overflow-hidden pt-5 pt-md-6 pt-lg-7 pb-4 pb-md-2">
        <h2 class="text-center pt-4 pt-md-0">پروژه ها</h2>
        <p class="text-center text-muted pb-4">جدیدترین پروژّ های تکمیل شده Aron</p>
        <div class="row">

            <div class="filters filter-button-group">
                <ul class=" nav nav-tabs border-0 justify-content-center pb-4">
                    <li class=" active" data-filter="*">
                        <span>همه</span>
                    </li>
                    <li data-filter=".webdesign">
                        <span>طراحی سایت</span>
                    </li>
                    <li data-filter=".webdev">
                        <span>طراحی اپلیکیشن</span>
                    </li>
                    <li data-filter=".brand">
                        <span>تولید محتوا</span>
                    </li>
                </ul>
            </div>

            <div class="content grid">

                <div class="single-content webdesign webdev grid-item">
                    <a class="card card-hover border-0 shadow" href="portfolio-single-carousel.html">
                        <img class="card-img-top" src="/front/aron/images/p01.jpeg" alt="Portfolio thumb">
                        <div class="card-body text-center">
                            <h3 class="h5 nav-heading mb-2">طراحی سایت فروشاهی</h3>
                            <p class="fs-sm text-muted mb-2">برنامه نویسی- طراحی </p>
                        </div>
                    </a>
                </div>

                <div class="single-content brand webdesign grid-item">
                    <a class="card card-hover border-0 shadow" href="portfolio-single-carousel.html">
                        <img class="card-img-top" src="/front/aron/images/p02.jpeg" alt="Portfolio thumb">
                        <div class="card-body text-center">
                            <h3 class="h5 nav-heading mb-2">طراحی سایت فروشاهی</h3>
                            <p class="fs-sm text-muted mb-2">برنامه نویسی- طراحی </p>
                        </div>
                    </a>
                </div>

                <div class="single-content brand grid-item">
                    <a class="card card-hover border-0 shadow" href="portfolio-single-carousel.html">
                        <img class="card-img-top" src="/front/aron/images/p03.jpeg" alt="Portfolio thumb">
                        <div class="card-body text-center">
                            <h3 class="h5 nav-heading mb-2">طراحی سایت فروشاهی</h3>
                            <p class="fs-sm text-muted mb-2">برنامه نویسی- طراحی </p>
                        </div>
                    </a>
                </div>

                <div class="single-content webdesign grid-item">
                    <a class="card card-hover border-0 shadow" href="portfolio-single-carousel.html">
                        <img class="card-img-top" src="/front/aron/images/p04.jpeg" alt="Portfolio thumb">
                        <div class="card-body text-center">
                            <h3 class="h5 nav-heading mb-2">طراحی سایت فروشاهی</h3>
                            <p class="fs-sm text-muted mb-2">برنامه نویسی- طراحی </p>
                        </div>
                    </a>
                </div>

                <div class="single-content webdesign grid-item">
                    <a class="card card-hover border-0 shadow" href="portfolio-single-carousel.html">
                        <img class="card-img-top" src="/front/aron/images/p05.jpeg" alt="Portfolio thumb">
                        <div class="card-body text-center">
                            <h3 class="h5 nav-heading mb-2">طراحی سایت فروشاهی</h3>
                            <p class="fs-sm text-muted mb-2">برنامه نویسی- طراحی </p>
                        </div>
                    </a>
                </div>

                <div class="single-content webdesign brand grid-item">
                    <a class="card card-hover border-0 shadow" href="portfolio-single-carousel.html">
                        <img class="card-img-top" src="/front/aron/images/p06.jpeg" alt="Portfolio thumb">
                        <div class="card-body text-center">
                            <h3 class="h5 nav-heading mb-2">طراحی سایت فروشاهی</h3>
                            <p class="fs-sm text-muted mb-2">برنامه نویسی- طراحی </p>
                        </div>
                    </a>
                </div>
                <div class="single-content webdesign brand grid-item">
                    <a class="card card-hover border-0 shadow" href="portfolio-single-carousel.html">
                        <img class="card-img-top" src="/front/aron/images/p01.jpeg" alt="Portfolio thumb">
                        <div class="card-body text-center">
                            <h3 class="h5 nav-heading mb-2">طراحی سایت فروشاهی</h3>
                            <p class="fs-sm text-muted mb-2">برنامه نویسی- طراحی </p>
                        </div>
                    </a>
                </div>
                <div class="single-content webdesign brand grid-item">
                    <a class="card card-hover border-0 shadow" href="portfolio-single-carousel.html">
                        <img class="card-img-top" src="/front/aron/images/p11.jpg" alt="Portfolio thumb">
                        <div class="card-body text-center">
                            <h3 class="h5 nav-heading mb-2">طراحی سایت فروشاهی</h3>
                            <p class="fs-sm text-muted mb-2">برنامه نویسی- طراحی </p>
                        </div>
                    </a>
                </div>



            </div>
            <div class="text-center my-5">

                <a href="" class="btn btn-primary  btn-signup">مشاهده همه پروژه ها</a>
            </div>
        </div>
    </section>


    <section class="gradient position-relative pt-6 pb-5 py-sm-6">
        <div class="position-absolute top-0  start-0 w-100 h-100 bg-size-cover" style="background-image: url('/front/aron/images/bg-pattern01.png');"></div>
        <div class="position-relative zindex-5 container py-2">
            <div class="row align-items-center">
                <div class="col-lg-5 offset-lg-1 order-lg-2 pb-5 pb-lg-0 text-center text-lg-start">
                    <h2 class="text-light">CMS Aron چیست؟</h2>
                    <p class="text-light mb-0">Cms اختصاصی گروه نرم افزاری آرون در واقع نرم افزار راه اندازی سایت ها و فروشگه های اینترنی مناسب برای هر کسب و کاری است </p>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="row">
                        <div class="col-sm-4 mb-2 pb-4 mb-sm-0 pb-sm-0">
                            <div class="px-2 text-center"><img class="bg-light rounded-circle mb-2" src="/front/aron/images/01.svg" alt="Tickets" width="105">
                                <p class="fs-sm fw-medium text-light mb-0 pt-1">Make it easier to experience the world</p>
                            </div>
                        </div>
                        <div class="col-sm-4 mb-2 pb-4 mb-sm-0 pb-sm-0">
                            <div class="px-2 text-center"><img class="bg-light rounded-circle mb-2" src="/front/aron/images/02.svg" alt="Search" width="105">
                                <p class="fs-sm fw-medium text-light mb-0 pt-1">Advanced searching with filters</p>
                            </div>
                        </div>
                        <div class="col-sm-4 mb-2 pb-4 mb-sm-0 pb-sm-0">
                            <div class="px-2 text-center"><img class="bg-light rounded-circle mb-2" src="/front/aron/images/03.svg" alt="Flight" width="105">
                                <p class="fs-sm fw-medium text-light mb-0 pt-1">Find the cheapest regular flights</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- academy Aron -->
    <div class="container py-5 my-4 my-sm-0 py-sm-6 py-md-7">
        <div class="slider-container">

            <div id="responsive_wrapper">
                <h2 class="text-center mb-4">
                    آکادمی آرون
                </h2>
                <div class="owl-carousel owl-theme academy" id="responsive">
                    <div class="item">
                        <a class="card border-0 shadow card-hover mx-1" href="#">
                            <span class="badge badge-lg badge-floating badge-floating-end bg-danger" style="width: 5rem;">$25</span>
                            <div class="card-img-top card-img-gradient">
                                <img src="/front/aron/images/01.jpeg" alt="Burano">
                                <span class="card-floating-text text-light fw-medium">مشاهده دوره
                                <i class="ai-chevron-right align-middle fs-lg ms-1"></i>
                            </span>
                            </div>
                            <div class="card-body text-center">
                                <h3 class="h5 pt-1 mb-3">آموزش مقدماتی طراحی وب</h3>
                                <p class="fs-sm text-muted mb-2">۱۴۰۰ ۰۳ ۲۵</p>
                            </div>
                        </a>
                    </div>
                    <div class="item pb-2">
                        <a class="card border-0 shadow card-hover mx-1" href="#">
                            <span class="badge badge-lg badge-floating badge-floating-end bg-danger" style="width: 5rem;">$25</span>
                            <div class="card-img-top card-img-gradient">
                                <img src="/front/aron/images/02.jpeg" alt="Burano">
                                <span class="card-floating-text text-light fw-medium">مشاهده دوره
                                <i class="ai-chevron-right align-middle fs-lg ms-1"></i>
                            </span>
                            </div>
                            <div class="card-body text-center">
                                <h3 class="h5 pt-1 mb-3">آموزش مقدماتی طراحی وب</h3>
                                <p class="fs-sm text-muted mb-2">۱۴۰۰ ۰۳ ۲۵</p>
                            </div>
                        </a>
                    </div>
                    <div class="item pb-2">
                        <a class="card border-0 shadow card-hover mx-1" href="#">
                            <span class="badge badge-lg badge-floating badge-floating-end bg-danger" style="width: 5rem;">$25</span>
                            <div class="card-img-top card-img-gradient">
                                <img src="/front/aron/images/03.jpeg" alt="Burano">
                                <span class="card-floating-text text-light fw-medium">مشاهده دوره
                                <i class="ai-chevron-right align-middle fs-lg ms-1"></i>
                            </span>
                            </div>
                            <div class="card-body text-center">
                                <h3 class="h5 pt-1 mb-3">آموزش مقدماتی طراحی وب</h3>
                                <p class="fs-sm text-muted mb-2">۱۴۰۰ ۰۳ ۲۵</p>
                            </div>
                        </a>
                    </div>
                    <div class="item pb-2">
                        <a class="card border-0 shadow card-hover mx-1" href="#">
                            <span class="badge badge-lg badge-floating badge-floating-end bg-danger" style="width: 5rem;">$25</span>
                            <div class="card-img-top card-img-gradient">
                                <img src="/front/aron/images/04.jpeg" alt="Burano">
                                <span class="card-floating-text text-light fw-medium">مشاهده دوره
                                <i class="ai-chevron-right align-middle fs-lg ms-1"></i>
                            </span>
                            </div>
                            <div class="card-body text-center">
                                <h3 class="h5 pt-1 mb-3">آموزش مقدماتی طراحی وب</h3>
                                <p class="fs-sm text-muted mb-2">۱۴۰۰ ۰۳ ۲۵</p>
                            </div>
                        </a>
                    </div>
                    <div class="item pb-2">
                        <a class="card border-0 shadow card-hover mx-1" href="#">
                            <span class="badge badge-lg badge-floating badge-floating-end bg-danger" style="width: 5rem;">$25</span>
                            <div class="card-img-top card-img-gradient">
                                <img src="/front/aron/images/05.jpeg" alt="Burano">
                                <span class="card-floating-text text-light fw-medium">مشاهده دوره
                                <i class="ai-chevron-right align-middle fs-lg ms-1"></i>
                            </span>
                            </div>
                            <div class="card-body text-center">
                                <h3 class="h5 pt-1 mb-3">آموزش مقدماتی طراحی وب</h3>
                                <p class="fs-sm text-muted mb-2">۱۴۰۰ ۰۳ ۲۵</p>
                            </div>
                        </a>
                    </div>
                    <div class="item pb-2">
                        <a class="card border-0 shadow card-hover mx-1" href="#">
                            <span class="badge badge-lg badge-floating badge-floating-end bg-danger" style="width: 5rem;">$25</span>
                            <div class="card-img-top card-img-gradient">
                                <img src="/front/aron/images/01.jpeg" alt="Burano">
                                <span class="card-floating-text text-light fw-medium">مشاهده دوره
                                <i class="ai-chevron-right align-middle fs-lg ms-1"></i>
                            </span>
                            </div>
                            <div class="card-body text-center">
                                <h3 class="h5 pt-1 mb-3">آموزش مقدماتی طراحی وب</h3>
                                <p class="fs-sm text-muted mb-2">۱۴۰۰ ۰۳ ۲۵</p>
                            </div>
                        </a>
                    </div>
                    <div class="item pb-2">
                        <a class="card border-0 shadow card-hover mx-1" href="#">
                            <span class="badge badge-lg badge-floating badge-floating-end bg-danger" style="width: 5rem;">$25</span>
                            <div class="card-img-top card-img-gradient">
                                <img src="/front/aron/images/02.jpeg" alt="Burano">
                                <span class="card-floating-text text-light fw-medium">مشاهده دوره
                                <i class="fal fa-chevron-right align-middle fs-lg ms-1"></i>

                            </span>
                            </div>
                            <div class="card-body text-center">
                                <h3 class="h5 pt-1 mb-3 text-muted">آموزش مقدماتی طراحی وب</h3>
                                <p class="fs-sm text-muted mb-2">۱۴۰۰ ۰۳ ۲۵</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FAQ-->
    <section class="container py-5  my-4 my-sm-0 py-sm-6 py-md-7">
        <h2 class="text-center pb-2 mb-5">سوالات متداول</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="accourding">
                    <div class="accordion" id="faq">
                        <div class="accordion-item shadow">
                            <h2 class="accordion-header" id="faq-heading-1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1" aria-expanded="true" aria-controls="faq-content-1">چرا باید سایت داشته باشیم؟</button>
                            </h2>
                            <div class="accordion-collapse collapse show" id="faq-content-1" aria-labelledby="faq-heading-1" data-bs-parent="#faq" style="">
                                <div class="accordion-body">
                                    <div class="fs-sm">امروزه با گسترش فناوری و اینترنت در سرتا سر جهان و همچنین مشغله زیاد افراد اگثر نیاز های مردم از طریق اینترنت و سایت ها برطرف میشود. در نتیجه جضور نداشتن شما در دنیای اینترنت به منزله از دست دادن تعداد بسیاری از کاربران
                                        و مشتریان کسب و کار شماست</div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow">
                            <h2 class="accordion-header" id="faq-heading-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2" aria-expanded="false" aria-controls="faq-content-2">چقدر طول میکشه یه سایت طراحی بشه؟</button>
                            </h2>
                            <div class="accordion-collapse collapse" id="faq-content-2" aria-labelledby="faq-heading-2" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <div class="fs-sm">
                                        این کاملا به امکانات و نوع اون وبسایت بستگی داره . وب سایت فروشگاهی زمان خاص خودش رو داره , وبسایت شرکتی و خدماتی همینطور و وب سایت های شخصی هم زمان متفاوتی ولی بیشتر این مهمه که چه امکاناتی در اون سایت نیاز هست.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow">
                            <h2 class="accordion-header" id="faq-heading-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3" aria-expanded="false" aria-controls="faq-content-3">فعالیت در شبکه های اجتماعی یا وب سایت؟ کدوم بهتره؟</button>
                            </h2>
                            <div class="accordion-collapse collapse" id="faq-content-3" aria-labelledby="faq-heading-3" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <div class="fs-sm">هر دوی این موارد برای کسب و کارهای امروزی لازم هستن و در واقع مکمل مسیر جذب مشتری هستن . خلی وقت ها با استفاده از شبکه های اجتماعی ترافیک برای سایت جذب میشه و خیلی وقت ها خدمات از طریق شبکه های اجتماعی معرفی میشن .
                                        توسیه ما فعالیت در هر دو زمینه هست.</div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow">
                            <h2 class="accordion-header" id="faq-heading-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4" aria-expanded="false" aria-controls="faq-content-4">هزینه طراحی سایت چقدره؟</button>
                            </h2>
                            <div class="accordion-collapse collapse" id="faq-content-4" aria-labelledby="faq-heading-4" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <div class="fs-sm">سایت ها با توجه به امکانیتی که دارن هزینشون مشخص میشه . شما اول باید باش مشاوره و مطالعه نوع و بسایت و امکاناتتون رو مشخص کنید تا به قیمت معلومی برسیم هم سایت ارزان قیمت میشه طراحی کرد و هم سایت هایی با امکانات پیچیده
                                        و گران قمیت . اما تیم طراحی آرون با کمترین بودجه هم برای شما وب سایت مناسبی طراحی میکنه . میتونید قبل از ثبت سفارش از
                                        <a href="#" class="btn btn-primary"><i class="fas fa-money-bill-wave"></i> تخمین قیمت طراحی سایت</a> , قیمت حدودی وب سایت خودتون رو مشاهده کنید .</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 d-none d-lg-block  offset-lg-1">
                <img src="/front/aron/images/developers-team-web-design-with-people-characters-illustration_9209-4582.jpeg" alt="aron developer team">
            </div>
        </div>
    </section>
    <!--Blog-->
    <section class="container py-5">
        <div class="row blog-section">
            <h2 class="text-center pt-4 pt-md-0">بلاک</h2>
            <p class="text-center text-muted pb-4">تازه های بلاگ</p>
            @foreach($posts as $post)
                <a class="card card-hover border-0 shadow col-md-3 pt-2" href="{{route('content.single',['category'=>$post->category->slug,'content'=>$post->slug])}}">
                <img class="card-img-top" src="{{$post->thumbImage(300)}}" alt="Portfolio thumb">
                <div class="card-body text-center">
                    <h3 class="h5 nav-heading mb-2">{{$post->title}}</h3>
                    <p class="fs-sm text-muted mb-2">{{$post->category->title}} </p>
                </div>
            </a>
            @endforeach
        </div>
    </section>

    <!--TWSTIMONIAL-->
    <section class="bg-faded-primary position-relative py-md-7 py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 order-md-1 order-2">
                    <!-- Carousel-->
                    <div class="owl-carousel owl-theme testimonials" >
                        <blockquote class="item blockquote mt-3 mb-0 " >
                            <p>با شرکت های مختلفی برای طراحی سایت کار کردیم ولی </p>
                            <p>بزرگترین مشکل یعنی آن تایم بودن و عمل به تعهدات رو فقط در مجموعه آرون مشاهده کردیم</p>
                            <footer class="d-flex align-items-center">
                                <img class="rounded-circle testimonial-img" src="/front/aron/images/testi01.jpeg" alt="مد پوش" width="42px">
                                <div class="text-heading fs-md fw-medium ps-2 ms-1">حسینی مدیر وبسایت مد پوش</div>
                            </footer>
                        </blockquote>
                        <blockquote class="item blockquote mt-3 mb-0 " >
                            <p>پشتیبانی مناسب - همراهی در پروژه راهنمایی دقیق </p>
                            <p>این موارد دلایل همکاری من با مجموعه آرون بود </p>
                            <footer class="d-flex align-items-center">
                                <img class="rounded-circle testimonial-img" src="/front/aron/images/testi02.jpeg" alt="کابان" width="42px">
                                <div class="text-heading fs-md fw-medium ps-2 ms-1">مدیر وب سایت کابان</div>
                            </footer>
                        </blockquote>
                    </div>
                </div>
                <div class="col-md-5 offset-lg-1 order-md-2 order-1 mb-md-0 mb-grid-gutter"><img class="d-block mx-md-0 mx-auto" src="/front/aron/images/illustration.svg" alt="Illustration"></div>
            </div>
        </div>
        <div class="shape shape-bottom shape-curve bg-body">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 185.4">
                <path fill="currentColor" d="M3000,0v185.4H0V0c496.4,115.6,996.4,173.4,1500,173.4S2503.6,115.6,3000,0z"></path>
            </svg>
        </div>
    </section>
@endcomponent
