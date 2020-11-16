<?php

namespace App\Http\Controllers\University;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User; 
use App\Department;
use App\University;
use Flash;
use App\UniCoordinator;
use Illuminate\Support\Facades\Hash;
class DepartmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $department = Department::all();
        // dd($department);
        return view('departments.index')->with('departments',$department);
    }
    public function create()
    { 
        $university = University::orderBy('created_at','desc')->get();
       return view('departments.create')->with('university',$university); 
    }
    public function store(Request $request)
    {
        
        $department = new Department;
        $unid = UniCoordinator::where('user_id',Auth::id())->first();
        // $student = Student::where('user_id', Auth::id())->first();
        $department->department_name = $request->name;
        $department->university_id = $unid->university_id;
        $department->save();
        Flash::success('department saved successfully.');
        return redirect(route('departments.index'))->with('departments', $department );

    }
    public function show($id)
    {
        $department = Department::find($id);
        //dd($advisor);
        // $userid=  $department->user_id;
        // $unid=   $department->university_id;

        //  $user = User::find($userid);
        //  $university = University::find($unid);
        return view('departments.show')->with('departments', $department);
                                       
    }

    public function edit($id)
    {
        //
        $department =Department::find($id);
        //dd($advisor);
        $userid=  $department->user_id;
        $unid=   $department->university_id;

         $user = User::find($userid);
         $university = University::find($unid);
        //  $universitys = University::all();
        return view('departments.edit')->with('user', $user)
                                       ->with('departments', $department);
                                       

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
        $unid = UniCoordinator::all()->first();
        $department =Department::find($id);
      
        // $userid=  $department->user_id;
        // $unid=   $department->university_id;
        // $user = User::find($userid);
        $department->department_name = $request->department_name;
        $department->university_id = $unid->university_id;
        $department->save();
        Flash::success('department saved successfully.');
        $department =Department::all();
        return redirect(route('departments.index'))->with('departments', $department );
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
        $department =Department::find($id);
        $department->delete();
        return redirect(route('departments.index'));
    }
}
