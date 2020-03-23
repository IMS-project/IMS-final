<?php

namespace App\Http\Controllers\University;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use App\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        $deparment = Department::all();
        return view('departments.index')->with('depar',$deparment);
    }
    public function create()
    {
       return view('departments.create');
        
    }
    public function store(Request $request)
    {
        // $this->validate($request,['name'=>'required',
        // 'university_id'=>'required']
        // );
        $deparment = new Department;
        $department->name = $request->input('name');
        $department->university_id = $request->input('university_id');
        $department->user_id = $request->input('user_id');

        Flash::success('University saved successfully.');
            return redirect(route('departments.index'));

    }
    public function show($id)
    {
        //


    }

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
