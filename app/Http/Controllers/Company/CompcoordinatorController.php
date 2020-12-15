<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Flash;

use App\Role;
use App\User;
use App\Company;
use App\CompCoordinator;
use App\University;

class CompCoordinatorController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
        // $this->middleware('prevent-back-history');
    }

    //
    public function index()
    {
        $compcordinator = CompCoordinator::all();
        return view('companies.coordinator.index')->with('compcord', $compcordinator);
    }

    public function create()
    {
      $role =Role::orderBy('name')->get(); 
       $company = Company::orderBy('created_at')->get();
        return view('companies.coordinator.create')->with('roles',$role)
                                                   ->with('companys',$company);
    }
       
    public function store(Request $request, User $user )
    {

        $data= request()->validate([
            'first_name' =>'required|regex:/^[\pL\s\-]+$/u',
            'last_name' => 'required|regex:/^[\pL\s\-]+$/u',
            'sex' => 'required',
            'phone' => 'required|regex:/(0)[0-9]/|not_regex:/[a-z]/|digits:10',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            
            ]);


        // User::create($data);
    
        $compcordinator = new CompCoordinator();

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->sex = $request->sex;
        $user->phone = $request->phone;
        $user->role = 3;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        // Hash::make($data['password']),
        $user->save(); //then

        $id = $user->id;
        $compcordinator->user_id = $id;
        $compcordinator->company_id = $request->company;
        $compcordinator->save();
        Flash::success('saved successfully.');
        $companies =Company::all();
        return view('companies.index')->with('companies',$companies);
        
    }
    public function show($id)
    {
        $compcordinator = CompCoordinator::find($id);
        //dd($advisor);
        $userid= $compcordinator->user_id;
        $unid= $compcordinator->company_id;

         $user = User::find($userid);
         $company = Company::find($unid);
   
         //dd($role);
        return view('companies.coordinator.show')->with('user', $user)
                                                 ->with('compcord', $compcordinator)
                                                 ->with('company',$company);
    }
        public function edit($id)
            {
                $compcoordiantor = CompCoordinator::find($id);
                //dd();
                $userid = $compcoordiantor->user_id;
                $unid = $compcoordiantor->company_id;
                // $rolid= $compcoordiantor->role_id;
             $user = User::find($userid);

            $company = Company::find($unid);
            $companys = Company::all();
                //  $roles = Role::find($rolid);
                //  $rolled = Role::all();
     return view('companies.coordinator.edit')->with('compcord',$compcoordiantor)
                                                        ->with('users', $user)
                                                        ->with('companys',  $companys)
                                                        ->with('company',  $company);
                                                        
                                                                                       
            }

    public function update(Request $request,$id)
    {
        //
        $coordiantor = CompCoordinator::find($id);
        $user = User::where('id',$coordiantor->user_id)->first();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        // $user->sex = $request->sex;
        $user->phone = $request->phone;
        $user->role = 3;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        Flash::success(' updated successfully');
        $compcordinator = CompCoordinator::all();
        return view('companies.coordinator.index')->with('compcord', $compcordinator);
    }
    public function destroy($id)
    {
       
        $compcordinator = CompCoordinator::find($id);
        $compcordinator->delete();
        return redirect(route('CompCoordinator.index'));

    }


}
