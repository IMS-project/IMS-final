<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Flash;
class isCompanyAdmin
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
        if(Auth::user()->role == 3){
            return $next($request);
        }
        else {
            
            switch(Auth::user()->role){
                case 2:
                    return redirect()->route('home');
                
                    break;
                case 4:
                    return redirect()->route('studentadvisor');
                        
                    break;
                // case 3:
                //     return redirect()->route('applicants');
                //     break;
                case 5:
                    return redirect()->route('studentsupervisor');
                    break;
                case 6:
                    return redirect()->route('offer_company');
                    
                    break;
                case 1:
                    return redirect()->route('superAdmin');
            
                    break;
                default:
                return redirect()->route('login');
            }
             
        }
    }
}
