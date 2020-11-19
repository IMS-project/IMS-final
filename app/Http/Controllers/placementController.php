<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;
use App\Student;
use App\placement;
use Flash;
use App\Companydepartment;
use Illuminate\Support\Facades\Auth;
class placementController extends Controller
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
        $department =Companydepartment::all()->first();
        //  dd($department->id);
        $student = Student::where('user_id', Auth::id())->first();
        $applicant =Applicant::all()->where('student_id',$student->id);
        // $stid = Applicant::all()->where('student_id',$applicant->student_id);
        //dd($applicant);
        return view('placements.index')->with('applicants',$applicant);
        
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
    public function store(Request $request,$id,$id2)
    {
        $placement = new placement();
        $student = Student::where('user_id', Auth::id())->first();
        $placement->student_id = $student->id;
        $placement->company_id = $id;
        $placement->department_id = $id2;
        $placement->status = "accepted";

         $checkid = $student->id;
        $compid = Placement::all()->where('company_id',$id);
        $count=0;
        foreach($compid as $row){
            $try = $row->student_id;
            if($try==$checkid){
                $count=1;
            }
        }
        if($count==1)
        {
            Flash::warning('You have Already getplaced . . .');
            // return view('placements.index')    ;
        } 
        else
        {
            $placement->save();
            Flash::success('placement successful.');
        }
        // here to remove applicants
        $appid = $student->id;
          $dd =  Applicant::all()->where('student_id',$appid);
          foreach ($dd as $d) {
            $d->delete();
          }
          

        $student = Student::where('user_id', Auth::id())->first();
        $applicant =Applicant::all()->where('student_id',$student->id);
        return view('placements.index')->with('applicants',$applicant);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
