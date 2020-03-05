<?php

namespace App\Http\Controllers\Auth;
use App\User;
use App\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;
     protected $redirectTo = '/';
    //protected $redirectTo;
   /* protected $redirectTo = '/';
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
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            //'last_name' => ['required', 'string', 'max:255'],
            // 'phone' => ['required', 'string', 'max:255'],
            //'address' => ['required', 'string', 'max:255'],
            // 'sex' => ['required', 'string', 'max:255'],
            //'role' => 'required|exists:roles,id', // validating role
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'string', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {     
       $user = User::create([
            //'role' => $data['role'],
            //'first_name' => $data['first_name'],
            'name' => $data['name'],
            //'last_name' => $data['last_name'],
            //'address'=>$data['address'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        
          $user->roles()->attach($data['role']);
        return $user;
    }
    public function showRegistrationForm(){
        $roles = Role::orderBy('name')->get();
        return view('auth.register')->with('roles', $roles);
    } 

}