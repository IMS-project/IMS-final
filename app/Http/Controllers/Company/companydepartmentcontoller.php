<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Companydepartment;
use App\Company;
use App\CompCoordinator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Flash;
class companydepartmentcontoller extends Controller
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
        $this->middleware('prevent-back-history');
    }
    public function index()
    {
        $department = Companydepartment::all();
        // dd($department);
        return view('companydepartments.index')->with('departments',$department);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companydepartments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $department = new Companydepartment();
        $compcor = CompCoordinator::where('user_id',Auth::id())->first();
        $department->department_name = $request->name;
        $department->company_id = $compcor->company_id;
        $department->offer_capacity= request('offer_capacity');
        $department->mini_grade =request('mini_grade');
        $department->other_skills= request('other_skills');
        $department->save();
        Flash::success('department saved successfully.');
        return redirect(route('companydepartments.index'))->with('departments', $department );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $department =Companydepartment::find($id);
       return view('companydepartments.show')->with('departments',$department);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $department =Companydepartment::find($id);
        return view('companydepartments.edit')->with('departments',$departdepartment);
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
        $compcor = CompCoordinator::where('user_id', Auth::id())->first();
        $depcompid =$compcor->company_id;
        $department =Companydepartment::find($id);
        $department->company_id =$depcompid;
        $department->department_name = $request->department_name;
        $department->offer_capacity= request('offer_capacity');
        $department->mini_grade =request('mini_grade');
        $department->other_skills= request('other_skills');
        $department->save();
        Flash::success('department saved successfully.');
        $department = Companydepartment::all();
        // dd($department);
        return view('companydepartments.index')->with('departments',$department);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department =Companydepartment::find($id);
        $department->delete();
        return redirect(route('companydepartments.index'));
    }
}
