<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;
use App\Student;
use App\User;
use App\Department;
use App\University;
class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applicant =Applicant::all()->where('status', 'pending');
        return view('companyAdmin.index')->with('applicants',$applicant);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        $userid =  $student->user_id;
        $unid = $student->university_id;
        $depid = $student->department_id;
        
         $department = Department::find( $depid);     
         $user = User::find($userid);
         $university = University::find($unid);
         //dd($role);
        return view('companyAdmin.index')->with('users', $user)
        ->with('students',$student)
        ->with('university',$university)
        ->with('department', $department);
    }

 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
    public function approve(Request $request, $id)
    {
        // $application = Application::where('id', '=', e($id))->first();
        $applicant = Applicant::where('id','=',e($id))->first();
    
    if($applicant)
    {
        $applicant->status = "approved";
        $applicant->save();
        $applicant =Applicant::all()->where('status', 'pending');
        return view('companyAdmin.index')->with('applicants',$applicant);
        //return a view or whatever you want tto do after
    }
    }
    public function reject(Request $request, $id)
    {
        // $application = Application::where('id', '=', e($id))->first();
        $applicant = Applicant::where('id','=',e($id))->first();
    
    if($applicant)
    {
        $applicant->status = "rejected";
        $applicant->save();
        $applicant =Applicant::all()->where('status', 'pending');
        return view('companyAdmin.index')->with('applicants',$applicant);
        //return a view or whatever you want tto do after
    }
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
