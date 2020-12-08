<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;
use App\Student;
use App\Studentplacement;
use App\Advisor;
use App\Company;
use Flash;
use DB;
use App\UniCoordinator;
use Illuminate\Support\Facades\Auth;
class AssignadvisorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $unicor = UniCoordinator::where('user_id', Auth::id())->first();
        $advisors = Advisor::where('university_id', $unicor->university_id)->get();
        return view('Assignadvisor.index')->with('advisors',$advisors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        $advisor =Advisor::find($id);
        $addp = $advisor->department_id;
        $adui = $advisor->university_id;
        $company = Company::all();
        $student = Student::where('university_id',$adui)->where('department_id',$addp)->get();
        
        $count = 0;
        $countArray=[];
            foreach($company as $comp)
            {
                foreach($student as $row)
                {
                $compid = $comp->id;
                $place = Studentplacement::all()->where('student_id',$row->id)
                                        ->where('company_id',$comp->id)->count();
                $count = $count + $place;
                } 
                $countArray[$comp->id]=$count;
                $count=0;
            }
         $placement = Studentplacement::all();
        return view('Assignadvisor.view')->with('placementcount',$countArray)
                    ->with('id',$id)
                    ->with('placement',$placement)
                    ->with('students',$student)
                    ->with('company',$company);
                    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
