<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assignsupervisor;
use App\placement;
use App\Company;
use App\Supervisor;
use App\CompCoordinator;
use Illuminate\Support\Facades\Auth;
use Flash;
class AssignsupervisorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comp =CompCoordinator::where('user_id',Auth::id())->first();
        $super = Supervisor::where('company_id',$comp->company_id)->get();
        $placement =placement::all();
        // $company =Company::where('id',$placement->company_id);
        // $stcmid = placement::where('company_id',$super->company_id)->get();
        // dd($stcmid);
        return view('Assignsupervisor.index')->with('supervisor',$super)->with('placements',$placement);
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
        $input = $request->all();
        $input->supervisor_id =$id;
        $input['student_id']= $request->input('selected_values');
        Assignsupervisor::create($input);
        return back('assigned successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $super = Supervisor::find($id);
         $placement =placement::where('company_id',$super->company_id)->get();
         return view('Assignsupervisor.show')->with('placements',$placement)->with('id',$id);

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