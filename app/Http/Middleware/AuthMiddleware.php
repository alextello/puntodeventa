<?php

namespace PuntoVenta\Http\Middleware;

use Closure;
use Sentinel;

class AuthMiddleware
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
          if ($user = Sentinel::getUser())
          {
          if ($user->inRole('administrator'))
          {
            return $next($request);
          }
          else{
            return redirect('/');
          }
        }
      else {
        return redirect('/');
      }

    }
}
