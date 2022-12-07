@extends('layouts.app')


@section('bgcolor')
    style="background-color:#f7f7fc;"
@endsection
@section('content')
    <section class="container d-flex justify-content-center align-items-center pt-7 pb-4 d-rtl" style="flex: 1 0 auto;">
        <div class="signin-form mt-3">
            <div class="signin-form-inner">

                <!-- Sign up view-->
                <div class="view show" id="signup-view">
                    <h1 class="h2 text-center">عضویت</h1>
                    <p class="fs-ms text-muted mb-4 text-center">ثبت نام کمتر از چند دقیقه وقت نیاز خواهد داشت.</p>
                    <form class="needs-validation" novalidate method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-3">
                            <input class="form-control @error('name') is-invalid @enderror" type="text" placeholder="نام" name="name" required>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input class="form-control @error('email') is-invalid @enderror" name="email" type="email" placeholder="آدرس ایمیل" required>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
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
                        <div class="input-group mb-3">
                            <div class="password-toggle w-100">
                                <input class="form-control" type="password" placeholder="Confirm password" name="password_confirmation" required>
                                <label class="password-toggle-btn" aria-label="Show/hide password">
                                    <input class="password-toggle-check" type="checkbox">
                                    <span class="password-toggle-indicator"></span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-md-8 mr-auto my-3">
                            <x-recaptcha :has-error="$errors->has('g-recaptcha-response')"></x-recaptcha>
                            @error('g-recaptcha-response')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <button class="btn btn-primary d-block w-100" type="submit">ثبت نام</button>
                        <p class="fs-sm pt-3 mb-0 text-center">قبلا در سایت عضو شده اید؟ <a href='{{route('login')}}' class='fw-medium' data-view='#signin-view'>ورود</a></p>
                    </form>
                </div>
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
