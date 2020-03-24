<?php

namespace App\Http\Controllers\University;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


use App\Role;
use App\User;
use App\University;
use App\UniCoordinator;

use Flash;

class UniCoordinatorController extends Controller
{
    public function index()
    {
        //$role = Role::orderBy('name')->get();
        //$university = University::orderBy('created_at')->get();
    
        $uniooordinator = UniCoordinator::all(); 
        // $userid = $uniooordinator->user_id;
        // $unid = $uniooordinator->university_id;

        return view('universities.coordinator.index')->with('cor', $uniooordinator );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  $role =Role::orderBy('name')->get(); 
       $university = University::orderBy('created_at')->get();
        return view('universities.coordinator.create')->with('roles',$role)->with('universities',$university);
    }

      public function store(Request $request, User $user )
    {
        $coordinator = new UniCoordinator;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
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
        Flash::success(' saved successfully.');
        $uniooordinator = UniCoordinator::all(); 
        return redirect()->route('UniCoordinator.index')->with('cor',$uniooordinator );
    }

    public function show($id)
    {
        $un = UniCoordinator::find($id);
        
        //dd($advisor);
        $userid= $un->user_id;
        $unid=  $un->university_id;

         $user = User::find($userid);
         $university = University::find($unid);
      //  return view('universities.coordinator.show')->with('coordinators',$uniCoordinator);

         //dd($role);
        return view('universities.coordinator.show')->with('user', $user)->with('coor',$un)->with('university',$university);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $uniCoordiantor = UniCoordinator::find($id);
        //dd();
        $userid =  $uniCoordiantor->user_id;
        $unid= $uniCoordiantor->university_id;
         $rolid= $uniCoordiantor->roles_id;
       $user = User::find($userid);

       $university = University::find($unid);
       $universitys = University::all();
        //  $roles = Role::find($rolid);
        //  $rolled = Role::all();
        return view('universities.coordinator.edit')->with('coordinators',$uniCoordiantor)
                                                    ->with('users', $user)
                                                    ->with('university',$university)->with('universitys',$universitys);

    }
    
    public function update(Request $request, $id)
    {
        // $this->validate($request,['name'=>'required',
        // 'address'=>'required']);
        $coordinator = UniCoordinator::find($id);
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
        $coordinator->university_id = $request->university;
        $coordinator->save();
        return redirect('UniCordinator.index')->with('success,update done!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coordinator = UniCoordinator::find($id);
        $coordinator->delete();
        return redirect(route('UniCoordinator.index'));


    }
}
