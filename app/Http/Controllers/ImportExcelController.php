<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Student;
use Maatwebsite\Excel\Facades\Excel;


class ImportExcelController extends Controller
{
    //importing student data from excel file
    public function index()
    {
        $users = User::orderBy('created_at','DESC')->get();
        return view('import-excel',compact('users'));
    } 

    public function import(Request $request){
        $this->validate($request,[
            'import_file'=>'required'
        ]);
// this will be inserted into users table
        $path = $request->file('import_file')->getRealpath();   
        $data = Excel::load($path)->get();
        if($data->count()>0){
           // foreach($data as $key=>$value){
                foreach($data as $row){
                    $insert_data[] = array(
                        'name'=>$row['name'],
                        'address'=>$row['address'],
                        'email'=>$row['email'],
                        
                    );
                    // echo $row['name'];
                 //   }

            }

        if(!empty($insert_data)){
            DB::table('users')->insert($insert_data);
        }
        }
        return back()->with('success','data imported succesfully');
        // Excel::import(new Importcontacts,request()->file('import_file'));
        // return back()->with('success','contacts imported succesfuly');
    }

}
// student id
//year, grade will be inserted into students table
