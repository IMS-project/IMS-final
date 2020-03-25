<?php

namespace App\Http\Controllers\University;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User; 
use App\Department;
use App\University;
use Flash;
class DepartmentController extends Controller
{
    public function index()
    {
        $department = Department::all();
        return view('departments.index')->with('depar',$department);
    }
    public function create()
    { 
        $university = University::orderBy('created_at','desc')->get();
       return view('departments.create')->with('university',$university); 
    }
    public function store(Request $request)
    {
        
        $department = new Department;

        $department->department_name = $request->name;
        $department->university_id = $request->university;
        $department->save();
        Flash::success('department saved successfully.');
        return redirect(route('departments.index'))->with('dep', $department );

    }
    public function show($id)
    {
        $dept =Department::find($id);
        //dd($advisor);
        $userid= $dept->user_id;
        $unid=  $dept->university_id;

         $user = User::find($userid);
         $university = University::find($unid);
        return view('universities.coordinator.show')->with('user', $user)->with('depart',$dept)->with('university',$university);
        


    }

    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
