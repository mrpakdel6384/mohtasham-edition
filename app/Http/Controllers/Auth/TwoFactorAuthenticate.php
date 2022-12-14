<?php


namespace App\Http\Controllers\Auth;


use App\ActiveCode;
use App\Notifications\ActiveCode as ActiveCodeNotification;
use App\Notifications\LoginToWebsite as LoginToWebsiteNotification;
use Illuminate\Http\Request;

trait TwoFactorAuthenticate
{
    public function loggedIn(Request $request , $user)
    {
        if($user->hasTwoFactorAuthenticatedEnabled()){
            return $this->logoutAndRedirectToTokenEntry($request , $user);
        }

        $user->notify(new LoginToWebsiteNotification());
        return false;

    }


    protected function logoutAndRedirectToTokenEntry(Request $request , $user){

        auth()->logout();
        $request->session()->flash('auth' , [
            'user_id'=>$user->id,
            'using_sms'=>false,
            'remember'=>$request->has('remember'),
        ]);
        if($user->hasSmsTwoFactorAuthenticationEnabled()){
            $code = ActiveCode::generateCode($user);

            $user->notify(new ActiveCodeNotification($code , $user->phone));

            $request->session()->push('auth.using_sms' , true);
        }
        return redirect(route('two_factor_auth.token'));
    }

}
