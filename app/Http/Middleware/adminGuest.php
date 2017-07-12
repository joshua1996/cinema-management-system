<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class adminGuest
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
      //    if (Auth::guard()->check()) {
      //     return redirect('/home');
      // }

   
      if (Auth::guard('admin')->check()) {
          return redirect('/admin/movie');
      }
        return $next($request);
    }
}
