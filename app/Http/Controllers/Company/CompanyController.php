<?php

namespace App\Http\Controllers\Company;


 use App\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Flash;
class CompanyController extends Controller
{
    //
    public function index(Request $request)
    {
       $companies =Company::all();
    
        return view('companies.index')->with('companies',$companies);
    }
    public function create()
    {
        return view('companies.create');
    }

    public function store(Request $request)
    {
        
        $data= request()->validate([
            "name"=>"required", 
            "address"=>"required",
            "work_area"=>"required",
            "offer_capacity"=>"required",
            "mini_grade"=>"required",
            "other_skills"=>"required"
            ]);
            
          Company::create($data); // this is to save the data

           $company= new Company();
            $company->name= request('name');
            $company->address= request('address');
            $company->work_area= request('work_area');
            $company->offer_capacity= request('offer_capacity');
            $company->mini_grade =request('mini_grade');
            $company->other_skills= request('other_skills');
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

        return view('companies.show')->with('company', $company);

    }
    
   // public function edit(\app\Company $company)
    public function edit($id)
    {
        $company = Company::find($id);

        if (empty($company)) {

            return redirect(route('companies.edit'))->with('error', 'Company not found');
        }

        return view('companies.edit')->with('company', $company);
    }

    
    public function update(Company $company, Request $request)
    {
        //$company = Company::find($id); //notice
        if (empty($company)) {
            return redirect(route('companies.index'))->with('error', 'Company not found');
        }
         $company->name = $request->name;
        $company->address = $request->address;
        $company->save();
        //$company->update($id); //notice
        Flash::success('saved successfully');

        return redirect(route('companies.index'));
    }

    public function destroy($id)
     {
        $company = Company::find($id);

        if (empty($company)) {

            
            return redirect(route('companies.index'))->with('error', 'Company not found');
        }
    
         $company->delete($id);  //notice
         
         Flash::success('comoany deleted successfully.');
        return redirect(route('companies.index'));
    }

}
