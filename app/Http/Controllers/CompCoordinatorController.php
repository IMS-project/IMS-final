<?php

namespace App\Http\Controllers;

use App\CompCoordinator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use flush;

use App\Role;
use App\User;
use App\Company;

class CompCoordinatorController extends Controller
{
    //
    public function index()
    {
        $roles =Role::orderBy('name')->get();
        $company = Company::orderBy('created_at')->get();
        return view('companies.coordinator.create')->with('role', $roles)
        ->with('company', $company);
    }

    public function create()
    {
        return view('companies.coordinator.create');
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
        Flash::success('saved successfully.');
        return redirect(route('companies.coordinator.index'));
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
