<?php

namespace App\Http\Controllers\University;


 use App\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Flash;
class CompanyController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('university');
        $this->middleware('prevent-back-history');
    }
    public function index(Request $request)
    {
       $companies =Company::all();
    
        return view('universityAdmin.comp')->with('companies',$companies);
    }
    public function create()
    {
        return view('universityAdmin.create');
    }

    public function store(Request $request)
    {
        
        $data= request()->validate([
            "name"=>["required","unique:companies"], 
            "address"=>"required",
            // "offer_capacity"=>"required",
            // "mini_grade"=>"required",
            // "other_skills"=>"required"
            ]);

        //     $check = request('name');
        //     $comid = Company::all()->where('name',$check);

        //    if($comid){
        //        return "already exists";
        //    }
        //    else{
            Company::create($data); // this is to save the data
            $company= new Company();
             $company->name= request('name');
             $company->address= request('address');
            //  $company->offer_capacity= request('offer_capacity');
            //  $company->mini_grade =request('mini_grade');
            //  $company->other_skills= request('other_skills');
             // $company->save();
              Flash::success('Companies saved successfully.');
             //  $role =Role::orderBy('name')->get(); 
              $company = Company::orderBy('created_at')->get();
         return view('companies.coordinator.create')->with('companys',$company);
        

           
            
          
        // return Redirect()->route('companies.index');
        // return redirect('/index');

    }

    public function show($id)
    {
        // dd($company); dd is link lead to show the details
          $company = Company::find($id);

       // $university = $this->universityRepository->find($id);

        if (empty($company)) {

            return redirect(route('companies.show_fields'))->with('error', 'Company not found');
        }

        return view('universityAdmin.show')->with('company', $company);

    }
    
   // public function edit(\app\Company $company)
    public function edit($id)
    {
        $company = Company::find($id);

        return view('universityAdmin.edit')->with('company', $company);
    }

    
    public function update(Company $company, Request $request)
    {
         $company->name = $request->name;
        $company->address = $request->address;
        // $company->offer_capacity = $request->offer_capacity;
        $company->save();
        //$company->update($id); //notice
        Flash::success('saved successfully');

        $companies =Company::all();
        return view('universityAdmin.comp')->with('companies',$companies);
    }

    public function destroy($id)
     {
        $company = Company::find($id);
    
         $company->delete($id);  //notice
         
         Flash::success('comoany deleted successfully.');
         $companies =Company::all();
    
         return view('universityAdmin.comp')->with('companies',$companies);
    }

}
