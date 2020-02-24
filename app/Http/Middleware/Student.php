<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class Student
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
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->role == 1) {
            return redirect()->route('admin');
        }

        if (Auth::user()->role == 5) {
            return redirect()->route('supervisor');
        }

        if (Auth::user()->role == 6) {
            return $next($request);
        }

        if (Auth::user()->role == 4) {
            return redirect()->route('advisor');
        }

        if (Auth::user()->role == 3) {
            return redirect()->route('Company');
        }

        if (Auth::user()->role == 2) {
            return redirect()->route('Universitycoordinator');
        }
    }

}
