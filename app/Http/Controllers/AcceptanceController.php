<?php

namespace App\Http\Controllers;
use App\Applicant;
use Illuminate\Http\Request;
use App\Company;
use App\Student;
use App\User;
use App\Studentplacement;
use DB;
use Flash;
use Illuminate\Support\Facades\Auth;

class AcceptanceController extends Controller
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
        $student = Student::where('user_id', Auth::id())->first();
        $accept = Studentplacement::all()->where('student_id',$student->id);
        // $stid = Applicant::all()->where('student_id',$applicant->student_id);
        // dd($accept);
        return view('Acceptance.index')->with('applicants',$accept);
        // $student = Student::where('user_id', Auth::id())->first();
        // $accept = placement::all();
        // return view('Acceptance.index')->with('placed',$accept);
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
    public function store(Request $request,$id)
    {
        $placement = new Placement();
        
        $student = Student::where('user_id', Auth::id())->first();
        $placement->student_id = $student->id;
        $placement->company_id = $id;
        $stid = Applicant::all()->where('student_id',$applicant->student_id);
    $count = 0 ;
    foreach($stid as $row)
        {
            $try = $row->company_id;
            if($try==$id)
            {
                $count = 1;
            } 
        }
        if($count==1)
        {
            Flash::warning('You have Already Applied . . .');
            return view('studentpage.index')    ;
        } 
        else
        {
            $applicant->save();
            Flash::success('Application successful.');
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
