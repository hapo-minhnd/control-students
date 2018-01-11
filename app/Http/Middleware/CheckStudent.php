<?php

namespace App\Http\Middleware;

use App\Models\Student;
use Closure;
use Auth;

class CheckStudent
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
        if (Auth::guard('student')->check())
        {
            return $next($request);
        }
        else {
            return redirect('student/login');
        }
    }
}
