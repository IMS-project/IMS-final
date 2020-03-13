<?php

use Illuminate\Database\Seeder;
use App\Role;
class roleseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $roles = [
        'admin',
        'uni-coordinator',
        'comp-coordinator',
        'advisor',
        'supervisor',
        'student'
     ];


     foreach ($roles as $role) {
          Role::create(['name' => $role]);
     }
 }
    
}
