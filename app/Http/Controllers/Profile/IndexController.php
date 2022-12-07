<?php

namespace App\Http\Controllers\Profile;

use App\ActiveCode;
use App\Http\Controllers\Controller;
use App\Notifications\ActiveCode as ActiveCodeNotification;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class IndexController extends Controller
{
    public function index(){
        return view('profile.index');
    }

    /**
     * Follow the user.
     *
     * @param $profileId
     *
     */
    public function followUser(int $profileId)
    {
        $user = User::find($profileId);
        if(! $user) {

            return redirect()->back()->with('error', 'User does not exist.');
        }

        $user->followers()->attach(auth()->user()->id);
        return redirect()->back()->with('success', 'Successfully followed the user.');
    }

    /**
     * Follow the user.
     *
     * @param $profileId
     *
     */
    public function unFollowUser(int $profileId)
    {
        $user = User::find($profileId);
        if(! $user) {

            return redirect()->back()->with('error', 'User does not exist.');
        }
        $user->followers()->detach(auth()->user()->id);
        return redirect()->back()->with('success', 'Successfully unfollowed the user.');
    }

}
