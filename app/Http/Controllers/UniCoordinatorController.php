<?php

namespace App\Http\Controllers;

use App\UniCoordinator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Flash;

use App\Role;
use App\User;
use App\University;

class UniCoordinatorController extends Controller
{
    //
    public function index()
    {
        $role =Role::orderBy('name')->get();
        $university = University::orderBy('created_at')->get();
        return view('universities.coordinator.create')->with('roles',$role)->with('university',$university);
    }

    public function create()
    {
        return view('universities.coordinator.create');
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

        $coordinator = new UniCoordinator;
        $user->name = $request->name;
        $user->sex = $request->sex;
        $user->phone = $request->phone; 
        $user->role = $request->role;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        // Hash::make($data['password']),
        $user->save();

        $data=request()->validate([
            "user_id"=>"required",
            "university_id"=>"required",
        ]);
        $id = $user->id;
        $coordinator->user_id = $id;
        $coordinator->university_id = $request->university;
        //$coordinator->save();
        //Flash::success('saved successfully.');
        return redirect(route('universities.index'));
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
