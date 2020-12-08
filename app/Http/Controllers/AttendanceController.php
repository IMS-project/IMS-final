<?php

namespace App\Http\Controllers;

use App\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Supervisor;
use Flash;
use Carbon\Carbon;
class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function present($id){
        $user = Supervisor::where('user_id',Auth::id())->first();
        $attendance = new Attendance;
        $attendance->supervisor_id = $user->id;
        $attendance->student_id =$id;
        $attendance->status = "Present";
        $attendance->date= Carbon::now()->toDateString();
        $attendance->save();
        Flash::success('Submitted successfully');

        $status = Attendance::all();
        return view('Supervisor.status')->with('attendance',$status);
    }

    public function absent($id){
        $user = Supervisor::where('user_id',Auth::id())->first();
        $attendance = new Attendance;
        $attendance->supervisor_id = $user->id;
        $attendance->student_id =$id;
        $attendance->status = "Absent";
        $attendance->date= Carbon::now()->toDateString();
        $attendance->save();
        Flash::success('Submitted successfully');
        return back();


    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function show(Attendance $attendance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendance $attendance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attendance $attendance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendance $attendance)
    {
        //
    }
}
