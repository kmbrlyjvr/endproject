<?php

namespace App\Http\Middleware;

use Closure;

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
        if ($request->user()->user_group != 1){
            throw new \Illuminate\Auth\Access\AuthorizationException('You are not an Admin!');
        }

        return $next($request);
    }
}
