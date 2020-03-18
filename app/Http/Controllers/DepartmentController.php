<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Hash;
use App\Department;
class DepartmentController extends Controller
{
    //
    public function index()
    {
        $department = Department::all();
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
        $deparment = new Department;
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
