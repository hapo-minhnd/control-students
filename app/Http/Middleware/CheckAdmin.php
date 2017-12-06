<?php

namespace App\Http\Middleware;

use App\Models\Admin;
use Closure;
use Auth;

class CheckAdmin
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
        if (Auth::guard('admin')->check())
        {
            return $next($request);
        }
         else {
             return redirect('login/admin');
         }
    }
}
