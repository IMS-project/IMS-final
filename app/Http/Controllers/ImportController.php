<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use Illuminate\Support\Str;
use App\User;
// use Maatwebsite\Excel\Facades\Excel;
use Excel;
use App\Imports\UsersImport;

class ImportController extends Controller
{
    public function index()
    {
        $users = User::orderBy('created_at','DESC')->get();
        return view('import/import-excel',compact('users'));
    }

    public function import(Request $request){
        $this->validate($request,[
            'import_file'=>'required'
        ]);

        $data = Excel::import(new UsersImport,request()->file('import_file'));
        //return back()->with('success','data imported succesfully');

        // $path = $request->file('import_file')->getRealpath();   
        // $data = Excel::import($path)->get();
        if($data){
           // foreach($data as $key=>$value){
            $password = Hash::make(str_random(8));
           // foreach($data as $key=>$value){
               
                foreach($data as $row){
                    
                    $insert_data[] = array(
                        'name'=>$row['name'],
                        'address'=>$row['address'],
                        'sex'=>$row['sex'],
                        'phone'=>$row['phone'],
                        'role'=>['6'],
                        'email'=>$row['email'],
                        'password'=>$password,
                    );
                     //echo $row['name'];
                 //   }

            }
           // echo $row['name'];
        if(!empty($insert_data)){
            DB::table('users')->insert($insert_data);
        }
        }
        return back()->with('success','data imported succesfully');
}
}
