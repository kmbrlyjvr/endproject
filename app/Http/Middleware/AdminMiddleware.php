<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth; 

class AdminMiddleware
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
        /*if(Auth::user()->user_group == 1)
        {
            return $next($request);

        } else {
            return redirect('/admin');
        }*/
        /*
        if (Auth::check() && Auth::user()->user_group == 1) {
            return $next($request);
        }
        abort(404);*/
    }
}
