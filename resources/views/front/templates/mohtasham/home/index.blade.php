@component('front.templates.mohtasham.layouts.contents')


    <!-- Start Main Banner Area -->
    <div class="main-banner bg-black">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="banner-content">
                        {!! $about->description !!}
                        <div class="social">
                            <ul>
                                <li><a href="https://www.facebook.com/profile.php?id=100086795016760&mibextid=LQQJ4d" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/mohtashamhesam/status/1587133138479861762?s=52&t=B0FtncQ_2dg9aNxMi1pBPw" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/hesammohtasham/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="banner-image">
                        <img src="{{$about->thumbImage(600)}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Banner Area -->

    <!-- Start Featured Services Area -->
    <section class="featured-services-area bg-black">
        <div class="container">
            <div class="row">
                @foreach($skills as $skill)
                    <div class="col-lg-4 col-md-6 col-sm-6 {{$loop->last ? "offset-lg-0 offset-md-3 offset-sm-3" : ""}}">
                        <div class="single-featured-services-box">
                        <div class="icon">
                            <i class="flaticon-targeting"></i>
                        </div>

                        <h3>{{$skill->title}}</h3>
                        <div class="bar"></div>
                        {!! $skill->description !!}

                        <div class="shape-img">
                            <img src="{{asset('front/mohtasham/assets/img/shape1.png')}}" alt="image">
                        </div>
                    </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- End Featured Services Area -->

    <div class="separate bg-black">
        <div class="br-line"></div>
    </div>

    <!-- Start Projects Area -->
    <section id="projects" class="projects-area ptb-80 bg-black">
        <div class="container">
            <div class="section-title">
                <span>Our completed projects</span>
                <h2>Recent Projects</h2>
                <div class="bar"></div>
            </div>
        </div>

        <div class="projects-slides owl-carousel owl-theme">
            @foreach($portfolios as $portfolio)
            <div class="single-projects-box">
                <a href="#">
                    <img src="{{$portfolio->image}}" width="300" alt="img"></a>

                <div class="projects-content">
                    <h3><a href="">{{$portfolio->title}}</a></h3>
                    <span>
                        @foreach($portfolio->categories as $cat)

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




    <!-- Start Blog Area -->
    <section id="blog" class="blog-area ptb-80 bg-black">
        <div class="container">
            <div class="section-title">
                <span>Our Blog</span>
                <h2>Latest News</h2>
                <div class="bar"></div>
            </div>

            <div class="row">
                @foreach($news  as $latest_news)
                <div class="col-lg-4 col-md-6 {{$loop->last ? "offset-lg-0 offset-md-3" : ""}}">
                    <div class="single-blog-post">
                        <div class="post-image">
                            <a href="{{route('content.single',['category'=>$latest_news->category->slug,$latest_news])}}">
                                <img src="{{$latest_news->thumbImage(600)}}" alt="image"></a>
                        </div>

                        <div class="post-content">
                            <span class="date"><i class="far fa-calendar-alt"></i> {{$latest_news->created_at}}</span>
                            <h3><a href="{{route('content.single',['category'=>$latest_news->category->slug,$latest_news])}}">{{substr($latest_news->title,0,50)}}...</a></h3>
                            <a href="{{route('content.single',['category'=>$latest_news->category->slug,$latest_news])}}" class="read-more-btn">Read More <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Blog Area -->

    <div class="separate bg-black">
        <div class="br-line"></div>
    </div>

    <!-- Start Contact Area -->
    {{--<section id="contact" class="contact-area ptb-80 bg-black">
        <div class="container">
            <div class="section-title">
                <span>Let's Talk</span>
                <h2>Get in Touch</h2>
                <div class="bar"></div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12">
                    <div class="contact-image">
                        <img src="assets/img/contact.png" alt="image">
                    </div>
                </div>

                <div class="col-lg-7 col-md-12">
                    <div class="contact-form">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message" placeholder="Your Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input
                                                    name="gridCheck"
                                                    value="I agree to the terms and privacy policy."
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="gridCheck"
                                                    required
                                            >

                                            <label class="form-check-label" for="gridCheck">
                                                I agree to the <a href="#">terms</a> and <a href="#">privacy policy</a>
                                            </label>
                                            <div class="help-block with-errors gridCheck-error"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit">Send Message</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
    <!-- End Contact Area -->



@endcomponent
