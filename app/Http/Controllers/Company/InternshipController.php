<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\User; 
use App\Internship;
use App\Department;
use App\Company;
use Flash;
use App\Placement;
use App\Student;
class InternshipController extends Controller
{
    public function index()
    
    {  
        $student = Student::where('user_id', Auth::id())->first();
        $applicant =Placement::all()->where('student_id',$student->id);
        return view('companies.internships.index')->with('posts',$applicant);

        // $student = Student::where('user_id', Auth::id())->first();
        // $placement = Placement::all()->where('student_id',$student->id);
        // // dd($placement);
        // return view('companies.internships.index')->with('posts',$placement);
    }  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  $company = Company::orderBy('created_at')->get();
      
        return view('companies.internships.create')->with('company',$company);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $intern = new Internship;
        $intern->company_id = $request->company;
        $intern->work_area = $request->work_area;
        $intern->offer_capacity = $request->offer_capacity;
        $intern->mini_grade = $request->grade;
        $intern->other_skills = $request->skills;
        $intern->save();
        return view('companies.internships.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function show(Internship $internship)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function edit(Internship $internship)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Internship $internship)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function destroy(Internship $internship)
    {
        //
    }
}
