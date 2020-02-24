<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo;
    public function redirectTo()
    {
        switch(Auth::user()->role){
            case 2:
            $this->redirectTo = '/university';
            return $this->redirectTo;
                break;
            case 4:
                    $this->redirectTo = '/advisor';
                return $this->redirectTo;
                break;
            case 3:
                $this->redirectTo = '/company';
                return $this->redirectTo;
                break;
            case 5:
                    $this->redirectTo = '/supervisor';
                return $this->redirectTo;
                break;
            case 6:
                $this->redirectTo = '/student';
                return $this->redirectTo;
                break;
            case 1:
                $this->redirectTo = '/admin';
                return $this->redirectTo;
                break;
            default:
                $this->redirectTo = '/login';
                return $this->redirectTo;
        }
         
        // return $next($request);
    } 
    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
    }
}
    
    