<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use App\User;
use App\Role;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// use Excel;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function index()
    {
        $users = User::orderBy('created_at', 'DESC')->get();
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

        // // $insert_data = array();
        if ($data){
            $password = Hash::make(str_random(8));
            
            foreach ($data as $row) {
             
                $insert_data[] = array(
                    'name' => $row['name'],
                    'sex' => $row['sex'],
                    'phone' => $row['phone'],
                    'role' => $row['role'],
                    'email' => $row['email'],
                    'password' => $password,
                );
                //   }

            }
            // echo $insert_data;
            if (!empty($insert_data)) {
                echo "inset data is not emptyd";
                DB::table('users')->insert($insert_data);
                return back()->with('success', 'data imported succesfully');
            }
        }

    }
}
