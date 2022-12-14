@component('front.templates.aron.layouts.contents')

<section class="position-relative bg-gradient" style="height: 590px;">
        <div class="shape shape-bottom shape-curve-side bg-body">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 250">
            <g>
              <path fill="currentColor" d="M3000,0v250H0v-51c572.7,34.3,1125.3,34.3,1657.8,0C2190.3,164.8,2637.7,98.4,3000,0z"></path>
            </g>
          </svg>
        </div>
      </section>
      <section class="container position-relative zindex-5 pt-7" style="margin-top: -590px;">
        <div class="row pt-md-4 pt-lg-5 mt-3">
          <div class="col-lg-4 col-md-5 offset-lg-1">
            <h1 class="text-light mb-3 pb-4 pt-sm-3">تماس با تیم آرون</h1>
            <div class="d-flex align-items-start mb-4"><i class="ai-map-pin h3 mb-0 text-light"></i>
              <div class="ps-3">
                <p class="text-light mb-2">تهران مینی سیتی<br>کوچه نصر ۲ پلاک ۸ واحد ۸</p>
              </div>
            </div>
            <div class="d-flex align-items-start mb-4"><i class="ai-mail h3 mt-n1 mb-0 text-light"></i>
              <div class="ps-3"><a class="d-inline-block text-light text-decoration-none mb-2" href="mailto:contact@aron-soft.com">contact@aron-soft.com</a></div>
            </div>
            <div class="d-flex align-items-start mb-4"><i class="ai-phone h3 mt-n1 mb-0 text-light"></i>
              <div class="ps-3"><a class="d-inline-block text-light text-decoration-none mb-2" href="tel:+982122451912">021-22451912</a></div>
            </div>
          </div>
          <div class="col-xl-6 col-md-7">
            <div class="card border-0 shadow-lg">
              <div class="card-body py-5 px-3 px-sm-4">
                <h2 class="h3 text-center">منتظر تماس شما هستیم</h2>
                <p class="fs-sm text-muted text-center">در کمترین زمان ممکن پاسخگوی شما هستیم</p>
                <form class="needs-validation pt-2 px-md-3" action="{{ route('contact') }}" method='post'>
                @csrf
                  <div class="row">
                    <div class="col-md-6 mb-3 pb-1">
                      <label class="form-label" for="cont-fn">نام<sup class="text-danger ms-1">*</sup></label>
                      <input class="form-control @error('name') is-invalid @enderror" type="text" id="cont-fn" name="name" rvalue="{{ old('name') }}" >
                      @error('name')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                    </div>
                    <div class="col-md-6 mb-3 pb-1">
                      <label class="form-label" for="cont-email">ایمیل<sup class="text-danger ms-1">*</sup></label>
                      <input class="form-control @error('email') is-invalid @enderror" type="email" id="cont-email" placeholder="j.doe@example.com" name="email" value="{{ old('email') }}">
                      @error('email')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                    </div>
                  </div>
                  <div class="mb-3 pb-1">
                    <label class="form-label" for="cont-subject">تلفن<sup class="text-danger ms-1">*</sup></label>
                    <input class="form-control @error('phone') is-invalid @enderror" type="text" id="cont-subject" placeholder="تلفن خود را وارد کنید" name="phone"  value="{{ old('phone') }}">
                    @error('phone')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                  </div>
                  <div class="mb-3 pb-1">
                    <label class="form-label" for="cont-message">پیام<sup class="text-danger ms-1">*</sup></label>
                    <textarea class="form-control @error('message') is-invalid @enderror" id="cont-message" name="message" rows="5" placeholder="پیام خود را بنویسید" required="">{{ old('message') }}</textarea>
                    @error('message')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                  </div>
                  <div class="mb-3 pb-1">
                    <x-recaptcha :has-error="$errors->has('g-recaptcha-response')"></x-recaptcha>
                                @error('g-recaptcha-response')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                  </div>
                  <div class="text-center pt-2">
                    <button class="btn btn-primary" type="submit">ارسال پیام</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="container py-5 py-md-6 py-lg-7">


      </section>
    @slot('script')
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @endslot
    
@endcomponent
