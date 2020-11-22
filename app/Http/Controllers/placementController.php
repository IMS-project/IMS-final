<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;
use App\Student;
use App\placement;
use Flash;
use App\Assignsupervisor;
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
    public function store(Request $request)
    {
        // dd($request->student);
        $count=0;
        foreach($request->student as $stud){

            $stid = Assignsupervisor::all()->where('placement_id',$stud)->first();
            if($stid){
                $count =1;
                }
                else{

                
                    $assignsuper = new Assignsupervisor();
                    // dd($stud);
                    $assignsuper->supervisor_id = $request->supervisor;
                    $assignsuper->placement_id = $stud;
                    $assignsuper->save();
                    // Flash::success('Assigned succesfully');
            }
        
        

        }
        if($count==1){

   
            Flash::warning('You have Already assigned . . .');
            return back();
            
         }
         else{
            Flash::success('You have assigned successfully. . .');
            return back();
         }
               
        
        
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
