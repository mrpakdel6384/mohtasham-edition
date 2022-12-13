@component('front.templates.mohtasham.layouts.contents')

    <!-- Start Page Title Area -->
    <div class="page-title-area bg-black">
        <div class="container">
            <h2>{{$content->title}}</h2>
        </div>

        <div class="br-line"></div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Blog Details Area -->
    <section class="blog-details-area ptb-80 bg-black">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="blog-details">
                        <div class="article-image">
                            <img src="{{$content->image}}" alt="image">
                        </div>

                        <div class="article-content">
                            <div class="entry-meta">
                                <ul>
                                    <li><span>Posted On:</span> <a href="#">{{$content->created_at->format('M, d Y H:i:s A')}}</a></li>
                                    <li><span>Posted By:</span> <a href="#">{{$content->user->name}}</a></li>
                                </ul>
                            </div>

                            <h3>{{$content->title}}</h3>


                            {!! $content->body !!}
                        </div>

                        <div class="article-footer">
                            <div class="article-tags">
                                <span><i class="fas fa-bookmark"></i></span>

                                <a href="#">Fashion</a>,
                                <a href="#">Games</a>,
                                <a href="#">Travel</a>
                            </div>

                            <div class="article-share">
                                <ul class="social">
                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="comments-area">
                        <h3 class="comments-title">{{$content->comments()->count()}} Comments:</h3>
                        @include('layouts.comments',['comments'=>$comments,'subject'=>$content])


                        <div class="comment-respond">
                            <h3 class="comment-reply-title">Leave a Reply</h3>
                            @include('layouts.errors')
                            <form class="comment-form" method="post" action="{{route('send.comment')}}">
                                @csrf
                                <input type="hidden" class="hidden" value="0" name="parent_id">
                                <input type="hidden" class="hidden" value="{{get_class($content)}}" name="commentable_type">
                                <input type="hidden" class="hidden" value="{{$content->id}}" name="commentable_id">
                                <p class="comment-form-comment">
                                    <label>Comment</label>
                                    <textarea class="@error('comment') is-invalid @enderror" name="comment" id="comment" cols="45" rows="5" maxlength="65525" required="required"></textarea>
                                @error('comment')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                                </p>
                                <div class="comment-form-url">

                                            <x-recaptcha :has-error="$errors->has('g-recaptcha-response')"></x-recaptcha>
                                            @error('g-recaptcha-response')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                </div>

                                <p class="form-submit">
                                    <input type="submit" name="submit" id="submit" class="submit" value="Post Comment">
                                </p>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <aside class="widget-area" id="secondary">
                        <section class="widget widget_search">
                            <form class="search-form">
                                <label>
                                    <span class="screen-reader-text">Search for:</span>
                                    <input type="search" class="search-field" placeholder="Search...">
                                </label>
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </section>

                        <section class="widget widget_axton_posts_thumb">
                            <h3 class="widget-title">Popular Posts</h3>

                            <article class="item">
                                <a href="#" class="thumb">
                                    <span class="fullimage cover bg1" role="img"></span>
                                </a>
                                <div class="info">
                                    <time datetime="2021-06-30">June 10, 2021</time>
                                    <h4 class="title usmall"><a href="#">Making Peace With The Feast Or Famine Of Freelancing</a></h4>
                                </div>

                                <div class="clear"></div>
                            </article>

                            <article class="item">
                                <a href="#" class="thumb">
                                    <span class="fullimage cover bg2" role="img"></span>
                                </a>
                                <div class="info">
                                    <time datetime="2021-06-30">June 21, 2021</time>
                                    <h4 class="title usmall"><a href="#">I Used The Web For A Day On A 50 MB Budget</a></h4>
                                </div>

                                <div class="clear"></div>
                            </article>

                            <article class="item">
                                <a href="#" class="thumb">
                                    <span class="fullimage cover bg3" role="img"></span>
                                </a>
                                <div class="info">
                                    <time datetime="2021-06-30">June 30, 2021</time>
                                    <h4 class="title usmall"><a href="#">How To Create A Responsive Popup Gallery?</a></h4>
                                </div>

                                <div class="clear"></div>
                            </article>
                        </section>

                        <section class="widget widget_recent_comments">
                            <h3 class="widget-title">Recent Comments</h3>

                            <ul>
                                <li>
                                        <span class="comment-author-link">
                                            <a href="#">A WordPress Commenter</a>
                                        </span>
                                    on
                                    <a href="#">Hello world!</a>
                                </li>
                                <li>
                                        <span class="comment-author-link">
                                            <a href="#">Axton</a>
                                        </span>
                                    on
                                    <a href="#">Hello world!</a>
                                </li>
                                <li>
                                        <span class="comment-author-link">
                                            <a href="#">Wordpress</a>
                                        </span>
                                    on
                                    <a href="#">Hello world!</a>
                                </li>
                                <li>
                                        <span class="comment-author-link">
                                            <a href="#">A WordPress Commenter</a>
                                        </span>
                                    on
                                    <a href="#">Hello world!</a>
                                </li>
                                <li>
                                        <span class="comment-author-link">
                                            <a href="#">Axton</a>
                                        </span>
                                    on
                                    <a href="#">Hello world!</a>
                                </li>
                            </ul>
                        </section>

                        <section class="widget widget_recent_entries">
                            <h3 class="widget-title">Recent Posts</h3>

                            <ul>
                                <li><a href="#">How to Become a Successful Entry Level UX Designer</a></li>
                                <li><a href="#">How to start your business as an entrepreneur</a></li>
                                <li><a href="#">How to be a successful entrepreneur</a></li>
                                <li><a href="#">10 Building Mobile Apps With Ionic And React</a></li>
                                <li><a href="#">Protect your workplace from cyber attacks</a></li>
                            </ul>
                        </section>

                        <section class="widget widget_archive">
                            <h3 class="widget-title">Archives</h3>

                            <ul>
                                <li><a href="#">May 2021</a></li>
                                <li><a href="#">April 2021</a></li>
                                <li><a href="#">June 2021</a></li>
                            </ul>
                        </section>

                        <section class="widget widget_categories">
                            <h3 class="widget-title">Categories</h3>

                            <ul>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Tips</a></li>
                                <li><a href="#">Uncategorized</a></li>
                            </ul>
                        </section>

                        <section class="widget widget_meta">
                            <h3 class="widget-title">Meta</h3>

                            <ul>
                                <li><a href="#">Log in</a></li>
                                <li><a href="#">Entries <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                                <li><a href="#">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                                <li><a href="#">WordPress.org</a></li>
                            </ul>
                        </section>

                        <section class="widget widget_tag_cloud">
                            <h3 class="widget-title">Tags</h3>

                            <div class="tagcloud">
                                <a href="#">IT <span class="tag-link-count"> (3)</span></a>
                                <a href="#">Axton <span class="tag-link-count"> (3)</span></a>
                                <a href="#">Games <span class="tag-link-count"> (2)</span></a>
                                <a href="#">Fashion <span class="tag-link-count"> (2)</span></a>
                                <a href="#">Travel <span class="tag-link-count"> (1)</span></a>
                                <a href="#">Smart <span class="tag-link-count"> (1)</span></a>
                                <a href="#">Marketing <span class="tag-link-count"> (1)</span></a>
                                <a href="#">Tips <span class="tag-link-count"> (2)</span></a>
                            </div>
                        </section>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Details Area -->

@endcomponent