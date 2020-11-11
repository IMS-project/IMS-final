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
    
        $coordinator = UniCoordinator::all(); 
        // $userid = $uniooordinator->user_id;
        // $unid = $uniooordinator->university_id;

        return view('universities.coordinator.index')->with('cor', $coordinator );
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
        $user->role = 2;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        // Hash::make($data['password']),
        $user->save();
        
        $id = $user->id;
        $coordinator->user_id = $id;
        $coordinator->university_id = $request->university;
        $coordinator->save();
        Flash::success(' saved successfully.');
        $coordinator = UniCoordinator::all(); 
        return redirect()->route('UniCoordinator.index')->with('cor',$coordinator );
    }

    public function show($id)
    {
        $coordinator= UniCoordinator::find($id);
        
        //dd($advisor);
        $userid= $coordinator->user_id;
        $unid=  $coordinator->university_id;

         $user = User::find($userid);
         $university = University::find($unid);
      //  return view('universities.coordinator.show')->with('coordinators',$uniCoordinator);

         //dd($role);
        return view('universities.coordinator.show')->with('users', $user)
        ->with('cor',$coordinator)->with('university',$university);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coordiantor = UniCoordinator::find($id);
        //dd();
        $userid =  $coordiantor->user_id;
        $unid= $coordiantor->university_id;
          $rolid= $coordiantor->roles_id;

        $user = User::find($userid);
       $university = University::find($unid);
       $universitys = University::all();
        //  $roles = Role::find($rolid);
        //  $rolled = Role::all();
        return view('universities.coordinator.edit')->with('cor',$coordiantor)
                                                    ->with('users', $user)
                                                    ->with('university',$university)
                                                    ->with('universitys',$universitys);

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
        $user->role = 3;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $id = $user->id;
        $coordinator->user_id = $id;
        $coordinator->university_id = $request->university;
        $coordinator->save();
        Flash::success(' updated successfully');
        $coordinator = UniCoordinator::all(); 

        return view('universities.coordinator.index') ->with('cor', $coordinator);

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
