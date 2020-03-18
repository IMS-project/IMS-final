<?php

namespace App\Http\Controllers\University;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Role;
use App\User;
use App\University;
use App\UniCoordiantor;
class UniCoordinatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role =Role::orderBy('name')->get();
        //$university = University::orderBy('created_at')->get();
        //
        $listuniId = UniCoordiantor::all();
        //$arr[]= new arr['universityname'];
        return view('universities.coordinator.index')->with('roles',$role)->with('universityco',$listuniId);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  $role =Role::orderBy('name')->get();
      $university = University::orderBy('created_at')->get();
        return view('universities.coordinator.create')->with('roles',$role)->with('university',$university);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $uniCoordiantor = UniCoordiantor::all()->where('id',$id);
        //$unicoo = $uniCoordiantor;
        return view('universities.coordinator.show')->with('unicoordinator',$uniCoordiantor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $uniCoordiantor = UniCoordiantor::all()->where('id',$id);
        return view('universities.coordinator.edit')->with('unicoordinator',$uniCoordiantor);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $this->validate($request,['name'=>'required',
        // 'address'=>'required']);
        $coordinator = UniCoordiantor::find($id);
        $user = User::find($id);
        $user->name = $request->name;
        $user->sex = $request->sex;
        $user->phone = $request->phone;
        $user->role = $request->role;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $id = $user->id;
        $coordinator->user_id = $id;
        $coordinator->university_id = $request->university;
        $coordinator->save();
        return redirect(route('universities.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coordinator = UniCoordiantor::find($id);
        $coordinator->delete();
        return redirect(route('universities.index'));


    }
}
