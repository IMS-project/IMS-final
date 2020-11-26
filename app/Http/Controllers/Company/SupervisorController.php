<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Flash;

use App\Role;
 use App\User;
 use App\Company;                                                    
 use App\Supervisor;
 use App\CompCoordinator;
use App\Companydepartment;
class SupervisorController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('company');
        $this->middleware('prevent-back-history');
    }

    public function index()
    {
        $supervisor = Supervisor::all();
        return view('companies.supervisor.index')
        ->with('supervisors', $supervisor);
    }
    public function create()
    {
        // $role = Role::orderBy('name')->get();
        // $company = Company::orderBy('created_at')->get();
        // $department = Department::orderBy('created_at')->get();
        $department =Companydepartment::orderBy('created_at')->get();
        return view('companies.supervisor.create')->with('departments',$department);

    }

    public function store(Request $request, User $user)
    {
        

        $data= request()->validate([
            'first_name' =>'required|regex:/^[\pL\s\-]+$/u',
            'last_name' => 'required|regex:/^[\pL\s\-]+$/u',
            'sex' => 'required',
            'phone' => 'required|min:10|numeric',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            
            ]);


        User::create($data);
        $supervisor = new Supervisor;
        $comid = CompCoordinator::all()->first();

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->sex = $request->sex;
        $user->phone = $request->phone;
        $user->role =5;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        $id = $user->id;
        $supervisor->user_id = $id;
        $supervisor->company_id = $comid->company_id;
        $supervisor->department_id = $request->department;
        $supervisor->save();
        Flash::success(' saved successfully');
        $supervisor = Supervisor::all(); 
        return redirect()->route('Supervisor.index')->with('supervisors', $supervisor);
    
    }

    public function show($id)
    {
        //
        $supervisor = Supervisor::find($id);
        //dd($supervisor)
        $userid = $supervisor->user_id;
        $comid = $supervisor->company_id;

        $user = User::find( $userid);
         $company = Company::find($comid);
        
         return view('companies.supervisor.show')->with('supervisors', $supervisor)
                                                 ->with('users', $user)
                                                  ->with('company', $company);

    }

    public function edit($id)
    {
        //
        $supervisor = Supervisor::find($id);
          //dd($supervisor)
          $userid = $supervisor->user_id;
          $comid = $supervisor->company_id;
        //   $rolid = $supervisor->role_id;

          $user = User::find($userid);
          $company = Company::find($comid);
        //   $companys = Company::all();
          // $roles = Role::find($rolid);
          // $rolled = Role::all();
 return view('companies.supervisor.edit')->with('users', $user)
                                         ->with('supervisors', $supervisor)
                                         ->with('company', $company);
                                      
          
    }
    public function update(Request $request, $id)
    {
        
        $comid = CompCoordinator::all()->first();

        $supervisor = Supervisor::find($id);
        $user = User::find($id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->sex = $request->sex;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->save();

        $id = $user->id;
        $supervisor->user_id = $id;
        $supervisor->company_id = $comid->company_id;
        $supervisor->save();
        Flash::success(' updated successfully');
        $supervisor = Supervisor::all();

        return view('companies.supervisor.index')->with('supervisors', $supervisor);
    }

    public function destroy($id)
    {
        //
        $supervisor = Supervisor::find($id);
        $supervisor->delete();
        return redirect()->route('Supervisor.index');

    }
}
