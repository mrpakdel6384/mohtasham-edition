<?php

namespace App\Http\Controllers\Profile;

use App\ActiveCode;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TokenAuthController extends Controller
{
    public function getPhoneVerify(Request $request)
    {
        if(! $request->session()->has('phone'))
        {
            return redirect(route('profile.2fa.manage'));
        }
        $request->session()->reflash();
        return view('profile.phone-verify');
    }

    public function postPhoneVerify(Request $request)
    {

        if(! $request->session()->has('phone'))
        {
            return redirect(route('profile.2fa.manage'));
        }

        $request->validate([
            'token'=>'required'
        ]);

        $status = ActiveCode::verifyCode($request->token , $request->user());

        if($status){
            $request->user()->activeCode()->delete();
            $request->user()->update([
                'two_factor_type' => 'sms',
                'phone'=>$request->session()->get('phone'),
            ]);

            alert()->success('شماره تلفن و احراز هویت دو مرحله ای شما تایید شد');
        }else{
            alert()->error('تایید شماره موبایل و احراز هویت  دو مرحله ای شما با مشکل مواجه شد');
        }

        return redirect(route('profile.2fa.manage'));
    }
}
