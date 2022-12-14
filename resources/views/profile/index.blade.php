@component('front.templates.aronv1.layouts.contents')

    <!-- Page content-->
    <!-- Slanted background-->
    <div class="position-relative bg-gradient" style="height: 480px;">
        <div class="shape shape-bottom shape-slant bg-secondary d-none d-lg-block">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 260">
                <polygon fill="currentColor" points="0,257 0,260 3000,260 3000,0"></polygon>
            </svg>
        </div>
    </div>
    <!-- Page content-->
    <div class="container position-relative zindex-5 pb-4 mb-md-3 d-rtl" style="margin-top: -350px;">
        <div class="row">
            <!-- Sidebar-->
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="bg-light rounded-3 shadow-lg">
                    <div class="px-4 py-4 mb-1 text-center">
                        <img class="d-block rounded-circle mx-auto my-2" src="{{auth()->user()->userDetail->userAvatar()}}" alt="{{auth()->user()->name}}" width="110">
                        @if( ! auth()->user()->userDetail->username)<h6 class="mb-0 pt-1">{{auth()->user->name}} </h6><span class="text-muted fs-sm">@ </span> @else <h6 class="mb-0 pt-1">{{auth()->user()->name}} </h6><span class="text-muted fs-sm">@ </span> @endif
                    </div>
                    <div class="d-lg-none px-4 pb-4 text-center">
                        <a class="btn btn-primary px-5 mb-2" href="#account-menu" data-bs-toggle="collapse">
                            <i class="ai-menu ms-2"></i>حساب کاربری</a>
                    </div>
                    <div class="d-lg-block collapse pb-2" id="account-menu">
                        <h3 class="d-block bg-secondary fs-sm fw-semibold text-muted mb-0 px-4 py-3">پنل کاربری</h3>
                        <a class="d-flex align-items-center nav-link-style px-4 py-3" href="">
                            <i class="ai-shopping-bag fs-lg opacity-60 ms-2"></i>سفارش ها<span class="nav-indicator"></span>
                            <span class="text-muted fs-sm fw-normal me-auto">2</span>
                        </a>
                        <a class="d-flex align-items-center nav-link-style px-4 py-3 border-top" href="">
                            <i class="ai-dollar-sign fs-lg opacity-60 ms-2"></i>خرید ها<span class="text-muted fs-sm fw-normal me-auto">1525000</span>
                        </a>
                        <a class="d-flex align-items-center nav-link-style px-4 py-3 border-top" href="">
                            <i class="ai-message-square fs-lg opacity-60 ms-2"></i>پیام ها<span class="nav-indicator"></span>
                            <span class="text-muted fs-sm fw-normal me-auto">1</span>
                        </a>
                        <a class="d-flex align-items-center nav-link-style px-4 py-3 border-top" href="">
                            <i class="ai-users fs-lg opacity-60 ms-2"></i>Followers<span class="text-muted fs-sm fw-normal me-auto">34</span>
                        </a>
                        <a class="d-flex align-items-center nav-link-style px-4 py-3 border-top" href="">
                            <i class="ai-star fs-lg opacity-60 ms-2"></i>نظرات<span class="text-muted fs-sm fw-normal me-auto">15</span>
                        </a>
                        <a class="d-flex align-items-center nav-link-style px-4 py-3 border-top" href="">
                            <i class="ai-heart fs-lg opacity-60 ms-2"></i>علاقمندی ها<span class="text-muted fs-sm fw-normal me-auto">6</span>
                        </a>
                        <h3 class="d-block bg-secondary fs-sm fw-semibold text-muted mb-0 px-4 py-3">تنظیمات</h3>
                        <a class="d-flex align-items-center nav-link-style px-4 py-3 active" href="account-profile.html">اطلاعات حساب کاربری</a>
                        <a class="d-flex align-items-center nav-link-style px-4 py-3 border-top" href="account-payment.html">شیوه های پرداخت</a>
                        <div class="d-flex align-items-center border-top"><a class="d-block w-100 nav-link-style px-4 py-3" href="account-notifications.html">Notifications</a>
                            <div class="ms-auto px-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="notifications-switch" data-master-checkbox-for="#notification-settings" checked>
                                    <label class="form-check-label" for="notifications-switch"></label>
                                </div>
                            </div>
                        </div>
                        <a class="d-flex align-items-center nav-link-style px-4 py-3 border-top" href="{{route('logout')}}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                                <i class="ai-log-out fs-lg opacity-60 ms-2"></i>
                            خروج
                        </a>
                    </div>
                </div>
            </div>
            <!-- Content-->
            <div class="col-lg-8">
                <div class="d-flex flex-column h-100 bg-light rounded-3 shadow-lg p-4">
                    <div class="py-2 p-md-3">
                        <!-- Title + Delete link-->
                        <div class="d-sm-flex align-items-center justify-content-between pb-4 text-center text-sm-start">
                            <h1 class="h3 mb-2 text-nowrap">حساب کاربری</h1>
                            <a class="btn btn-link text-danger fw-medium btn-sm mb-2" href="#">
                                <i class="ai-trash-2 fs-base me-2"></i>حذف حساب کاربری
                            </a>
                        </div>
                        <!-- Content-->
                        <div class="bg-secondary rounded-3 p-4 mb-4">
                            <div class="d-block d-sm-flex align-items-center">
                                <img class="d-block rounded-circle mx-sm-0 mx-auto mb-3 mb-sm-0" src="{{auth()->user()->userDetail->userAvatar()}}" alt="{{auth()->user()->name}}" width="110">
                                <div class="pe-sm-3 text-center text-sm-end">
                                    <button class="btn btn-light shadow btn-sm mb-2" type="button"><i class="ai-refresh-cw ms-2"></i>تغییر آواتار</button>
                                    <div class="p mb-0 fs-ms text-muted">پسوند های مجاز JPG, GIF or PNG .</div>
                                </div>
                            </div>
                        </div>
                        <form action="{{route('profile.create')}}" method="post" >
                            @csrf
                        <div class="row">

                            <div class="col-sm-6">
                                <div class="mb-3 pb-1">
                                    <label class="form-label px-0" for="account-fn">نام</label>
                                    <input class="form-control" type="text" name="name" id="account-fn" value="{{old('name',auth()->user()->name)}}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3 pb-1">
                                    <label class="form-label px-0" for="account-ln">نام خانوادگی</label>
                                    <input class="form-control" name="family" type="text" id="account-ln" value="{{old('family',auth()->user()->userDetail->family)}}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3 pb-1">
                                    <label class="form-label px-0" for="account-email">آدرس ایمیل</label>
                                    <input class="form-control" type="email" name="email" id="account-email" value="{{old('email',auth()->user()->email)}}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3 pb-1">
                                    <label class="form-label px-0" for="account-username">نام کاربری</label>
                                    <div class="input-group">
                                        <span class="input-group-text">@</span>
                                        <input class="form-control" type="text" id="account-username" value="{{old('name',auth()->user()->userDetail->username)}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <hr class="mt-2 mb-4">
                                <div class="d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="form-check d-block">
                                        <input class="form-check-input" type="checkbox" id="show-email" name="show-email" checked>
                                        <label class="form-check-label" for="show-email">نمایش ایمیل به دیگر کاربران</label>
                                    </div>
                                    <button class="btn btn-primary mt-3 mt-sm-0" type="button"><i class="ai-save fs-lg me-2"></i>ذخیره تغییرات</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endcomponent
