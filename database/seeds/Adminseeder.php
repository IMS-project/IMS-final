<?php

use Illuminate\Database\Seeder;
use App\User;
class Adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {$user = User::create([
        'first_name'=>'sisay',
        'last_name'=>'melaku',
        'sex'=>'male',
        'phone'=>'09090909',
        'role'=>6,
        'email'=>'sisaymelaku@gmail.com',
        'password'=>bcrypt('123456')
    ]);
    }
}
