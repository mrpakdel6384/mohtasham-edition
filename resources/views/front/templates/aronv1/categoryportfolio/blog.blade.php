@component('front.templates.aronv1.layouts.contents',['classTopMenu'=>'navbar-floating navbar-sticky navbar-dark'])

    <!-- Page content-->
    <!-- Page title-->
    <section class="position-relative bg-dark pt-7 pb-5 pb-md-7 bg-size-cover bg-attachment-fixed d-rtl" style="background-image: url('/front/around/img/demo/web-studio/cubes-bg.jpg');">
        <div class="shape shape-bottom shape-curve bg-body">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 185.4">
                <path fill="currentColor" d="M3000,0v185.4H0V0c496.4,115.6,996.4,173.4,1500,173.4S2503.6,115.6,3000,0z"></path>
            </svg>
        </div>
        <div class="container position-relative zindex-5 text-center pt-md-6 pt-lg-7 py-5 my-lg-3">
            <h1 class="text-light mb-0">نمونه پروژه های  <span class="h2 d-inline-block bg-faded-primary text-primary px-3 py-2 rounded-3 ms-3">{{$category->name}}</span></h1>
        </div>
    </section>
    <!-- Portfolio grid-->
    <section class="container overflow-hidden py-5 py-md-6 py-lg-7 d-rtl">
        <div class="masonry-filterable pt-3 pt-md-0">

            <div class="masonry-grid" data-columns="3">
                @foreach($projects as $project)
                <div class="masonry-grid-item" data-groups="[&quot;web&quot;]">
                    <a class="card card-hover border-0 shadow" href="">
                        <img class="card-img-top" src="{{$project->thumbImage(300)}}" alt="Portfolio thumb">
                        <div class="card-body text-center">
                            <h3 class="h5 nav-heading mb-2">{{$project->title}}</h3>
                            <p class="fs-sm text-muted mb-2">UI / UX Design, Web Development</p>
                        </div></a>
                </div>
                @endforeach
            </div>
        </div>
        <div class="text-center py-3 pb-md-0">
            <a class="btn btn-primary" href="#"><i class="ai-refresh-ccw me-2"></i>Load More</a>
        </div>
    </section>
@slot('topscript')
    <script src="{{asset('/front/around/vendor/tiny-slider/dist/min/tiny-slider.js')}}"></script>
    <script src="{{asset('/front/around/vendor/jarallax/dist/jarallax.min.js')}}"></script>
    <script src="{{asset('/front/around/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('/front/around/vendor/shufflejs/dist/shuffle.min.js')}}"></script>

    @endslot
@endcomponent
