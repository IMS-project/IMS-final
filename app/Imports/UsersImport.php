<?php

namespace App\Imports;

use App\User;
use App\Student;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Imports\UserImports;
use DB;
use Illuminate\Support\Facades\Hash;
class UsersImport implements ToCollection
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
    
        return new User([
            'name'=>$collection[0],
            'address'=>$collection[1],
            'sex'=>$collection[2],
            'phone'=>$collection[3],
            'email'=>$collection[4],
            'role'=>$collection[5],
            // 'password'=>@$collection[6],

        ]);
        // $user->roles()->attach($data['role']);
        // return $user;
    }
        // $student = new Student([
            
        // ]);

    }
