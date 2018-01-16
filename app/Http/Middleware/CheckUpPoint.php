<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Admin;
use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;

class CheckUpPoint
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
        if (Auth::guard('admin')->check() || Auth::guard('teacher')->check())
        {
            return $next($request);
        }
        else {
            return redirect('admin/login');
        }
    }
}
