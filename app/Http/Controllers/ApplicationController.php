<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Applicant;
use App\CompCoordinator;
use App\Companydepartment;
use App\placement;
use Flash;
use App\Student;
use App\User;
use App\Department;
use App\University;

use App\Company;

class ApplicationController extends Controller
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
        $user = CompCoordinator::where('user_id',Auth::id())->first();
        $applicants = Applicant::where('company_id',$user->company_id)->where('status','pending')->get();
  
        return view('companyAdmin.index')->with('applicants',$applicants);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $applicant = Student::where('user_id',Auth::id())->first();
        $appcount =Applicant::where('student_id',$applicant->id)->get()->count();
        // dd($appcount);
        $student = Student::find($id);
        $userid =  $student->user_id;
        $unid = $student->university_id;
        $depid = $student->department_id;
        
         $department = Department::find( $depid);     
         $user = User::find($userid);
         $university = University::find($unid);
         //dd($role);
        return view('companyAdmin.index')->with('users', $user)
        ->with('students',$student)
        ->with('university',$university)
        ->with('department', $department)
        ->with('counts', $appcount);;
    }

 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function approve($id,$id2,$id3)
    {
        
        // dd($id,$id2,$id3);
        $applicant = Applicant::where('student_id', $id)->first();
        $user = CompCoordinator::where('user_id',Auth::id())->first();
        
        $numcount = placement::all()
        ->where('company_id',$user->company_id)
        ->count();
        $complimit = Companydepartment::where('id', $applicant->companydepartment_id)->first();

        $companyLimit = $complimit->offer_capacity;
        if($numcount<$companyLimit)
        {
            if($applicant)

                  $placement = new placement();
                    $placement->student_id = $id;
                    $placement->company_id = $user->company_id;
                    $placement->companydepartment_id = $id2;
                    $placement->duration_id = $id3;
                    $placement->status = "accepted";

                    $checkid = $id;
                    $compid = Placement::where('company_id',$user->company_id)->get();
                    $count=0;
                    foreach($compid as $row){
                        $try = $row->student_id;
                        if($try==$checkid){
                            $count++;
                        }
                    }
                    if($count>1)
                    {
                        Flash::warning('You have Already getplaced . . .');
                        // return view('placements.index')    ;
                    } 
                    else
                    {
                        $placement->save();
                        Flash::success('placement successful.');
                    }
                    // here to remove applicants
                    $appid = $id;
                    $dd =  Applicant::where('student_id',$appid)->get();
                    foreach ($dd as $d) {
                        $d->delete();
                        }           
            $applicant =Applicant::all()->where('status', 'pending');
            return view('companyAdmin.index')->with('applicants',$applicant);
      }

    
    }

    public function Automatic(){

        $user = CompCoordinator::where('user_id',Auth::id())->first();
        $applicants = Applicant::where('company_id',$user->company_id)->where('status','pending')->get();

        $sorted = $applicants->sortByDesc(function($query){
            return $query->student->grade;
        })
        ->all();

        $department =Companydepartment::where('company_id',$user->company_id)->get();

        $successful=false;
        $try =true;

     foreach($sorted as $applicant){
        $numcount = placement::all()->where('company_id',$user->company_id)->where('companydepartment_id',$applicant->companydepartment_id)->count();

        $complimit = Companydepartment::where('company_id',$user->company_id)->where('id', $applicant->companydepartment_id)->first();

        $companyLimit = $complimit->offer_capacity;
        $compid = Placement::where('student_id',$applicant->student_id)->count();
        if($numcount<$companyLimit)
        {
           

            if($compid>0)
            {
               $try= false;
            } 
            else
            {
                $placement = new placement();
                $placement->student_id = $applicant->student_id;
                $placement->company_id = $user->company_id;
                $placement->companydepartment_id = $applicant->companydepartment_id;
                $placement->duration_id = $applicant->duration_id;
                $placement->status = "accepted";
                $placement->save();
                $successful= true;
            }
        
        // here to remove applicants
        $appid = $applicant->student_id;
        $dd =  Applicant::where('student_id',$appid)->get();
        foreach ($dd as $d) {
            $d->delete();
      }
      
    }
     
     
 }
    if( $successful){
        Flash::success('placement successful.');
     }
     
     $applicant =Applicant::all()->where('status', 'pending');
     return view('companyAdmin.index')->with('applicants',$applicant);
     }

    public function reject(Request $request, $id)
    {
        // $application = Application::where('id', '=', e($id))->first();
        $applicant = Applicant::where('id','=',e($id))->first();
    
    if($applicant)
    {
        $applicant->status = "rejected";
        $applicant->save();
        $applicant =Applicant::all()->where('status', 'pending');
        return view('companyAdmin.index')->with('applicants',$applicant);
        //return a view or whatever you want tto do after
    }
    }

    public function internships(){
        $student = Student::where('user_id', Auth::id())->first();
        $applicant =Placement::all()->where('student_id',$student->id);
        return view('companies.internships.index')->with('posts',$applicant);
    }
    public function list($id){
        $student = Student::find($id);
        return view('universities.student.list')->with('students',$student);
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
