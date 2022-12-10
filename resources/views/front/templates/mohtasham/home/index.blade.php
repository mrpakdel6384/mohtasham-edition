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
                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-github-square"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-behance"></i></a></li>
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
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-featured-services-box">
                        <div class="icon">
                            <i class="flaticon-mail"></i>
                        </div>

                        <h3>Skill One</h3>
                        <div class="bar"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                        <div class="shape-img">
                            {{--<img src="{{asset('front/mohtasham/assets/img/shape1.png')}}" alt="image">--}}
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-featured-services-box">
                        <div class="icon">
                            <i class="flaticon-targeting"></i>
                        </div>

                        <h3>Skill two</h3>
                        <div class="bar"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                        <div class="shape-img">
                           {{-- <img src="assets/img/shape1.png" alt="image">--}}
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                    <div class="single-featured-services-box">
                        <div class="icon">
                            <i class="flaticon-research"></i>
                        </div>

                        <h3>Skill three</h3>
                        <div class="bar"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                        <div class="shape-img">
                           {{-- <img src="assets/img/shape1.png" alt="image">--}}
                        </div>
                    </div>
                </div>
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

    <!-- Start Testimonials Area -->
    <section id="client" class="testimonials-area ptb-80 bg-black">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="testimonials-image">
                        <img src="assets/img/woman-client.jpg" class="main-image" alt="image">

                        <div class="shape-image">
                            <img src="assets/img/shape/1.png" alt="image">
                            <img src="assets/img/shape/2.png" alt="image">
                            <img src="assets/img/shape/3.png" alt="image">
                            <img src="assets/img/shape/4.png" alt="image">
                            <img src="assets/img/shape/5.png" alt="image">
                            <img src="assets/img/shape/6.png" alt="image">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="section-title">
                        <span>What client says about me</span>
                        <h2>My Clients</h2>
                        <div class="bar"></div>
                    </div>

                    <div class="testimonials-slides owl-carousel owl-theme">
                        <div class="single-testimonials-item">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturs.</p>

                            <div class="client-info">
                                <h3>Jason Statham</h3>
                                <span>Founder at Envato</span>
                            </div>
                        </div>

                        <div class="single-testimonials-item">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturs.</p>

                            <div class="client-info">
                                <h3>James Anderson</h3>
                                <span>Founder at EnvyTheme</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonials Area -->

    <!-- Start Partner Area -->
    <div class="partner-area bg-black">
        <div class="container">
            <div class="partner-slides owl-carousel owl-theme">
                <div class="partner-item">
                    <img src="assets/img/partner/1.png" alt="image">
                </div>

                <div class="partner-item">
                    <img src="assets/img/partner/2.png" alt="image">
                </div>

                <div class="partner-item">
                    <img src="assets/img/partner/3.png" alt="image">
                </div>

                <div class="partner-item">
                    <img src="assets/img/partner/4.png" alt="image">
                </div>

                <div class="partner-item">
                    <img src="assets/img/partner/5.png" alt="image">
                </div>

                <div class="partner-item">
                    <img src="assets/img/partner/6.png" alt="image">
                </div>
            </div>
        </div>
    </div>
    <!-- End Partner Area -->

    <div class="separate bg-black">
        <div class="br-line"></div>
    </div>

    <!-- Start Team Area -->
    <section id="team" class="team-area ptb-80 bg-black">
        <div class="container">
            <div class="section-title">
                <span>Meet Our Experts</span>
                <h2>Our Team</h2>
                <div class="bar"></div>
            </div>

            <div class="team-slides owl-carousel owl-theme">
                <div class="single-team-box">
                    <div class="team-member-image">
                        <img src="assets/img/team/1.png" alt="image">
                    </div>

                    <div class="team-member-content">
                        <h3>Alex Perry</h3>
                        <span>CEO & Manager</span>
                        <ul class="social">
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-github-square"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="single-team-box">
                    <div class="team-member-image">
                        <img src="assets/img/team/2.png" alt="image">
                    </div>

                    <div class="team-member-content">
                        <h3>Josh Butler</h3>
                        <span>Project Manager</span>
                        <ul class="social">
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-github-square"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="single-team-box">
                    <div class="team-member-image">
                        <img src="assets/img/team/3.png" alt="image">
                    </div>

                    <div class="team-member-content">
                        <h3>Sarah Taylor</h3>
                        <span>Web Developer</span>
                        <ul class="social">
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-github-square"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="single-team-box">
                    <div class="team-member-image">
                        <img src="assets/img/team/4.png" alt="image">
                    </div>

                    <div class="team-member-content">
                        <h3>James King</h3>
                        <span>Support</span>
                        <ul class="social">
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-github-square"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="single-team-box">
                    <div class="team-member-image">
                        <img src="assets/img/team/5.png" alt="image">
                    </div>

                    <div class="team-member-content">
                        <h3>Steven Smith</h3>
                        <span>Project Manager</span>
                        <ul class="social">
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-github-square"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Area -->

    <!-- Start Subscribe Area -->
    <section class="subscribe-area ptb-80">
        <div class="container">
            <div class="subscribe-content">
                <h2>Subscribe to our newsletter</h2>

                <div class="newsletter-content">
                    <form class="newsletter-form" data-bs-toggle="validator">
                        <input type="email" class="input-newsletter" placeholder="Enter your email" name="EMAIL" required autocomplete="off">

                        <button type="submit">Subscribe Now</button>
                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Subscribe Area -->

    <!-- Start Blog Area -->
    <section id="blog" class="blog-area ptb-80 bg-black">
        <div class="container">
            <div class="section-title">
                <span>Our Blog</span>
                <h2>Latest News</h2>
                <div class="bar"></div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-post">
                        <div class="post-image">
                            <a href="single-blog.html"><img src="assets/img/blog/1.jpg" alt="image"></a>
                        </div>

                        <div class="post-content">
                            <span class="date"><i class="far fa-calendar-alt"></i> 25 April</span>
                            <h3><a href="single-blog.html">I Used The Web For A Day On A 50 MB Budget</a></h3>
                            <a href="single-blog.html" class="read-more-btn">Read More <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-post">
                        <div class="post-image">
                            <a href="single-blog.html"><img src="assets/img/blog/2.jpg" alt="image"></a>
                        </div>

                        <div class="post-content">
                            <span class="date"><i class="far fa-calendar-alt"></i> 25 April</span>
                            <h3><a href="single-blog.html">How To The Active Menu Based On URL In Next.JS?</a></h3>
                            <a href="single-blog.html" class="read-more-btn">Read More <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    <div class="single-blog-post">
                        <div class="post-image">
                            <a href="single-blog.html"><img src="assets/img/blog/3.jpg" alt="image"></a>
                        </div>

                        <div class="post-content">
                            <span class="date"><i class="far fa-calendar-alt"></i> 25 April</span>
                            <h3><a href="single-blog.html">Instagram Feed Add To Your WordPress Site</a></h3>
                            <a href="single-blog.html" class="read-more-btn">Read More <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->

    <div class="separate bg-black">
        <div class="br-line"></div>
    </div>

    <!-- Start Contact Area -->
    <section id="contact" class="contact-area ptb-80 bg-black">
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
    </section>
    <!-- End Contact Area -->



@endcomponent
