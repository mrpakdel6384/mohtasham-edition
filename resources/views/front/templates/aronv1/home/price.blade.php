@component('front.templates.aronv1.layouts.contents',['classTopMenu'=>'navbar-light bg-light navbar-shadow navbar-sticky'])

    <form class="sidebar-enabled sidebar-end needs-validation d-rtl" id="form-price" novalidate="" method="post">
        @csrf
        <div class="container">
            <div class="row">
                <!-- Content-->
                <div class="col-lg-8 content py-4">
                    <nav aria-label="breadcrumb">
                        <ol class="py-1 my-2 breadcrumb">
                            <li class="breadcrumb-item"><a href="/"><i class="ai-home"></i></a></li>

                            <li class="breadcrumb-item active" aria-current="page">استعلام قیمت </li>
                        </ol>
                    </nav>
                    <h1 class="mb-3 pb-4">استعلام قیمت سایت اختصاصی</h1>
                    <div class="alert d-flex alert-info fs-md mb-5" role="alert"><i class="ai-alert-circle fs-xl ms-3"></i>
                            <div>بعد از انتخاب امکانات مورد نظرتون و پر کردن فرم مشخصات اطلاعات خود را ثبت کنید تا همکاران ما با شما تماس بگیرند   </div>
                    </div>
                    <h2 class="h3 pb-3">لیست ماژول ها</h2>
                    <div class="row mb-4">
                        @foreach($modules as $module)
                        <div class="col-sm-4 mb-3 pb-1">
                            <!-- Switch -->
                            <div class="form-check form-switch">
                                <input type="checkbox" class="form-check-input" name="module_id[]"  id="{{$module->id}}" value="{{$module->id}}" data-price="{{$module->price}}">
                                <label class="form-check-label" for="customSwitch1">{{$module->name}}</label>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <h2 class="h3 pb-3">توضیحات</h2>
                    <div class="mb-3 pb-1 pb-3 pb-lg-5">

                    </div>

                    <div class="alert d-flex alert-danger fs-md mb-5" role="alert">
                        <i class="ai-alert-circle fs-xl ms-3"></i>
                        <div>قیمت های ارايه شده تا یک ماه اعتبار خواهند داشت
                            <a href="{{route('consult')}}"  class="alert-link">مشاوره رایگان قبل از ثبت سفارش</a>
                        </div>
                    </div>
                </div>
                <!-- Sidebar-->
                <div class="col-lg-4 sidebar bg-secondary pt-5 ps-lg-4 pb-md-2">
                    <div class="ps-lg-4 mb-3 pb-5">
                        <h2 class="h4 pb-3">نکات مهم:</h2>
                        <ul class="list-unstyled pe-0">
                            <li class="d-flex mb-2 pb-1">
                                <i class="ai-check-circle text-success fs-xl mt-1 ms-3"></i>
                                <span>بخش جزییات هر ماژول توضیح هات تکمیلی مربوط به آن ماژول را نمایش میدهد</span>
                            </li>
                            <li class="d-flex mb-2 pb-1">
                                <i class="ai-check-circle text-success fs-xl mt-1 ms-3"></i>
                                <span>قیمت ارائه شده تا یک ماه معتبر خواهد بود</span>
                            </li>
                            <li class="d-flex mb-2 pb-1">
                                <i class="ai-check-circle text-success fs-xl mt-1 ms-3"></i>
                                <span>با ثبت سفارش در انتهای استعلام همکاران ما با شما تماس میگرند</span>
                            </li>
                        </ul>
                        <hr class="mt-0 mb-4">
                        <div class="d-flex justify-content-between mb-3">
                            <span class="h6 mb-0">قیمت:</span>
                            <span class="text-nav" id="total_price">0 تومان</span>
                        </div>
                        <div class="accordion pt-4 mb-grid-gutter" id="payment-methods">
                            <div class="accordion-item bg-white shadow">
                                <h2 class="accordion-header" id="heading-1">
                                    <button class="accordion-button no-indicator" type="button">
                                        <div class=" w-100" data-bs-toggle="collapse" data-bs-target="#credit-card" aria-expanded="true" aria-controls="credit-card">
                                            <input class="form-check-input" type="radio" id="credit-card-radio" >
                                            <label class="form-check-label d-flex align-items-center fs-base text-heading mb-0 mt-1" for="credit-card-radio">
                                                <span>اطلاعات تماس خود را وارد کنید</span>
                                            </label>
                                        </div>
                                    </button>
                                </h2>
                                <div class="accordion-collapse collapse show" id="credit-card" aria-labelledby="heading-1" data-bs-parent="#payment-methods">
                                    <div class="accordion-body">
                                        <div class="mb-3 pb-1">
                                            <label class="form-label" for="cc-number">شماره تماس</label>
                                            <input class="form-control" name="phone" type="tel" id="tel-input" >
                                        </div>
                                        <div class="mb-3 pb-1">
                                            <label class="form-label" for="cc-number">نام و نام خانوادگی</label>
                                            <input class="form-control" name="name" type="text" id="text-input" >
                                        </div>
                                        <div class="mb-3 pb-1">
                                            <label class="form-label" for="cc-number">ایمیل</label>
                                            <input class="form-control" name="email" type="email" id="email-input" placeholder="email@example.com">
                                        </div>
                                        <div class="mb-3 pb-1">
                                            <x-recaptcha :has-error="$errors->has('g-recaptcha-response')"></x-recaptcha>
                                            @error('g-recaptcha-response')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary d-block w-100" type="submit" id="form">ثبت سفارش و درخواست مشاوره</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @slot('bottomscript')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $( document ).ready(function() {
            function addCommas(nStr)
            {
                nStr += '';
                x = nStr.split('.');
                x1 = x[0];
                x2 = x.length > 1 ? '.' + x[1] : '';
                var rgx = /(\d+)(\d{3})/;
                while (rgx.test(x1)) {
                    x1 = x1.replace(rgx, '$1' + ',' + '$2');
                }
                return x1 + x2;
            }
            let total = 0;
            $('.form-check-input').on( 'change', function() {
                let status = $(this).is(':checked');
                let price = $(this).data('price');
                if(status == false){
                        total = parseInt(total) - parseInt(price);
                        $('#total_price').html(addCommas(total) + 'تومان');

                }else{
                    total = parseInt(price) + parseInt(total);
                    $('#total_price').html(addCommas(total) + 'تومان');
                }


            });



        });
    </script>

    @endslot
@endcomponent
