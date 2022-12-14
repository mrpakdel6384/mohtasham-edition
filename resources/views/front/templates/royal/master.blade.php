<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="{{asset('css/fontawesome/all.css')}}" >
    <link rel="stylesheet" href="{{asset('front/royal/css/front.css')}}" >



    <title>رویال هوم</title>
</head>
<body>
@include('front.templates.royal.layouts.header')

@include('front.templates.royal.layouts.navbar')

@yield('maincontent')
<div class="bg_yellow pt-5 pb-5">
    <div class="container">
        <div class="row  ">
            <div class="col-md-4">
                <div class="contact-details-box sl-small-location"><p>فارس - شیراز - خیابان<br>
                        ملاصدرا - پی سی سنتر</p></div>
            </div>
            <div class="col-md-4">
                <div class="contact-details-box sl-small-phone"><p>تلفن:<br>
                        +149 75 23 222 35</p></div>
            </div>
            <div class="col-md-4">
                <div class="contact-details-box sl-small-mail"><p>ایمیل:<br>
                        <a href="mailto:renovate@mail.com">renovate@mail.com</a></p></div>
            </div>
        </div>
    </div>
</div>


<!-- Footer -->
<footer class="bg_gray   pt-5">
    <!-- Grid container -->
    <div class="container ">
        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-lg-3 col-md-12 mb-4 mb-md-0">
                <h6 class="box-header">تماس با ما</h6>

                <p class="mb-5">
                    گستره تاثیرات و نیازهای ما به دیجیتال مارکتینگ هر روز بیشتر از روز قبل احساس می‌شود. ما بر آن شدیم تا با توجه به نیاز سازمان‌ها و اشخاص به روش‌های مبتنی بر فناوری اطلاعات و بازاریابی‌های فضای مجازی، قدمی در راستای بهبود و شکوفایی رسانه‌های دیجیتال ایرانی برداریم.
                </p>
                <ul class="list-unstyled d-flex  mt-5">
                    <li class="bg_yellow text-white footer-icon"><a target="_blank" href="http://facebook.com/" class="social-facebook text-white"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="bg_yellow text-white footer-icon"><a target="_blank" href="https://twitter.com/" class="social-twitter text-white"><i class="fab fa-twitter"></i></a></li>
                    <li class="bg_yellow text-white footer-icon"><a target="_blank" href="http://linkedin.com" class="social-linkedin text-white"><i class="fab fa-linkedin-in"></i></a></li>
                    <li class="bg_yellow text-white footer-icon"><a target="_blank" href="https://instagram.com/" class="social-pinterest text-white"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-12 mb-4 mb-md-0">
                <h6 class="box-header">خدمات</h6>
                <ul class="list list-unstyled mt-3">
                    <li class="sl-small-tick"><a href="">طراحی داخلی</a></li>
                    <li class="sl-small-tick"><a href="">ساخت و ساز</a></li>
                    <li class="sl-small-tick"><a href="">رنگ امیزی خانه</a></li>
                    <li class="sl-small-tick"><a href="">کاشی کاری منزل</a></li>
                    <li class="sl-small-tick"><a href="">کفپوش ساختمان</a></li>
                    <li class="sl-small-tick"><a href="">سیستم خورشیدی</a></li>
                </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-12 mb-4 mb-md-0">
                <h6 class="box-header">دسته بندی ها</h6>
                <ul class="widget_categories">
                    @foreach($sharecategories as $footercategory)
                        <li class="cat-item cat-item-9">
                            <a href="{{route('content.blog' ,['category'=> $footercategory->slug])}}">{{$footercategory->title}}</a>
                        </li>
                    @endforeach

                </ul>
            </div>
            <div class="col-lg-3 col-md-12 mb-4 mb-md-0">
                <h6 class="box-header mb-4">خدمات</h6>
                @foreach($sharecontents as $footerContent)
                <div class="media mb-5">
                    <a href="{{route('content.single',['category'=>$footerContent->category->slug,'content'=>$footerContent->slug])}}">
                        <img class="ml-3 img-fluid" width="100px" height="100px" src="{{asset($footerContent->image)}}"  alt="{{$footerContent->title}}">
                    </a>
                    <div class="media-body">
                        <h6 class="mt-0">{{$footerContent->title}}</h6>
                        <small class="text-muted">{{ jdate($footerContent->created_at) }}</small>
                    </div>
                </div>
                @endforeach

            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: #fff">
        © 2021:
        <a class="text-dark" href="https://a2.agency/" target="_blank">آژانس دیجیتال مارکتینگ A2</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->


<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="{{asset('front/royal/js/jquery-3.6.0.min.js')}}" ></script>
<script src="{{asset('front/royal/js/bootstrap.min.js')}}" ></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script>
    $(document).ready(function(){
        $('.customer-logos').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 3
                }
            }]
        });
    });
</script>
@yield('masterscript')
@include('sweet::alert')



</body>
</html>
