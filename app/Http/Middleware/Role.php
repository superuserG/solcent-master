<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
      // IF ROLE SAME AS PARAMETER
      if (Auth::user()->role==$role)
      {
        return $next($request);
      }
      else
      {
        //IF SUPER ADMIN
        if (Auth::user()->role=="3" && ($role=="3" || $role=="2" || $role=="1"))
        {
          return $next($request);
        }
        //IF ADMIN
        else if (Auth::user()->role=="2" && ($role=="2" || $role=="1"))
        {
          return $next($request);
        }
        else
        {
          return response()->view('errors.403');
        }
      }
    }
}
