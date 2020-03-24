<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Role;
 use App\User;
 use App\Company;
 use App\Supervisor;

 use Flash;

class SupervisorController extends Controller
{
  
    public function index()
    {
        $supervisor = Supervisor::all();
        return view('companies.supervisor.index')->with('supervisors', $supervisor);
    }

    public function create()
    {
        $role = Role::orderBy('name')->get();
        $company = Company::orderBy('created_at')->get();
        return view('companies.supervisor.create')->with('roles', $role)->with('companies', $company);

    }

    public function store(Request $request, User $user)
    {
        //
        $supervisor = new Supervisor;
        $user->name = $request->name;
        $user->sex = $request->sex;
        $user->phone = $request->phone;
        $user->role = $request->role;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        $id = $user->id;
        $supervisor->user_id = $id;
        $supervisor->company_id = $request->company;
        $supervisor->save();
        Flash::success(' saved successfully');
        return redirect()->route('Supervisor.index');
    
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
          $rolid = $supervisor->role_id;

          $user = User::find($userid);
          $company = Company::find($comid);
          $companys = Company::all();
          // $roles = Role::find($rolid);
          // $rolled = Role::all();
          return view('companies.supervisor.edit')->with('users', $user)
          ->with('supervisors', $supervisor)
          ->with('company', $company)
          ->with('companys', $companys);
          
    }
    public function update(Request $request, $id)
    {
        //
        $supervisor = Supervisor::find($id);
        $user = User::find($id);
        $user->name = $request->name;
        $user->sex = $request->sex;
        $user->phone = $request->phone;
        $user->role = $request->role;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        $id = $user->id;
        $supervisor->user_id = $id;
        $supervisor->compny_id = $request->company;
        $supervisor->save();
        Flash::success(' updated successfully');
        return redirect()->route('Supervisor.index');
    }

    public function destroy($id)
    {
        //
        $supervisor = Superviser::find($id);
        $supervisor->delete();
        return redirect()->route('Supeervisor.index');

    }
}
