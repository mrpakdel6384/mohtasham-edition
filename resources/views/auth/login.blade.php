@extends('layouts.app')

@section('bgcolor')
    style="background-color:#f7f7fc;"
@endsection
@section('content')
    <section class="container d-flex justify-content-center align-items-center pt-7 pb-4 d-rtl" style="flex: 1 0 auto;">
        <div class="signin-form mt-3">
            <div class="signin-form-inner">
                <!-- Sign in view-->
                <div class="view show" id="signin-view">
                    <h1 class="h2 text-center">ورود</h1>
                    <p class="fs-ms text-muted mb-4 text-center">با استفاده از ایمیل و گذرواژه ارائه شده در هنگام ثبت نام وارد حساب خود شوید.</p>
                        <form class="needs-validation" method="POST" action="{{ route('login') }}">
                            @csrf
                        <div class="input-group mb-3">
                            <i class="ai-mail position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                            <input class="form-control rounded @error('email') is-invalid @enderror" type="email" name="email" placeholder="آدرس ایمیل" required>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>
                        <div class="input-group mb-3">
                            <i class="ai-lock position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                            <div class="password-toggle w-100">
                                <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" required>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label class="password-toggle-btn" aria-label="Show/hide password">
                                    <input class="password-toggle-check" type="checkbox">
                                    <span class="password-toggle-indicator"></span>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3 pb-1">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="keep-signed-2" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="keep-signed-2">مرا به خاطر بسپار</label>
                            </div>
                            @if (Route::has('password.request'))
                                <a class="nav-link-style fs-ms" href="{{ route('password.request') }}">رمز عبور خود را فراموش کرده اید؟</a>
                            @endif
                        </div>
                            <div class="form-group col-md-8 mr-auto my-3">
                                <x-recaptcha :has-error="$errors->has('g-recaptcha-response')"></x-recaptcha>
                                @error('g-recaptcha-response')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        <button class="btn btn-primary d-block w-100" type="submit">ورود</button>
                        <p class="fs-sm pt-3 mb-0 text-center">ثبت نام نکرده اید؟
                            <a href='#' class='fw-medium' data-view='#signup-view'>ثبت نام</a>
                        </p>
                    </form>
                </div>
                <!-- Sign up view-->
                <div class="border-top text-center mt-4 pt-4">
                    <p class="fs-sm fw-medium text-heading">یا ورود با حساب:</p>
                    <a class="btn-social bs-facebook bs-outline bs-lg mx-1 mb-2" href="#">
                        <i class="ai-facebook"></i>
                    </a>
                    <a class="btn-social bs-twitter bs-outline bs-lg mx-1 mb-2" href="#">
                        <i class="ai-twitter"></i>
                    </a>
                    <a class="btn-social bs-instagram bs-outline bs-lg mx-1 mb-2" href="#">
                        <i class="ai-instagram"></i>
                    </a>
                    <a class="btn-social bs-google bs-outline bs-lg mx-1 mb-2" href="{{route('auth.google')}}">
                        <i class="ai-google"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>


@endsection
