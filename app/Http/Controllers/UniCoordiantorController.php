<?php

namespace App\Http\Controllers\Controller;

use App\UniCoordiantor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Role;
use App\User;
use App\University;

class UniCoordiantorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role =Role::orderBy('name')->get();
        $university = University::orderBy('created_at')->get();
        return view('universities.coordinator.create')->with('roles',$role)->with('university',$university);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('universities.coordinator.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user )
    {
        $coordinator = new UniCoordiantor;
        $user->name = $request->name;
        $user->sex = $request->sex;
        $user->phone = $request->phone;
        $user->role = $request->role;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        // Hash::make($data['password']),
        $user->save();
        $id = $user->id;
        $coordinator->user_id = $id;
        $coordinator->university_id = $request->university;
        $coordinator->save();
        return redirect(route('universities.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UniCoordiantor  $uniCoordiantor
     * @return \Illuminate\Http\Response
     */
    public function show(UniCoordiantor $uniCoordiantor)
    {
        $uniCoordiantor = UniCoordiantor::all();
        return redirect(route('universities.coordinator.show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UniCoordiantor  $uniCoordiantor
     * @return \Illuminate\Http\Response
     */
    public function edit(UniCoordiantor $uniCoordiantor,$id)
    {
        $uniCoordiantor = UniCoordiantor::find($id);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UniCoordiantor  $uniCoordiantor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UniCoordiantor $uniCoordiantor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UniCoordiantor  $uniCoordiantor
     * @return \Illuminate\Http\Response
     */
    public function destroy(UniCoordiantor $uniCoordiantor)
    {
        //
    }
}
