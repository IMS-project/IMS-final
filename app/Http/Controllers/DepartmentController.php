<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    //
    public function index()
    {
        $deparment = departments::all();
        return view('departments.index')->with('departments',$department);
    }
    public function create()
    {
       return view('departments.create');
        
    }
    public function store(Request $request)
    {
        $this->validate($request,['name'=>'required',
        'university_id'=>'required']
        );
        $deparment = new departments;
        $department->name = $request->input('name');
        $department->university_id = $request->input('univer');

    }
    public function show(Department $department)
    {
        //
    }
    public function edit(Department $department)
    {
        //
    }

    public function update(Request $request, Department $department)
    {
        //
    }

    public function destroy(Department $department)
    {
        //
    }


}
