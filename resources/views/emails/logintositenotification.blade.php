@component('mail::message')
    <h4 >گزارش ورود به حساب کاربری شما</h4>
    <p>کاربری با شماره آی پی {{request()->ip()}} وارد حساب کاربری شما شده است </p>
    @component('mail::button', ['url'=>url('https://aron-soft.com')])
مشاهده
    @endcomponent
@endcomponent
