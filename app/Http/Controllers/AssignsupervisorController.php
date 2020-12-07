<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assignsupervisor;
use App\Studentplacement;
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
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('company');
        // $this->middleware('prevent-back-history');
        
    }
    public function index()
    {
        $comp =CompCoordinator::where('user_id',Auth::id())->first();
        $super = Supervisor::where('company_id',$comp->company_id)->get();
        $placement = Studentplacement::all();
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
    public function store(Request $request){
            
        // dd($request->student);
        foreach($request->student as $stud){
            $assignsuper = new Assignsupervisor();
            // dd($stud);
            $assignsuper->supervisor_id = $request->supervisor;
            $assignsuper->studentplacement_id = $request->student;
            $assignsuper->save();
        }
        
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
         $placement =Studentplacement::where('company_id',$super->company_id)->get();
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
