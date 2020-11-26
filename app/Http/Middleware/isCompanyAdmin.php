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
                // $this->redirectTo = '/home';
                // return $this->redirectTo;
                //     break;
                return view('home');
                case 4:
                    //     $this->redirectTo = '/studentadvisor';
                    // return $this->redirectTo;
                    return view('studentAdvisor.index');
                    break;
                case 3:
                    return view('Admin.index');
                    break;
                case 5:
                    //     $this->redirectTo = '/studentsupervisor';
                    // return $this->redirectTo;
                    return view('studentSupervisor.index');
                    break;
                case 6:
                    // $this->redirectTo = '/student';
                    // return $this->redirectTo;
                    return view('StudentsHome.index');
                    break;
                case 1:
                    // $this->redirectTo = '/superAdmin';
                    // return $this->redirectTo;
                    return view('superAdmin.index');
                    break;
                default:
                    $this->redirectTo = '/login';
                    return $this->redirectTo;
            }
             
             
             
        }
    }
}
