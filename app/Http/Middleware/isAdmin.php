<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;
use Flash;
class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // protected $redirectTo;
    public function handle($request, Closure $next)
    {
        if(Auth::user()->role == 1){
            return $next($request);
        }
        else {
            
            Flash::warning('Access denied');
            return back();
               
            
            }
             
        
    }
}
