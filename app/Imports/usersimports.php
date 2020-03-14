<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use DB;
use App\User;

class usersimports implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        $user = new User([
            'name'=>$rows[0],
            'address'=>$rows[1],
            'sex'=>$rows[2],
            'phone'=>$rows[3],
            'role'=>$rows[4],
            'email'=>$rows[5],
            'password'=>$rows[6],

        ]);
        // foreach ($rows as $row) 
        // {
        //     User::create([
        //         'name' => $row[0],
        //         'address'=>$row[1],
        //         'sex'=>$row[2],
        //         'phone'=>$row[3],
        //         'email'=>$row[4],
        //         'password'=>$row[5],
        //     ]);

    }
}
