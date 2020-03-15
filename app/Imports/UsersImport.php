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
        $user = new User([
            'name'=>$collection[0],
            // 'address'=>$collection[2],
            'sex'=>$collection[1],
            'phone'=>$collection[2],
            // 'role'=>$collection[5],
            'email'=>$collection[3],
            'password'=>$collection[5],

        ]);
        // $student = new Student([
            
        // ]);

    }
}
