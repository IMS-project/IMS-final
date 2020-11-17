<?php

namespace App\Http\Controllers\University;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Role;
 use App\User;
use App\University;
use App\Department;
use App\Advisor;
use App\UniCoordinator;
use Flash;

class AdvisorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
       // $role = Role::orderBy('name')->get();
       // $university = University::orderBy('created_at')->get();

        $advisor = Advisor::all();
        return view('universities.advisor.index')
        ->with('advisors', $advisor);
    }
    public function create()
    {
        //
        $role = Role::orderBy('name')->get();
        $department = Department::orderBy('created_at')->get();
        return view('universities.advisor.create')->with('roles',$role)
                                                  ->with('departments' ,$department);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
        //
        $advisor = new Advisor;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->sex = $request->sex;
        $user->phone = $request->phone;
        $user->role = 4;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);  // Hash::make($data['password']),
        $user->save();
        
        $id = $user->id;
        $unid = UniCoordinator::all()->first();
        $advisor->user_id = $id;
        $advisor->university_id = $unid->university_id;
        $advisor->department_id = $request->department;
        $advisor->save();
        Flash::success(' saved successfully.');
        $advisor = Advisor::all();
        return redirect()->route('Advisor.index')->with('advisors', $advisor);

    }

    public function show($id)
    {   $advisor = Advisor::find($id);
        //dd($advisor);
        $userid = $advisor->user_id;
        $depid = $advisor->department_id;
        
         $user = User::find($userid);
         $department= Department::find($depid);
         //dd($role);
        return view('universities.advisor.show')->with('users', $user)
                                                ->with('advisors',$advisor)
                                                ->with('departments',$department);

    }

    public function edit($id)
    {
        $advisor = Advisor::find($id);
        //dd($advisor);
        $userid = $advisor->user_id;
         $unid=$advisor->university_id;
          $rolid=$advisor->role_id;
        
        $user = User::find($userid);
        $university = University::find($unid);
        $universitys = University::all();
        // $roles = Role::find($rolid);
        // $rolled = Role::all();
        return view('universities.advisor.edit')->with('users', $user)
                                            ->with('advisors',$advisor)
                                            ->with('university',$university)
                                             ->with('universitys',$universitys);
                             //->with('roles', $roles)->with('rolled', $rolled);

}
     
    public function update(Request $request, $id)
    {
        //
        $advisor = Advisor::find($id);
        $user = User::find($id);
        
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->save();

        $id = $user->id;
        $advisor->user_id = $id;
        $advisor->university_id = $request->university;
        $advisor->save();
        Flash::success(' updated successfully');
        $advisor = Advisor::all();
       
        return view('universities.advisor.index')->with('advisors', $advisor); 

    }

    public function destroy($id)
    {
        //
        $advisor = Advisor::find($id);
        $advisor->delete();
        return redirect(route('Advisor.index'));

    }
}
