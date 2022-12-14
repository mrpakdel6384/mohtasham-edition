@extends('layouts.app')



@section('content')
    <div class="main">
        <div class="container py-5 py-sm-6 py-md-7 d-rtl">
            <div class="row justify-content-center pt-4">
                <div class="col-lg-7 col-md-9 col-sm-11">
                    <h1 class="h2 pb-3">رمز عبورتون رو فراموش کردید؟</h1>
                    <p class="fs-sm">طبق مراحل زیر میتونید پسورد جدید خودتون رو فعال کنید:</p>
                    <ul class="list-unstyled fs-sm pb-1 mb-4">
                        <li><span class="text-primary fw-semibold ms-1">1.</span>آدرس ایمیل  رو در فرم زیر وارد کنید</li>
                        <li><span class="text-primary fw-semibold ms-1">2.</span>لینک فعال تعیین رمز عبور جدید برای شما ایمیل خواهد شد</li>
                        <li><span class="text-primary fw-semibold ms-1">3.</span>روی اون لینک کلیک کنید و در صفحه ای که باز میشه رمز عبور جدید رو تعیین کنید .</li>
                    </ul>
                    <div class="bg-secondary rounded-3 px-3 py-4 p-sm-4">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form class="needs-validation p-2" method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="mb-3 pb-1">
                                <label class="form-label" for="email">آدرس ایمیل خود را وارد کنید</label>
                                <input class="form-control" type="email" name="email" required="" id="email" value="{{ old('email') }}">
                                <div class="invalid-feedback">Please provide a valid email address!</div>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="form-group col-md-8 mr-auto">
                                    <x-recaptcha :has-error="$errors->has('g-recaptcha-response')"></x-recaptcha>
                                    @error('g-recaptcha-response')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">ارسال ایمیل فعال سازی رمز عبور</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
