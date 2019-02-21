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
//    public function handle($request, Closure $next)
//    {
//        if(Auth::check() && Auth::user()->isAdmin() == 0){
//            return $next($request);
//        }
//        return redirect('/home');
//    }

    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check() && Auth::user()->isAdmin() == 0) {
            return $next($request);
        }
        else
        return redirect('/home')->withErrors(['errors'=>'You do not have permission to view this page']);
    }
}
