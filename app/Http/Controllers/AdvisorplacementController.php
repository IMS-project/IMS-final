<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;
use App\Student;
use App\Studentplacement;
use App\Advisor;
use Flash;
use DB;
use App\UniCoordinator;
use Illuminate\Support\Facades\Auth;
class AdvisorplacementController extends Controller
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
        $students = DB::table('students')
                                    ->select(['university_id','department_id'])
                                    ->where('university_id', $unicor->university_id)
                                    ->groupBy('department_id')
                                    ->get()->toArray();
        $advisor = Advisor::where('university_id', $unicor->university_id)->where('department_id', $students[0]->department_id);
        dd($advisor);
        $placed = Studentplacement::select('company_id')->groupBy('company_id')->get()->toArray();
        $advisor->company_id =$placed;
        $advisor->save();
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
        $advisor = Advisor::where('university_id', $unicor->university_id);

        $students = Student::all()->where(['department_id',$advisor->department_id],['university_id',$advisor->university_id]);
        dd($students);
        return view('Advisorplacement.index')->with('advisors',$advisor);
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
