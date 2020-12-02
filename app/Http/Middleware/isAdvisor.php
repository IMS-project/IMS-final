<?php

namespace App\Http\Middleware;
use Auth;
use App\User;
use Flash;
use Closure;

class isAdvisor
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
        if(Auth::user()->role == 4){
            return $next($request);
        }
        else {
            
            Flash::warning('Access denied');
            return back();
               
            
            }
             
        
    }
 }

