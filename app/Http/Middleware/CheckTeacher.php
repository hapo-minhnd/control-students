<?php

namespace App\Http\Middleware;

use App\Models\Teacher;
use Closure;
use Auth;

class CheckTeacher
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
        if (Auth::guard('teacher')->check())
        {
            return $next($request);
        }
        else {
            return redirect('teacher/login');
        }
    }
}
