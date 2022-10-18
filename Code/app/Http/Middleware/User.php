<?php

namespace App\Http\Middleware;

use Closure;

class User
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
        if (\Auth::user()->type == 'binusian' || \Auth::user()->type =='non-binusian') {
            return $next($request);
          }
            return redirect()->back();
    }
}
