<?php

namespace App\Http\Controllers\Imports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\UsersImport;
use App\User;
use App\Role;
use DB;
use App\Student;
use Illuminate\Support\Facades\Hash;
// use Excel;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function index()
    {
        $users = User::orderBy('created_at', 'DESC')->get();
        $students = Student::all();

        return view('import/import-excel', ['roles' => Role::pluck('name', 'id')
        ])->withusers($users);
    }

    public function import(Request $request)
    {
        $this->validate($request, [
            'import_file' => 'required',
        ]);

        $data = Excel::import(new UsersImport, request()->file('import_file'));
        // return back();
        // // $path = $request->file('import_file')->getRealpath();
        // // $data = Excel::load($path)->get();
         $role = Role::all()->where('id',6);
        // // $insert_data = array();
        if ($data){
            $password = Hash::make(str_random(8));
            $role_id = $request->get('id');
            foreach ($data as $row) {
                $insert_data[] = array(
                    'name' => $row['name'],
                    'sex' => $row['sex'],
                    'phone' => $row['phone'],
                    'role'=>$role->id,
                    'email' => $row['email'],
                    'password' => $password,
                    
                );
                //   

            }
            // echo $insert_data;
            if (!empty($insert_data)) {
                echo "inset data is not emptyd";
                DB::table('users')->insert($insert_data);
                return back()->with('success', 'data imported succesfully');
            }
        }
    // public function import(Request $request)
    // {   
    //     //get file
    //     $upload=$request->file('import_file');
    //     if(!$upload){
    //         return redirect('import/import-excel')->with('success', 'error | file is empty');
            
    //     }
    //     $filePath=$upload->getRealPath();
        
    //     //open and read
    //     $file=fopen($filePath, 'r');

    //     $header= fgetcsv($file);
       
    //     $Header=[];
    //     //validate
    //     foreach ($header as $value) {
    //         array_push($Header, $value);
    //     }
    //     $size =0;
    //     //looping through other columns
    //     while($columns=fgetcsv($file))
    //     {
    //         if($columns[0]=="")
    //         {
    //             continue;
    //         }
    //         // dd($Header);
    //         $data= array_combine($Header, $columns);
    //         foreach ($data as &$value) {
    //             $value=($key=="grade" || $key=="age")? (int)$value:(string)$value;
    //            }
    //            $name = User::where('name', $data['name'])->get();
    //            $result = $name->toArray();
    //            $password = Hash::make(str_random(8));

    //            if(!$result)
    //            {
    //                if($data['role'] == 'student'){
    //                    $users = new User();
    //                    $users->name =strtoupper($data['name']);
    //                 //    $users->middleName = strtoupper($data['middleName']);
    //                 //    $users->sex = strtoupper($data['sex']);
    //                    $users->password =  $password;
    //                    $users->phone = strtolower($data['phone']);
    //                    $users->email = $data['email'];
    //                    $users->role = $data['role'];
    //                 //    $users->age = $data['age'];
    //                    $users->sex = $data['sex'];
    //                    $users->save();
    //                    return redirect('import/import-excel')->with('success', 'error | file is empty');
    //                }

    // }

}
    }


