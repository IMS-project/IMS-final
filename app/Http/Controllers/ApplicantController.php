<?php

namespace App\Http\Controllers;
use App\Applicant;
use Illuminate\Http\Request;
use App\Company;
use App\Student;
use App\User;
use DB;
use Flash;
use Illuminate\Support\Facades\Auth;
class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $companies =Company::all();
        return view('Applicants.index')->with('companies',$companies);
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
    public function store(Request $request, $id)
    {
        // dd($id);
    // $app = Applicant::where('student_id','=',Input::get('student_id'));
    // dd($app);

    $applicant = new Applicant();
    // $company = Company::find($id);
    // $applicant->student_id = auth()->user()->id;
    $student = Student::where('user_id', Auth::id())->first();
    // dd($student->student_id);
//    foreach($student as $S){
//     dd($S->student_id);
//    }
    // if(!$student->id){
    //     $applicant->student_id = $student->id;
    //     $applicant->company_id = $id;
    //     // Flash::success('Applicants saved successfully.');
    //      $applicant->save();
    // }
    $applicant->student_id = $student->id;
        $applicant->company_id = $id;
        // Flash::success('Applicants saved successfully.');
        
        $stid = Applicant::all()->where('student_id',$applicant->student_id);
        $count = 0 ;
        foreach($stid as $row)
        {
            $try = $row->company_id;
            if($try==$id)
            {
                $count = 1;
            } 
        }
        if($count==1)
        {
            Flash::warning('You have Already Applied . . .');
            return Redirect()->route('Applicants.index')    ;
        } 
        else
        {
            $applicant->save();
            Flash::success('Applicants saved successfully.');
        }
    
    return Redirect()->route('Applicants.index')    ;
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::find($id);

       // $university = $this->universityRepository->find($id);

        if (empty($company)) {

            return redirect(route('Applicants.show_fields'))->with('error', 'Company not found');
        }

        return view('Applicants.show')->with('company', $company);
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
    public function update(Request $request, Applicant $applicant)
    {
        //
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
