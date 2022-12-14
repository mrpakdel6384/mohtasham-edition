<?php

namespace App\Http\Controllers\Auth;

use App\ActiveCode;
use App\Http\Controllers\Controller;
use App\Notifications\LoginToWebsite;
use App\User;
use Illuminate\Http\Request;

class AuthTokenController extends Controller
{
    public function getToken(Request $request)
    {
        if(! $request->session()->has('auth')){
            return redirect(route('login'));
        }

        $request->session()->reflash();

        return view('auth.token');
    }

    public function postToken(Request $request)
    {
        if(! $request->session()->has('auth')){
            return redirect(route('login'));
        }

        $request->validate([
            'token'=>'required',
        ]);

        $user = User::findOrFail($request->session()->get('auth.user_id'));
        $status = ActiveCode::verifyCode($request->token , $user);

        if(!$status){
            alert()->error('کد وارد شده صحیح نیست!');
            return redirect(route('login'));
        }

        if(auth()->loginUsingId($user->id,$request->session()->get('auth.remember'))){
            $user->notify(new LoginToWebsite());
            $user->activeCode()->delete();
            alert()->success('ورود شما موفقیت امیز بود');
            return redirect('/');
        }

        return redirect(route('login'));

    }
}
