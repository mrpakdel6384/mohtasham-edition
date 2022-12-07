@component('front.templates.aronv1.layouts.contents',['classTopMenu'=>'navbar-floating navbar-sticky navbar-dark'])

        <!-- Hero-->
        <section class="jarallax bg-dark pt-5 pt-lg-7 pb-7" data-jarallax="" data-speed="0.3">

            <div class="shape shape-bottom shape-curve bg-body">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 185.4">
                    <path fill="currentColor" d="M3000,0v185.4H0V0c496.4,115.6,996.4,173.4,1500,173.4S2503.6,115.6,3000,0z"></path>
                </svg>
            </div>
            <!-- Text-->
            <div class="container position-relative zindex-5 text-center pt-6 pt-lg-7">
                <h2 class="fs-xl fw-normal text-light">تجربه دیجیتال مارکتینگ</h2>
                <h1 class="text-light">با همراهی تیم آرون سافت</h1>
            </div>
            <div class="d-block d-sm-none" style="height: 100px;"></div>
            <div class="d-none d-sm-block d-lg-none" style="height: 300px;"></div>
            <div class="d-none d-lg-block" style="height: 400px;"></div>
            <div id="jarallax-container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100;">
                <div class="jarallax-img" style="background-image: url({{asset('/front/around/img/demo/web-studio/cubes-bg.jpg')}}); object-fit: cover; object-position: 50% 50%; max-width: none; position: fixed; top: 0px; left: 0px; width: 1905px; height: 647.8px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: -29.4px; transform: translate3d(0px, 29.4px, 0px);" data-jarallax-original-styles="background-image: url({{asset('/front/around/img/demo/web-studio/cubes-bg.jpg')}});"></div></div></section>
        <!-- Featured Projects (carousel)-->
        <section class="container position-relative zindex-5">
            <div class="d-block d-sm-none" style="margin-top: -160px;"></div>
            <div class="d-none d-sm-block d-lg-none" style="margin-top: -360px;"></div>
            <div class="d-none d-lg-block" style="margin-top: -450px;"></div>
            <div class="frame-browser border-light tns-carousel-wrapper mx-auto" style="max-width: 915px;">
                <div class="frame-browser-toolbar">
                    <div class="text-nowrap me-3">
                        <span class="frame-browser-button bg-danger"></span>
                        <span class="frame-browser-button bg-warning"></span>
                        <span class="frame-browser-button bg-success"></span>
                    </div>
                    <span class="tns-carousel-label fs-sm text-light opacity-75">https://mobileapp.com/</span>
                </div>
                <div class="frame-browser-body">
                    <div class="tns-outer" id="tns1-ow">
                        <div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span class="current">4</span>  of 3</div><div class="tns-inner" id="tns1-iw"><div class="tns-carousel-inner tns-slider tns-gallery tns-subpixel tns-calc tns-horizontal" data-carousel-options="{&quot;mode&quot;: &quot;gallery&quot;, &quot;controls&quot;: false, &quot;nav&quot;: false, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 6000}" id="tns1">
                                <div data-carousel-label="https://mobileapp.com/" class="tns-item tns-normal" id="tns1-item0" style="" aria-hidden="true" tabindex="-1"><img class="rounded" src="img/demo/web-studio/slider/01.jpg" alt="Screenshot"></div>
                                <div data-carousel-label="https://bookingapp.com/" class="tns-item tns-normal" id="tns1-item1" aria-hidden="true" tabindex="-1" style=""><img class="rounded" src="img/demo/web-studio/slider/02.jpg" alt="Screenshot"></div>
                                <div data-carousel-label="https://creativeagency.com/" class="tns-item tns-normal" id="tns1-item2" aria-hidden="true" tabindex="-1" style=""><img class="rounded" src="img/demo/web-studio/slider/03.jpg" alt="Screenshot"></div>
                                <div data-carousel-label="https://mobileapp.com/" class="tns-item tns-slide-cloned tns-slide-active tns-fadeIn" style="left: 0%;"><img class="rounded" src="img/demo/web-studio/slider/01.jpg" alt="Screenshot"></div></div></div></div>
                </div>
                <div class="tns-carousel-pager pt-4 text-nowrap text-center mt-2 mb-n2">
                    <button class="active" data-nav="" data-goto="1"></button>
                    <button data-nav="" data-goto="2" class=""></button>
                    <button data-nav="" data-goto="3" class=""></button>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="container pt-5 pt-lg-6">
            <h2 class="text-center">What we offer</h2>
            <p class="text-center text-muted mb-0">We provide wide range of services in web design and development</p>
            <!-- RWD Service-->
            @foreach($services as $service)
                {!! $service->description !!}
            @endforeach
            <!-- Web Dev Service-->
            <div class="row align-items-center border-bottom py-5">
                <div class="col-md-6 offset-lg-1 py-3 order-md-2"><img class="d-block mx-auto" src="img/demo/web-studio/services/02.svg" alt="Web Development"></div>
                <div class="col-xl-4 col-lg-5 col-md-6 offset-xl-1 py-3 order-md-1">
                    <h3 class="h4 mb-4">Web Development (Software)</h3>
                    <ul class="list-unstyled">
                        <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i><span>Building dynamic webstise and web applications with latest technologies</span></li>
                        <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i><span>Front-end and Back-end development</span></li>
                        <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i><span>Integration with popular CMS (WordPress, Drupal, Joomla)</span></li>
                    </ul>
                    <h4 class="h6 pt-2 mb-1">Tools and technologies:</h4>
                    <p class="pb-1">PHP, Node.js, SQL, React.js, Vue.js, GraphQL</p><a class="fw-medium" href="#">Get a quote<i class="ai-chevron-right fs-xl ms-1 align-middle"></i></a>
                </div>
            </div>
            <!-- Mobile Dev Service-->
            <div class="row align-items-center border-bottom py-5">
                <div class="col-md-6 py-3"><img class="d-block mx-auto" src="img/demo/web-studio/services/03.svg" alt="Mobile Apps Development"></div>
                <div class="col-xl-4 col-lg-5 col-md-6 offset-lg-1 py-3">
                    <h3 class="h4 mb-4">Mobile Apps Development</h3>
                    <ul class="list-unstyled">
                        <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i><span>Mobile apps UI design</span></li>
                        <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i><span>Hybrid mobile apps development</span></li>
                        <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i><span>Native mobile apps development</span></li>
                    </ul>
                    <h4 class="h6 pt-2 mb-1">Tools and technologies:</h4>
                    <p class="pb-1">React native, Flutter, Java, Swift</p><a class="fw-medium" href="#">Get a quote<i class="ai-chevron-right fs-xl ms-1 align-middle"></i></a>
                </div>
            </div>
        </section>
        <!-- Portfolio-->
        <section class="container overflow-hidden pt-5 pt-md-6 pt-lg-7 pb-4 pb-md-2">
            <h2 class="text-center pt-4 pt-md-0">Our work</h2>
            <p class="text-center text-muted pb-4">Most recent projects we have completed</p>
            <div class="masonry-filterable mb-3">
                <!-- Portfolio nav (Filters)-->
                <ul class="masonry-filters nav nav-tabs justify-content-center pb-4">
                    <li class="nav-item"><a class="nav-link active" href="#" data-group="all">All</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" data-group="web">Web</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" data-group="mobile">Mobile</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" data-group="identity">Identity</a></li>
                </ul>
                <!-- Portfolio grid-->
                <div class="masonry-grid shuffle" data-columns="3" style="position: relative; overflow: hidden; height: 960px; transition: height 250ms cubic-bezier(0.4, 0, 0.2, 1) 0s;">
                    <div class="masonry-grid-item shuffle-item shuffle-item--visible" data-groups="[&quot;web&quot;]" style="position: absolute; top: 0px; visibility: visible; will-change: transform; left: 0px; opacity: 1; transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;"><a class="card card-hover border-0 shadow" href="portfolio-single-carousel.html"><img class="card-img-top" src="img/portfolio/01.jpg" alt="Portfolio thumb">
                            <div class="card-body text-center">
                                <h3 class="h5 nav-heading mb-2">Landing Page Design</h3>
                                <p class="fs-sm text-muted mb-2">UI / UX Design, Web Development</p>
                            </div></a></div>
                    <div class="masonry-grid-item shuffle-item shuffle-item--visible" data-groups="[&quot;web&quot;]" style="position: absolute; top: 0px; visibility: visible; will-change: transform; left: 0px; opacity: 1; transform: translate(420px, 0px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;"><a class="card card-hover border-0 shadow" href="portfolio-single-carousel.html"><img class="card-img-top" src="img/portfolio/02.jpg" alt="Portfolio thumb">
                            <div class="card-body text-center">
                                <h3 class="h5 nav-heading mb-2">Corporate Website Design</h3>
                                <p class="fs-sm text-muted mb-2">Web Design</p>
                            </div></a></div>
                    <div class="masonry-grid-item shuffle-item shuffle-item--visible" data-groups="[&quot;identity&quot;]" style="position: absolute; top: 0px; visibility: visible; will-change: transform; left: 0px; opacity: 1; transform: translate(840px, 0px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;"><a class="card card-hover border-0 shadow" href="portfolio-single-carousel.html"><img class="card-img-top" src="img/portfolio/03.jpg" alt="Portfolio thumb">
                            <div class="card-body text-center">
                                <h3 class="h5 nav-heading mb-2">Surfing Portal Logo Design</h3>
                                <p class="fs-sm text-muted mb-2">Identity Design</p>
                            </div></a></div>
                    <div class="masonry-grid-item shuffle-item shuffle-item--visible" data-groups="[&quot;web&quot;]" style="position: absolute; top: 0px; visibility: visible; will-change: transform; left: 0px; opacity: 1; transform: translate(0px, 480px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;"><a class="card card-hover border-0 shadow" href="portfolio-single-carousel.html"><img class="card-img-top" src="img/portfolio/04.jpg" alt="Portfolio thumb">
                            <div class="card-body text-center">
                                <h3 class="h5 nav-heading mb-2">Cartzilla - Fashion Store</h3>
                                <p class="fs-sm text-muted mb-2">E-commerce Development</p>
                            </div></a></div>
                    <div class="masonry-grid-item shuffle-item shuffle-item--visible" data-groups="[&quot;mobile&quot;]" style="position: absolute; top: 0px; visibility: visible; will-change: transform; left: 0px; opacity: 1; transform: translate(420px, 480px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;"><a class="card card-hover border-0 shadow" href="portfolio-single-carousel.html"><img class="card-img-top" src="img/portfolio/05.jpg" alt="Portfolio thumb">
                            <div class="card-body text-center">
                                <h3 class="h5 nav-heading mb-2">Mobile App Icon Design</h3>
                                <p class="fs-sm text-muted mb-2">Mobile App Design</p>
                            </div></a></div>
                    <div class="masonry-grid-item shuffle-item shuffle-item--visible" data-groups="[&quot;web&quot;]" style="position: absolute; top: 0px; visibility: visible; will-change: transform; left: 0px; opacity: 1; transform: translate(840px, 480px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;"><a class="card card-hover border-0 shadow" href="portfolio-single-carousel.html"><img class="card-img-top" src="img/portfolio/06.jpg" alt="Portfolio thumb">
                            <div class="card-body text-center">
                                <h3 class="h5 nav-heading mb-2">Auto Reseller Website</h3>
                                <p class="fs-sm text-muted mb-2">UI / UX Design, Web Development</p>
                            </div></a></div>
                </div>
            </div>
            <div class="text-center"><a class="btn btn-primary" href="#">See More Projects</a></div>
        </section>
        <!-- Testimonials-->
        <section class="bg-secondary mt-5 mt-md-6 mt-lg-7">
            <div class="container py-5 py-md-6 py-lg-7">
                <div class="row tns-carousel-wrapper py-3 py-md-0">
                    <div class="col-md-8">
                        <h2 class="pb-2 mb-4 text-center text-md-start">Testimonials</h2>
                        <div class="tns-outer" id="tns2-ow"><div class="tns-controls" aria-label="Carousel Navigation" tabindex="0"><button type="button" data-controls="prev" tabindex="-1" aria-controls="tns2"><i class="ai-arrow-left"></i></button><button type="button" data-controls="next" tabindex="-1" aria-controls="tns2"><i class="ai-arrow-right"></i></button></div><div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span class="current">2</span>  of 5</div><div id="tns2-mw" class="tns-ovh"><div class="tns-inner" id="tns2-iw"><div class="tns-carousel-inner  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal" data-carousel-options="{&quot;nav&quot;: false, &quot;gutter&quot;: 20}" id="tns2" style="transition-duration: 0s; transform: translate3d(-14.2857%, 0px, 0px);"><blockquote class="blockquote mt-3 mb-0 tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                                            <p>Mattis enim ut tellus elementum sagittis vitae et leo duis.</p>
                                            <footer class="d-flex align-items-center"><img class="rounded-circle" src="img/testimonials/05.jpg" alt="Sarah Palson" width="42">
                                                <div class="text-heading fs-md fw-medium ps-2 ms-1">Sarah Palson</div>
                                            </footer>
                                        </blockquote>
                                        <blockquote class="blockquote mt-3 mb-0 tns-item tns-slide-active" id="tns2-item0">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                                            <p>Mattis enim ut tellus elementum sagittis vitae et leo duis.</p>
                                            <footer class="d-flex align-items-center"><img class="rounded-circle" src="img/testimonials/01.jpg" alt="Emma Brown" width="42">
                                                <div class="text-heading fs-md fw-medium ps-2 ms-1">Emma Brown</div>
                                            </footer>
                                        </blockquote>
                                        <blockquote class="blockquote mt-3 mb-0 tns-item" id="tns2-item1" aria-hidden="true" tabindex="-1">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                                            <p>Mattis enim ut tellus elementum sagittis vitae et leo duis.</p>
                                            <footer class="d-flex align-items-center"><img class="rounded-circle" src="img/testimonials/03.jpg" alt="Tim Brooks" width="42">
                                                <div class="text-heading fs-md fw-medium ps-2 ms-1">Tim Brooks</div>
                                            </footer>
                                        </blockquote>
                                        <blockquote class="blockquote mt-3 mb-0 tns-item" id="tns2-item2" aria-hidden="true" tabindex="-1">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                                            <p>Mattis enim ut tellus elementum sagittis vitae et leo duis.</p>
                                            <footer class="d-flex align-items-center"><img class="rounded-circle" src="img/testimonials/02.jpg" alt="Sanomi Smith" width="42">
                                                <div class="text-heading fs-md fw-medium ps-2 ms-1">Sanomi Smith</div>
                                            </footer>
                                        </blockquote>
                                        <blockquote class="blockquote mt-3 mb-0 tns-item" id="tns2-item3" aria-hidden="true" tabindex="-1">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                                            <p>Mattis enim ut tellus elementum sagittis vitae et leo duis.</p>
                                            <footer class="d-flex align-items-center"><img class="rounded-circle" src="img/testimonials/04.jpg" alt="Charlie Welch" width="42">
                                                <div class="text-heading fs-md fw-medium ps-2 ms-1">Charlie Welch</div>
                                            </footer>
                                        </blockquote>
                                        <blockquote class="blockquote mt-3 mb-0 tns-item" id="tns2-item4" aria-hidden="true" tabindex="-1">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                                            <p>Mattis enim ut tellus elementum sagittis vitae et leo duis.</p>
                                            <footer class="d-flex align-items-center"><img class="rounded-circle" src="img/testimonials/05.jpg" alt="Sarah Palson" width="42">
                                                <div class="text-heading fs-md fw-medium ps-2 ms-1">Sarah Palson</div>
                                            </footer>
                                        </blockquote>
                                        <blockquote class="blockquote mt-3 mb-0 tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                                            <p>Mattis enim ut tellus elementum sagittis vitae et leo duis.</p>
                                            <footer class="d-flex align-items-center"><img class="rounded-circle" src="img/testimonials/01.jpg" alt="Emma Brown" width="42">
                                                <div class="text-heading fs-md fw-medium ps-2 ms-1">Emma Brown</div>
                                            </footer>
                                        </blockquote></div></div></div></div>
                    </div>
                    <div class="col-lg-3 col-md-4 offset-lg-1">
                        <div class="tns-carousel-pager d-flex flex-wrap flex-md-column justify-content-center align-items-center align-items-md-start border-start pt-4 mt-4 ps-md-3 pt-md-0 mt-md-0"><a class="swap-image active mx-4 my-3 my-md-4" href="#" data-goto="1"><img class="swap-to" src="img/demo/gadget-landing/logos/01_color.png" alt="Logo" width="136"><img class="swap-from" src="img/demo/gadget-landing/logos/01_gray.png" alt="Logo" width="136"></a><a class="swap-image mx-4 my-3 my-md-4" href="#" data-goto="2"><img class="swap-to" src="img/demo/gadget-landing/logos/02_color.png" alt="Logo" width="130"><img class="swap-from" src="img/demo/gadget-landing/logos/02_gray.png" alt="Logo" width="130"></a><a class="swap-image mx-4 my-3 my-md-4" href="#" data-goto="3"><img class="swap-to" src="img/demo/gadget-landing/logos/05_color.png" alt="Logo" width="114"><img class="swap-from" src="img/demo/gadget-landing/logos/05_gray.png" alt="Logo" width="114"></a><a class="swap-image mx-4 my-3 my-md-4" href="#" data-goto="4"><img class="swap-to" src="img/demo/gadget-landing/logos/03_color.png" alt="Logo" width="103"><img class="swap-from" src="img/demo/gadget-landing/logos/03_gray.png" alt="Logo" width="103"></a><a class="swap-image mx-4 my-3 my-md-4" href="#" data-goto="5"><img class="swap-to" src="img/demo/gadget-landing/logos/04_color.png" alt="Logo" width="143"><img class="swap-from" src="img/demo/gadget-landing/logos/04_gray.png" alt="Logo" width="143"></a></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog-->
        <section class="container py-5 py-md-6 py-lg-7 mb-4 mb-md-0">
            <h2 class="mb-5 mt-3 mt-md-0 text-center">From the blog</h2>
            <div class="tns-carousel-wrapper">
                <div class="tns-outer" id="tns3-ow"><div class="tns-nav" aria-label="Carousel Pagination"><button type="button" data-nav="0" aria-controls="tns3" style="" aria-label="Carousel Page 1 (Current Slide)" class="tns-nav-active"></button><button type="button" data-nav="1" tabindex="-1" aria-controls="tns3" style="" aria-label="Carousel Page 2"></button><button type="button" data-nav="2" tabindex="-1" aria-controls="tns3" style="display:none" aria-label="Carousel Page 3"></button><button type="button" data-nav="3" tabindex="-1" aria-controls="tns3" style="display:none" aria-label="Carousel Page 4"></button></div><div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span class="current">7 to 9</span>  of 4</div><div id="tns3-mw" class="tns-ovh tns-ah" style="height: 384px;"><div class="tns-inner" id="tns3-iw"><div class="tns-carousel-inner  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal" data-carousel-options="{&quot;items&quot;: 2, &quot;controls&quot;: false, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1, &quot;gutter&quot;: 16},&quot;500&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 16},&quot;850&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 16}, &quot;1100&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 23}}}" id="tns3" style="transition-duration: 0s; transform: translate3d(-37.5%, 0px, 0px);"><div class="pb-2 tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                    <article class="card card-hover h-100 pt-4 pb-5 mx-1">
                                        <div class="card-body pt-5 px-4 px-xl-5"><a class="meta-link fs-sm mb-2" href="#">Web development</a>
                                            <h3 class="h4 nav-heading mb-4"><a href="#">Build Complete Websites in a Fraction of Time With This Handy Tool</a></h3>
                                        </div>
                                        <div class="px-4 px-xl-5 pt-2"><a class="d-flex meta-link fs-sm align-items-center" href="#"><img class="rounded-circle loaded tns-complete" src="file:///Users/mjpakdel/around/around/around.createx.studio/img/testimonials/04.jpg" alt="Charlie Welch" width="42">
                                                <div class="ps-2 ms-1 mt-n1">by<span class="fw-semibold ms-1">Charlie Welch</span></div></a>
                                            <div class="mt-3 text-end text-nowrap"><a class="meta-link fs-xs" href="#"><i class="ai-calendar me-1 mt-n1"></i>&nbsp;Jan 15</a></div>
                                        </div>
                                    </article>
                                </div><div class="pb-2 tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                    <article class="card card-hover h-100 pt-4 pb-5 mx-1">
                                        <div class="card-body pt-5 px-4 px-xl-5"><a class="meta-link fs-sm mb-2" href="#">Project management</a>
                                            <h3 class="h4 nav-heading mb-4"><a href="#">What You Can Learn About Managing Projects</a></h3>
                                        </div>
                                        <div class="px-4 px-xl-5 pt-2"><a class="d-flex meta-link fs-sm align-items-center" href="#"><img class="rounded-circle loaded tns-complete" src="file:///Users/mjpakdel/around/around/around.createx.studio/img/testimonials/07.jpg" alt="Sarah Palson" width="42">
                                                <div class="ps-2 ms-1 mt-n1">by<span class="fw-semibold ms-1">Sarah Palson</span></div></a>
                                            <div class="mt-3 text-end text-nowrap"><a class="meta-link fs-xs" href="#"><i class="ai-calendar me-1 mt-n1"></i>&nbsp;Dec 19</a></div>
                                        </div>
                                    </article>
                                </div><div class="pb-2 tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                    <article class="card card-hover h-100 pt-4 pb-5 mx-1"><span class="badge badge-lg badge-floating badge-floating-end bg-success">New</span>
                                        <div class="card-body pt-5 px-4 px-xl-5"><a class="meta-link fs-sm mb-2" href="#">Identity design</a>
                                            <h3 class="h4 nav-heading mb-4"><a href="#">Top 5 Secrets of Making Successful Corporate Identity Design</a></h3>
                                        </div>
                                        <div class="px-4 px-xl-5 pt-2"><a class="d-flex meta-link fs-sm align-items-center" href="#"><img class="rounded-circle loaded tns-complete" src="file:///Users/mjpakdel/around/around/around.createx.studio/img/testimonials/02.jpg" alt="Sanomi Smith" width="42">
                                                <div class="ps-2 ms-1 mt-n1">by<span class="fw-semibold ms-1">Sanomi Smith</span></div></a>
                                            <div class="mt-3 text-end text-nowrap"><a class="meta-link fs-xs" href="#"><i class="ai-calendar me-1 mt-n1"></i>&nbsp;Feb 12</a></div>
                                        </div>
                                    </article>
                                </div><div class="pb-2 tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                    <article class="card card-hover h-100 pt-4 pb-5 mx-1">
                                        <div class="card-body pt-5 px-4 px-xl-5"><a class="meta-link fs-sm mb-2" href="#">CMS</a>
                                            <h3 class="h4 nav-heading mb-4"><a href="#">List of Excellent Learning Management Systems</a></h3>
                                        </div>
                                        <div class="px-4 px-xl-5 pt-2"><a class="d-flex meta-link fs-sm align-items-center" href="#"><img class="rounded-circle loaded tns-complete" src="file:///Users/mjpakdel/around/around/around.createx.studio/img/testimonials/03.jpg" alt="Tim Brooks" width="42">
                                                <div class="ps-2 ms-1 mt-n1">by<span class="fw-semibold ms-1">Tim Brooks</span></div></a>
                                            <div class="mt-3 text-end text-nowrap"><a class="meta-link fs-xs" href="#"><i class="ai-calendar me-1 mt-n1"></i>&nbsp;Jan 27</a></div>
                                        </div>
                                    </article>
                                </div><div class="pb-2 tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                    <article class="card card-hover h-100 pt-4 pb-5 mx-1">
                                        <div class="card-body pt-5 px-4 px-xl-5"><a class="meta-link fs-sm mb-2" href="#">Web development</a>
                                            <h3 class="h4 nav-heading mb-4"><a href="#">Build Complete Websites in a Fraction of Time With This Handy Tool</a></h3>
                                        </div>
                                        <div class="px-4 px-xl-5 pt-2"><a class="d-flex meta-link fs-sm align-items-center" href="#"><img class="rounded-circle loaded tns-complete" src="file:///Users/mjpakdel/around/around/around.createx.studio/img/testimonials/04.jpg" alt="Charlie Welch" width="42">
                                                <div class="ps-2 ms-1 mt-n1">by<span class="fw-semibold ms-1">Charlie Welch</span></div></a>
                                            <div class="mt-3 text-end text-nowrap"><a class="meta-link fs-xs" href="#"><i class="ai-calendar me-1 mt-n1"></i>&nbsp;Jan 15</a></div>
                                        </div>
                                    </article>
                                </div><div class="pb-2 tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                    <article class="card card-hover h-100 pt-4 pb-5 mx-1">
                                        <div class="card-body pt-5 px-4 px-xl-5"><a class="meta-link fs-sm mb-2" href="#">Project management</a>
                                            <h3 class="h4 nav-heading mb-4"><a href="#">What You Can Learn About Managing Projects</a></h3>
                                        </div>
                                        <div class="px-4 px-xl-5 pt-2"><a class="d-flex meta-link fs-sm align-items-center" href="#"><img class="rounded-circle loaded tns-complete" src="file:///Users/mjpakdel/around/around/around.createx.studio/img/testimonials/07.jpg" alt="Sarah Palson" width="42">
                                                <div class="ps-2 ms-1 mt-n1">by<span class="fw-semibold ms-1">Sarah Palson</span></div></a>
                                            <div class="mt-3 text-end text-nowrap"><a class="meta-link fs-xs" href="#"><i class="ai-calendar me-1 mt-n1"></i>&nbsp;Dec 19</a></div>
                                        </div>
                                    </article>
                                </div>
                                <!-- Article-->
                                <div class="pb-2 tns-item tns-slide-active" id="tns3-item0">
                                    <article class="card card-hover h-100 pt-4 pb-5 mx-1"><span class="badge badge-lg badge-floating badge-floating-end bg-success">New</span>
                                        <div class="card-body pt-5 px-4 px-xl-5"><a class="meta-link fs-sm mb-2" href="#">Identity design</a>
                                            <h3 class="h4 nav-heading mb-4"><a href="#">Top 5 Secrets of Making Successful Corporate Identity Design</a></h3>
                                        </div>
                                        <div class="px-4 px-xl-5 pt-2"><a class="d-flex meta-link fs-sm align-items-center" href="#"><img class="rounded-circle tns-complete" src="file:///Users/mjpakdel/around/around/around.createx.studio/img/testimonials/02.jpg" alt="Sanomi Smith" width="42">
                                                <div class="ps-2 ms-1 mt-n1">by<span class="fw-semibold ms-1">Sanomi Smith</span></div></a>
                                            <div class="mt-3 text-end text-nowrap"><a class="meta-link fs-xs" href="#"><i class="ai-calendar me-1 mt-n1"></i>&nbsp;Feb 12</a></div>
                                        </div>
                                    </article>
                                </div>
                                <!-- Article-->
                                <div class="pb-2 tns-item tns-slide-active" id="tns3-item1">
                                    <article class="card card-hover h-100 pt-4 pb-5 mx-1">
                                        <div class="card-body pt-5 px-4 px-xl-5"><a class="meta-link fs-sm mb-2" href="#">CMS</a>
                                            <h3 class="h4 nav-heading mb-4"><a href="#">List of Excellent Learning Management Systems</a></h3>
                                        </div>
                                        <div class="px-4 px-xl-5 pt-2"><a class="d-flex meta-link fs-sm align-items-center" href="#"><img class="rounded-circle loaded tns-complete" src="file:///Users/mjpakdel/around/around/around.createx.studio/img/testimonials/03.jpg" alt="Tim Brooks" width="42">
                                                <div class="ps-2 ms-1 mt-n1">by<span class="fw-semibold ms-1">Tim Brooks</span></div></a>
                                            <div class="mt-3 text-end text-nowrap"><a class="meta-link fs-xs" href="#"><i class="ai-calendar me-1 mt-n1"></i>&nbsp;Jan 27</a></div>
                                        </div>
                                    </article>
                                </div>
                                <!-- Article-->
                                <div class="pb-2 tns-item tns-slide-active" id="tns3-item2">
                                    <article class="card card-hover h-100 pt-4 pb-5 mx-1">
                                        <div class="card-body pt-5 px-4 px-xl-5"><a class="meta-link fs-sm mb-2" href="#">Web development</a>
                                            <h3 class="h4 nav-heading mb-4"><a href="#">Build Complete Websites in a Fraction of Time With This Handy Tool</a></h3>
                                        </div>
                                        <div class="px-4 px-xl-5 pt-2"><a class="d-flex meta-link fs-sm align-items-center" href="#"><img class="rounded-circle tns-complete" src="file:///Users/mjpakdel/around/around/around.createx.studio/img/testimonials/04.jpg" alt="Charlie Welch" width="42">
                                                <div class="ps-2 ms-1 mt-n1">by<span class="fw-semibold ms-1">Charlie Welch</span></div></a>
                                            <div class="mt-3 text-end text-nowrap"><a class="meta-link fs-xs" href="#"><i class="ai-calendar me-1 mt-n1"></i>&nbsp;Jan 15</a></div>
                                        </div>
                                    </article>
                                </div>
                                <!-- Article-->
                                <div class="pb-2 tns-item" id="tns3-item3" aria-hidden="true" tabindex="-1">
                                    <article class="card card-hover h-100 pt-4 pb-5 mx-1">
                                        <div class="card-body pt-5 px-4 px-xl-5"><a class="meta-link fs-sm mb-2" href="#">Project management</a>
                                            <h3 class="h4 nav-heading mb-4"><a href="#">What You Can Learn About Managing Projects</a></h3>
                                        </div>
                                        <div class="px-4 px-xl-5 pt-2"><a class="d-flex meta-link fs-sm align-items-center" href="#"><img class="rounded-circle loaded tns-complete" src="file:///Users/mjpakdel/around/around/around.createx.studio/img/testimonials/07.jpg" alt="Sarah Palson" width="42">
                                                <div class="ps-2 ms-1 mt-n1">by<span class="fw-semibold ms-1">Sarah Palson</span></div></a>
                                            <div class="mt-3 text-end text-nowrap"><a class="meta-link fs-xs" href="#"><i class="ai-calendar me-1 mt-n1"></i>&nbsp;Dec 19</a></div>
                                        </div>
                                    </article>
                                </div>
                                <div class="pb-2 tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                    <article class="card card-hover h-100 pt-4 pb-5 mx-1"><span class="badge badge-lg badge-floating badge-floating-end bg-success">New</span>
                                        <div class="card-body pt-5 px-4 px-xl-5"><a class="meta-link fs-sm mb-2" href="#">Identity design</a>
                                            <h3 class="h4 nav-heading mb-4"><a href="#">Top 5 Secrets of Making Successful Corporate Identity Design</a></h3>
                                        </div>
                                        <div class="px-4 px-xl-5 pt-2"><a class="d-flex meta-link fs-sm align-items-center" href="#"><img class="rounded-circle loaded tns-complete" src="file:///Users/mjpakdel/around/around/around.createx.studio/img/testimonials/02.jpg" alt="Sanomi Smith" width="42">
                                                <div class="ps-2 ms-1 mt-n1">by<span class="fw-semibold ms-1">Sanomi Smith</span></div></a>
                                            <div class="mt-3 text-end text-nowrap"><a class="meta-link fs-xs" href="#"><i class="ai-calendar me-1 mt-n1"></i>&nbsp;Feb 12</a></div>
                                        </div>
                                    </article>
                                </div><div class="pb-2 tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                    <article class="card card-hover h-100 pt-4 pb-5 mx-1">
                                        <div class="card-body pt-5 px-4 px-xl-5"><a class="meta-link fs-sm mb-2" href="#">CMS</a>
                                            <h3 class="h4 nav-heading mb-4"><a href="#">List of Excellent Learning Management Systems</a></h3>
                                        </div>
                                        <div class="px-4 px-xl-5 pt-2"><a class="d-flex meta-link fs-sm align-items-center" href="#"><img class="rounded-circle loaded tns-complete" src="file:///Users/mjpakdel/around/around/around.createx.studio/img/testimonials/03.jpg" alt="Tim Brooks" width="42">
                                                <div class="ps-2 ms-1 mt-n1">by<span class="fw-semibold ms-1">Tim Brooks</span></div></a>
                                            <div class="mt-3 text-end text-nowrap"><a class="meta-link fs-xs" href="#"><i class="ai-calendar me-1 mt-n1"></i>&nbsp;Jan 27</a></div>
                                        </div>
                                    </article>
                                </div><div class="pb-2 tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                    <article class="card card-hover h-100 pt-4 pb-5 mx-1">
                                        <div class="card-body pt-5 px-4 px-xl-5"><a class="meta-link fs-sm mb-2" href="#">Web development</a>
                                            <h3 class="h4 nav-heading mb-4"><a href="#">Build Complete Websites in a Fraction of Time With This Handy Tool</a></h3>
                                        </div>
                                        <div class="px-4 px-xl-5 pt-2"><a class="d-flex meta-link fs-sm align-items-center" href="#"><img class="rounded-circle loaded tns-complete" src="file:///Users/mjpakdel/around/around/around.createx.studio/img/testimonials/04.jpg" alt="Charlie Welch" width="42">
                                                <div class="ps-2 ms-1 mt-n1">by<span class="fw-semibold ms-1">Charlie Welch</span></div></a>
                                            <div class="mt-3 text-end text-nowrap"><a class="meta-link fs-xs" href="#"><i class="ai-calendar me-1 mt-n1"></i>&nbsp;Jan 15</a></div>
                                        </div>
                                    </article>
                                </div><div class="pb-2 tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                    <article class="card card-hover h-100 pt-4 pb-5 mx-1">
                                        <div class="card-body pt-5 px-4 px-xl-5"><a class="meta-link fs-sm mb-2" href="#">Project management</a>
                                            <h3 class="h4 nav-heading mb-4"><a href="#">What You Can Learn About Managing Projects</a></h3>
                                        </div>
                                        <div class="px-4 px-xl-5 pt-2"><a class="d-flex meta-link fs-sm align-items-center" href="#"><img class="rounded-circle loaded tns-complete" src="file:///Users/mjpakdel/around/around/around.createx.studio/img/testimonials/07.jpg" alt="Sarah Palson" width="42">
                                                <div class="ps-2 ms-1 mt-n1">by<span class="fw-semibold ms-1">Sarah Palson</span></div></a>
                                            <div class="mt-3 text-end text-nowrap"><a class="meta-link fs-xs" href="#"><i class="ai-calendar me-1 mt-n1"></i>&nbsp;Dec 19</a></div>
                                        </div>
                                    </article>
                                </div><div class="pb-2 tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                    <article class="card card-hover h-100 pt-4 pb-5 mx-1"><span class="badge badge-lg badge-floating badge-floating-end bg-success">New</span>
                                        <div class="card-body pt-5 px-4 px-xl-5"><a class="meta-link fs-sm mb-2" href="#">Identity design</a>
                                            <h3 class="h4 nav-heading mb-4"><a href="#">Top 5 Secrets of Making Successful Corporate Identity Design</a></h3>
                                        </div>
                                        <div class="px-4 px-xl-5 pt-2"><a class="d-flex meta-link fs-sm align-items-center" href="#"><img class="rounded-circle loaded tns-complete" src="file:///Users/mjpakdel/around/around/around.createx.studio/img/testimonials/02.jpg" alt="Sanomi Smith" width="42">
                                                <div class="ps-2 ms-1 mt-n1">by<span class="fw-semibold ms-1">Sanomi Smith</span></div></a>
                                            <div class="mt-3 text-end text-nowrap"><a class="meta-link fs-xs" href="#"><i class="ai-calendar me-1 mt-n1"></i>&nbsp;Feb 12</a></div>
                                        </div>
                                    </article>
                                </div><div class="pb-2 tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                    <article class="card card-hover h-100 pt-4 pb-5 mx-1">
                                        <div class="card-body pt-5 px-4 px-xl-5"><a class="meta-link fs-sm mb-2" href="#">CMS</a>
                                            <h3 class="h4 nav-heading mb-4"><a href="#">List of Excellent Learning Management Systems</a></h3>
                                        </div>
                                        <div class="px-4 px-xl-5 pt-2"><a class="d-flex meta-link fs-sm align-items-center" href="#"><img class="rounded-circle loaded tns-complete" src="file:///Users/mjpakdel/around/around/around.createx.studio/img/testimonials/03.jpg" alt="Tim Brooks" width="42">
                                                <div class="ps-2 ms-1 mt-n1">by<span class="fw-semibold ms-1">Tim Brooks</span></div></a>
                                            <div class="mt-3 text-end text-nowrap"><a class="meta-link fs-xs" href="#"><i class="ai-calendar me-1 mt-n1"></i>&nbsp;Jan 27</a></div>
                                        </div>
                                    </article>
                                </div></div></div></div></div>
            </div>
        </section>
@slot('masterscript')
    <script src="{{asset('/front/around/vendor/tiny-slider/dist/min/tiny-slider.js')}}"></script>
    <script src="{{asset('/front/around/vendor/jarallax/dist/jarallax.min.js')}}"></script>
    <script src="{{asset('/front/around/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('/front/around/vendor/shufflejs/dist/shuffle.min.js')}}"></script>

    @endslot
@endcomponent
