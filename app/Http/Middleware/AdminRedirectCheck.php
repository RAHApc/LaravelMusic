<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class AdminRedirectCheck
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
//        if(auth()->check()) {
            if (auth()->user() && auth()->user()->types == User::TYPE_ADMIN) {
                return $next($request);
            } else {
                return redirect('/');
            }
        }
//    }
}
