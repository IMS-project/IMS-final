<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use DB;
use App\User;

class usersimports implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        return new User([
            'name'=>@$rows[0],
            'address'=>@$rows[1],
            'sex'=>@$rows[2],
            'phone'=>@$rows[3],
            'role'=>@$rows[4],
            'email'=>@$rows[5],
            'password'=>@$rows[6],

        ]);
    //     foreach ($rows as $row) 
    //     {
    //         return new User([
    //             'name' =>@$row[0],
    //             'address'=>@$row[1],
    //             'sex'=>@$row[2],
    //             'phone'=>@$row[3],
    //             'email'=>@$row[4],
    //             'role'=>@$row[4],
    //             'password'=>@$row[5],
                
               
    //         ]);

    // }
}
}