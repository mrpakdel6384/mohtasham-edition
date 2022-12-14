<?php

namespace App\Http\Middleware;

use Closure;

class AdminAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if($request->user()->isSuperUser() || $request->user()->isStaffUser()){
            // if user is admin or staff access to admin panel
            return $next($request);
        }
        //if user isnot admin redirect to home
        return redirect('/');

    }
}
