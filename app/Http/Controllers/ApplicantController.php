<?php

namespace App\Http\Controllers;
use App\Applicant;
use Illuminate\Http\Request;
use App\Company;
use App\Student;
use App\User;
use App\Placement;
use App\Duration;
use DB;
use Flash;
use App\Companydepartment;
use Illuminate\Support\Facades\Auth;
class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('student');
        // $this->middleware('prevent-back-history');
    }
    public function index()
    {
        $app = Applicant::all();
        $comp= Company::all();
        $count=0;
        
        // dd($limit);
        $student = Student::all()->where('user_id',Auth::id())->first();
        $exist = Placement::all()->where('student_id', $student->id);
        $companies=[];
        if($exist->isEmpty()){
            
            $companies = Company::all();
           
        }
        else {
           
            Flash::warning('You are not elligable to apply');
           
        }

        return view('studentpage.index')->with('companies',$companies);
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
        $applicant = new Applicant();
        $student = Student::where('user_id', Auth::id())->first();
        $department = Companydepartment::where('company_id', $request->company)->where('id',$request->departments)->first();

        $appcount = Applicant::where('company_id',$request->company)->where('companydepartment_id',$request->departments)->get()->count();
        // dd($appcount<$department->offer_capacity-4);
       
        if($appcount<$department->offer_capacity+50){

        $applicant->student_id = $student->id;
        $applicant->company_id = $request->company;
        $applicant->companydepartment_id = $request->departments;
        $applicant->duration_id = $request->durations;
        $applicant->status = "pending";
        
        $stid = Applicant::all()->where('student_id',$applicant->student_id);
        $count = 0 ;
                foreach($stid as $row)
                    {
                        $try = $row->companydepartment_id;
                        if($try==$request->departments)
                        {
                            $count = 1;
                        } 
                    }
                    if($count==1)
                    {
                        Flash::warning('You have Already Applied . . .');
                        return Redirect()->route('offer_company.index') ;
                    } 
                    else
                    {
                        $applicant->save();
                        Flash::success('Application successful.');
                    }
                
                    $companies =Company::all();
                    $applicant = Applicant::all()->where('status', 'pending');
                return view('studentpage.index')->with('applicants',$applicant)->with('companies',$companies);
}
    else
    {
        Flash::warning('Already reached maximum limit');
        $companies =Company::all();
        $applicant = Applicant::all()->where('status', 'pending');
       return view('studentpage.index')->with('applicants',$applicant)->with('companies',$companies);
    }
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 

        $applicant = Student::where('user_id',Auth::id())->first();
        $appdpt = Applicant::where('student_id',$applicant->id)->get();
        $limit = Applicant::where('student_id',$applicant->id)->get()->count();
        $departments = Companydepartment::all();
        $duration = Duration::all();
        $company = Company::find($id);
        $department =  Companydepartment::where('company_id',$id)->get();
        $placements = Companydepartment::where('company_id',$id)->get();
        $c =[];
        $cp = [];
        foreach($placements as $depart){
            
            $c[$depart->id]= $depart->applicant()->count();
            $cp[$depart->id]= $depart->placement()->count();
        }
        
        $placement =Company::find($id)->placement()->count();
        return view('studentpage.show')->with('company', $company)
                                        ->with('applicants',$c)
                                        ->with('placed',$placement)
                                        ->with('departments',$departments)
                                        ->with('department',$department)
                                        ->with('durations',$duration)
                                        ->with('placements',$cp)
                                        ->with('limits',$limit);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function edit(Applicant $applicant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $action)
    {
        $applicant = Applicant::find($id);
        if($action == 'approve'){
            $applicant->status = 'approved';
        } elseif($action == "reject") {
            $applicant->status = 'rejected';
        }
        return view('companyAdmin.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Applicant $applicant)
    {
        //
    }
}
