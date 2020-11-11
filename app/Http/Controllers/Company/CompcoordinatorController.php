<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Flash;

use App\Role;
use App\User;
use App\Company;
use App\CompCoordinator;
use App\University;

class CompCoordinatorController extends Controller
{
    //
    public function index()
    {
        //$roles =Role::orderBy('name')->get();
        //$company = Company::orderBy('created_at')->get();
        $compcordinator = CompCoordinator::all();
        return view('companies.coordinator.index')->with('compcord',   $compcordinator);
    }

    public function create()
    {
      $role =Role::orderBy('name')->get(); 
       $company = Company::orderBy('created_at')->get();
        return view('companies.coordinator.create')->with('roles',$role)->with('companys',$company);
    }
       
    public function store(Request $request, User $user )
    {
    
        $coordinator = new CompCoordinator;

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->sex = $request->sex;
        $user->phone = $request->phone;
        $user->role = 3;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        // Hash::make($data['password']),
        $user->save(); //then

        $id = $user->id;
        $coordinator->user_id = $id;
        $coordinator->company_id = $request->company;
        $coordinator->save();
        Flash::success('saved successfully.');
        return Redirect()->route('companies.index');
        // $compcordinator = CompCoordinator::all();
        // return redirect()->route('CompCoordinator.index')->with('coordinators' , $coordinator);
    }
    public function show($id)
    {
        $com = CompCoordinator::find($id);
        //dd($advisor);
        $userid= $com->user_id;
        $unid=  $com->company_id;

         $user = User::find($userid);
         $company = Company::find($unid);
   
         //dd($role);
        return view('companies.coordinator.show')->with('user', $user)->with('coordinator',$com)->with('company',$company);
    }
        public function edit($id)
            {
                $compcoordiantor = CompCoordinator::find($id);
                //dd();
                $userid = $compcoordiantor->user_id;
                $unid = $compcoordiantor->company_id;
                // $rolid= $compcoordiantor->role_id;
            $user = User::find($userid);

            $company = Company::find($unid);
            $companys = Company::all();
                //  $roles = Role::find($rolid);
                //  $rolled = Role::all();
                return view('companies.coordinator.edit')->with('coordinators',$compcoordiantor)
                                                            ->with('users', $user)
                                                            ->with('company',  $company)
                                                            ->with('companies ', $companys );
                                                            
                                                         
            }

    public function update(Request $request,$id)
    {
        //
        $coordiantor = CompCoordinator::find($id);
        $user = User::find($id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->sex = $request->sex;
        $user->phone = $request->phone;
        $user->role = $request->role;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $id = $user->id;
        $coordinator->user_id = $id;
        $coordinator->company_id = $request->company ;
        $coordinator->save();
        return redirect()->route('CompCoordinator.index')->with('success,update done!');
    }
    public function destroy(UniCoordiantor $uniCoordiantor)
    {
        //
        $coordiantor = CompCoordinator::find($id);
        $coordinator->delete();
        return redirect(route('CompCoordinator.index'));

    }


}
