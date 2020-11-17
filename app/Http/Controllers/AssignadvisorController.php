<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;
use App\Student;
use App\placement;
use App\Advisor;
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
    public function index()
    { 
        // $users = User::select('name')->groupBy('name')->get()->toArray() ;
         
        // $advisorid = Advisor::find($id);
        // $advisorid->company_id =$id;

        // $advisor->save();

        $unicor = UniCoordinator::where('user_id', Auth::id())->first();
        // $students = DB::table('students')
        //                             ->select(['university_id','department_id'])
        //                             ->where('university_id', $unicor->university_id)
        //                             ->groupBy(['university_id','department_id'])
        //                             ->get()->toArray();
        //                             $advisor = Advisor::where('university_id', $students[0]->university_id)->where('department_id', $students[0]->department_id);
        // $placed = Placement::select('company_id')->groupBy('company_id')->get()->toArray();
        // $advisor->company_id =$placed;
        // $advisor->save(); 
        $advisors = Advisor::where('university_id', $unicor->university_id)->get();


        //  dd($students);
        return view('Assignadvisor.index')->with('advisors',$advisors);
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

        $unicor = UniCoordinator::where('user_id', Auth::id())->first();
        $advisor = Advisor::where('university_id', $unicor->university_id)
                            ->where('id',$id)->get();
        foreach($advisor as $row)
        {
            $depa = $row->department_id;
            $university = $row->university_id;
        } 
        $count =0;
        $placement = placement::all();
        foreach($placement as $row)
        {
            $copanyid=$row->company_id;
            if($placement2 = placement::find($copanyid)->student()
                        ->where('university_id',$university)
                        ->where('department_id',$depa)
                        ->get()){
                            $count = $count + 1;
                }
                {
                    $count = $count;
                }

         $companyId[] = $copanyid;
         $allcount[] = $count;
        }


        // $students = Student::all()->where('department_id',$depa)
        //                           ->where('university_id',$university);
        // foreach($students as $row)
        // {
        //     $stuid = $row->id;
        //     $placement = placement::all()->where('student_id',$stuid);
        //     foreach($placement as $pla)
        //     {
        //         $stuCompany = $pla->company_id;
        //         $stuId = $pla->student_id;
        //     }
            
        // } 
        return view('Assignadvisor.view')
                    ->with('company',$companyId)
                    ->with('count',$allcount);
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
