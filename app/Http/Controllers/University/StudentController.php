<?php

namespace App\Http\Controllers\University;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Role;
use App\User;
use App\University;
use App\Student;
use App\Company;
use App\Department;

use Flash;


class StudentController extends Controller
{
    public function index()
    {
        //
        $student = Student::all();
        return view('universities.student.index')->with('students', $student);
    }

    public function create()
    {

        $role = Role::orderBy('name')->get();
        $university = University::orderBy('created_at')->get();
        $dep = Department::all();
        // dd( $university);
        return view('universities.student.create')->with('roles',$role)->with('universities' ,$university)->with('departments',$dep);

    }

    public function store(Request $request)
    {
           $student = new Student;
           $user = new User;
           $university = new University;
           $dep = new Department;

           $user->first_name = $request->first_name;
           $user->last_name = $request->last_name;
           $user->sex = $request->sex;
           $user->phone = $request->phone;
           $user->role = $request->role;
           $user->email = $request->email;
           $user->password = Hash::make($request->password);  // Hash::make($data['password']),
           $user->save();
         
           $id = $user->id;
           $student->student_id = $request->student_id;
           $student->user_id = $id;
           $student->department_id = $request->department;
           $student->university_id = $request->university;
           $student->semester_term = $request->semister;
           $student->class_year = $request->year;
           $student->grade = $request->grade;
           $student->save();

           Flash::success('saved successfully.');
           $stu = Student::all();
           return view('universities.student.index')->with('students', $stu);

    }

    public function show($id)
    {
        //
        $student = Student::find($id);
        //dd($advisor);
        $userid = $student->user_id;
        $unid = $student->university_id;
        $depid = $student->department_id;
        
         $department = Department::find( $depid);     
         $user = User::find($userid);
         $university = University::find($unid);
         //dd($role);
        return view('universities.student.show')->with('users', $user)
        ->with('students',$student)
        ->with('university',$university)
        ->with('department', $department);
    }

 
    public function edit($id)
    {
        //
    }

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
