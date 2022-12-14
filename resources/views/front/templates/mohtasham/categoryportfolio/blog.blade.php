@component('front.templates.mohtasham.layouts.contents')


    <!-- Start Main Banner Area -->
    <div class="main-banner bg-black">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="banner-content">
                        {{$category->name}} Projects
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="banner-image">
                        <img src="{{$category->image}}" alt="image">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Banner Area -->

    <div class="separate bg-black">
        <div class="br-line"></div>
    </div>

    <!-- Start Projects Area -->
    <section id="projects" class="projects-area ptb-80 bg-black">
        <div class="container">
            <div class="section-title">
                <span>Our completed projects</span>
                <h2>{{$category->name}} Projects</h2>
                <div class="bar"></div>
            </div>
        </div>

        <div class="projects-slides">
            @foreach($projects as $project)
                <div class="single-projects-box">
                    <a href="#">
                        <img src="{{$project->image}}" width="300" alt="img"></a>

                    <div class="projects-content">
                        <h3><a href="">{{$project->title}}</a></h3>
                        <span>
                        @foreach($project->categories as $cat)

                                {{$cat->name}}
                            @endforeach
                    </span>
                    </div>
                </div>
            @endforeach

        </div>
    </section>
    <!-- End Projects Area -->

    <div class="separate bg-black">
        <div class="br-line"></div>
    </div>




@endcomponent
