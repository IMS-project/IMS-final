<?php

namespace App\Http\Controllers\University;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use App\Role;
use App\User;
use App\University;
use App\Student;
use App\Company;
use App\Department;
use Flash;
use App\UniCoordinator;


class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('university');
        // $this->middleware('prevent-back-history');
    }
    public function index()
    {
        $student =Student::orderBy('created_at','desc')->paginate(10);
        return view('universities.student.index')->with('students', $student);
    }

    public function create()
    {
        $role = Role::orderBy('name')->get();
        $university = University::orderBy('created_at')->get();
        $dep = Department::all();
        // dd( $university);
        return view('universities.student.create')->with('roles',$role)
                                                  ->with('universities' ,$university)
                                                  ->with('departments',$dep);
        // return view('universities.student.create', compact('roles', 'universities', 'departments'));

    }

    public function store(Request $request)
    {   
        $data= request()->validate([
            'first_name' =>'required|regex:/^[\pL\s\-]+$/u',
            'last_name' => 'required|regex:/^[\pL\s\-]+$/u',
            'sex' => 'required',
            'phone' => 'required|regex:/(0)[0-9]/|not_regex:/[a-z]/|digits:10',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            
            ]);

        //    User::create($data);
           $student = new Student;
           $user = new User;
           $university = new University;
           $dep = new Department;

           $user->first_name = $request->first_name;
           $user->last_name = $request->last_name;
           $user->sex = $request->sex;
           $user->phone = $request->phone;
           $user->role = 6;
           $user->email = $request->email;
        //    $user->password = Hash::make($request->password);
           $user->password = Hash::make($request->password);  // Hash::make($data['password']),
           $user->save();
         
           $id = $user->id;
           $unid = UniCoordinator::where('user_id',Auth::id())->first();
        //    dd($unid->university_id);
           $student->student_id = $request->student_id;
           $student->user_id = $id;
           $student->department_id = $request->department;
           $student->university_id =$unid->university_id;
           $student->semester_term = $request->semister;
           $student->class_year = $request->year;
           $student->grade = $request->grade;
           $student->save();

        // To send an welcome mail to user with password and username attached
            $details = [
                'username' => $request->email,
                'password' => $request->password,
            ];
           Mail::to($request->email)->send(new WelcomeMail($details));

           Flash::success('saved successfully.');
           $student = Student::all();
           return view('universities.student.index')->with('students', $student);

    }

    
    public function show($id)
    {

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
         $student = Student::find($id);
            //  dd($advisor);
         $userid = $student->user_id;
         $unid = $student->university_id;
         $depid = $student->department_id;

        $user = User::find($userid);
        $university = University::find($unid);
        // $universitys = University::all();  
    
        $departments= Department::where('id', $depid )->get();
        //     $department = Department::all();
        // dd( $departments);

    return view('universities.student.edit')->with('users', $user)
                                        ->with('students',$student)
                                        ->with('departments', $departments);
    }

    public function update(Request $request, $id)
    {
        
        
        $student = Student::find($id);
        $user = User::where('id', $student->user_id)->first();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->sex = $request->sex;
        $user->phone = $request->phone;
        $user->role = 6;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);  // Hash::make($data['password']),
        $user->save();

        $id = $user->id;
        $unid = UniCoordinator::where('user_id',Auth::id())->first();
        $student->student_id = $request->student_id;
        $student->user_id = $id;
        $student->department_id = $request->department;
        $student->university_id =$unid->university_id;
        $student->semester_term = $request->semister;
        $student->class_year = $request->year;
        $student->grade = $request->grade;
        $student->save();
        Flash::success('updated successfully.');
        $student = Student::all();
        return view('universities.student.index')->with('students', $student);


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
        $student = Student::find($id);
        $student->delete();
        return redirect(route('Student.index'));
    }
}
