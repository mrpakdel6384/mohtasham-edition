@extends('layouts.app')



@section('content')
        <div class="main d-rtl">
            <div class="container py-5 py-sm-6 py-md-7">
                <div class="row justify-content-center pt-4">
                    <div class="col-lg-7 col-md-9 col-sm-11">
                        <h1 class="h2 pb-3">تعیین رمز عبور جدید</h1>
                        <p class="fs-sm">مرحله سوم</p>
                        <ul class="list-unstyled fs-sm pb-1 mb-4">
                            <li><span class="text-primary fw-semibold me-1">1.</span>آدرس ایمیل  رو در فرم زیر وارد کنید</li>
                            <li><span class="text-primary fw-semibold me-1">2.</span>لینک فعال تعیین رمز عبور جدید برای شما ایمیل خواهد شد</li>
                            <li><span class="text-primary fw-semibold me-1">3.</span>روی اون لینک کلیک کنید و در صفحه ای که باز میشه رمز عبور جدید رو تعیین کنید .</li>
                        </ul>
                        <div class="bg-secondary rounded-3 px-3 py-4 p-sm-4">
                            <form class="needs-validation p-2" method="POST" action="{{ route('password.update') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="mb-3 pb-1">
                                    <label class="form-label" for="email">ایمیل شما:</label>
                                    <input class="form-control" type="email" name="email" required="" id="email" value="{{ $email ?? old('email') }}" >

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-3 pb-1">
                                    <label class="form-label" for="password">رمز عبور جدید شما:</label>
                                    <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" required="" id="password" >

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-3 pb-1">
                                    <label class="form-label" for="password_confirmation">تکراررمز عبور جدید شما:</label>
                                    <input class="form-control @error('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation" required="" id="password_confirmation" >

                                    @error('password_confirmation')
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
                                <button class="btn btn-primary" type="submit">تعیین رمز عبور جدید</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
