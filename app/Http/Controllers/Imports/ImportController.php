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
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('prevent-back-history');
    }

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


         Excel::import(new UsersImport, request()->file('import_file'));
         return redirect()->route('Student.index')->with('success', 'data imported succesfully');

}
    }


