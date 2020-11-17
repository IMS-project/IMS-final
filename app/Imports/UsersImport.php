<?php

namespace App\Imports;

use App\User;
use App\Student;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Imports\UserImports;
use App\UniCoordinator;
use App\Department;
use DB;
use Illuminate\Support\Facades\Hash;
class UsersImport implements ToCollection, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $collection)
    {
        //
        // $this->attributes['password'] = Hash::make($value);
    // dd($collection);
    
    foreach($collection as $row){
        $un= UniCoordinator::where('user_id', Auth::id())->first();
        $dep = Department::where('department_name',$row['dep'])->first();
        $user=User::create([
            'first_name'=>$row['first_name'],
            'last_name'=>$row['last_name'],  
            'phone'=>$row['phone'],
             'role'=>6,
            'email'=>$row['email'],
            'sex'=>$row['sex'],
            'password'=>Hash::make('password'),
        ]);
        $user->student()->create([
            'user_id'=>$user->id,
            'student_id'=>$row['student_id'],
            'department_id'=> $dep->id,
            'university_id'=>$un->university_id,
            'class_year'=>$row['year'],
            'semester_term'=>$row['semester'],
            'grade'=>$row['gpa'],
        ]);
    }
        // return new User([
            
            
            
        //     // 'password'=>@$collection[6],

        // ]);
        // $user->roles()->attach($data['role']);
        // return $user;
    }
        // $student = new Student([
            
        // ]);

    }
