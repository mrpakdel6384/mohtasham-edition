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
                        <img src="{{asset('front/mohtasham/assets/img/contact.png')}}" alt="image">
                    </div>
                </div>

                <div class="col-lg-7 col-md-12">
                    <div class="contact-form">
                        <form id="conntact" action="{{ route('contact') }}" method='post'>
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" required data-error="Please enter your name" placeholder="Your Name">
                                        <div class="help-block with-errors"></div>
                                        @error('name')

                                        <span class="invalid-feedback">
                                            <strong>{{$message}}</strong>
                                        </span>

                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror"  required data-error="Please enter your email" placeholder="Your Email">
                                        <div class="help-block with-errors"></div>
                                        @error('email')

                                        <span class="invalid-feedback">
                                            <strong>{{$message}}</strong>
                                        </span>

                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="phone" id="msg_subject" class="form-control @error('phone') is-invalid @enderror" required data-error="Please enter your subject" placeholder="Your Subject">
                                        <div class="help-block with-errors"></div>
                                        @error('phone')

                                        <span class="invalid-feedback">
                                            <strong>{{$message}}</strong>
                                        </span>

                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control @error('message') is-invalid @enderror" id="message" cols="30" rows="6" required data-error="Write your message" placeholder="Your Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                        @error('message')

                                        <span class="invalid-feedback">
                                            <strong>{{$message}}</strong>
                                        </span>

                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 pb-1">
                                    <x-recaptcha :has-error="$errors->has('g-recaptcha-response')"></x-recaptcha>
                                    @error('g-recaptcha-response')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit">Send Message</button>
                                    <div id="submit" class="h3 text-center hidden"></div>
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

