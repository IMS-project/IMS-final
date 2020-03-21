<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use flush;

use App\Role;
use App\User;
use App\Company;
use App\CompCoordinator;

class CompCoordinatorController extends Controller
{
    //
    public function index()
    {
        $roles =Role::orderBy('name')->get();
        $company = Company::orderBy('created_at')->get();
        $compcordinator = CompCoordinator::all();
        
        return view('companies.coordinator.index')->with('role', $roles)->with('company', $company);
    }

    public function create()
    {

      $role =Role::orderBy('name')->get(); 
       $university = University::orderBy('created_at')->get();
        return view('companies.coordinator.create')->with('roles',$role)->with('universities',$university);
    }
       
    public function store(Request $request, User $user )
    {
        $data=request()->validate([
            "name"=>"required",
            "email"=>"required|email",
            "password"=>"required",
            "sex"=>"required",
            "phone"=>"required",
        ]);
        User::create($data);

        $coordinator = new CompCoordinator;
        $user->name = $request->name;
        $user->sex = $request->sex;
        $user->phone = $request->phone;
        $user->role = $request->role;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        // Hash::make($data['password']),
        $user->save(); //then

        $id = $user->id;
        $coordinator->user_id = $id;
        $coordinator->company_id = $request->company;
        $coordinator->save();
        //Flash::success('saved successfully.');
        return redirect(route('companies.index'));
    }

    public function show(UniCoordiantor $uniCoordiantor)
    {
        //
    }
    public function edit(UniCoordiantor $uniCoordiantor)
    {
        //
    }

    public function update(Request $request, UniCoordiantor $uniCoordiantor)
    {
        //
    }
    public function destroy(UniCoordiantor $uniCoordiantor)
    {
        //
    }


}
