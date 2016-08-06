<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
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
        //if user is login
        if(Auth::check()){
            if(Auth::user()->isAdmin()){
                //everything when true go to next request of the application
                return $next($request);
            }
        }

        return redirect('/');

    }
}
