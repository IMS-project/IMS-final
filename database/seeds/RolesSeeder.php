<?php

use Illuminate\Database\Seeder;
use App\Role;
class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create([
            'name'=>'admin',

        
        ]);
        $uni_coordinator = Role::create([
            'name'=>'uni_coordinator',
            
            
        ]);
        $comp_coordinator = Role::create([
            'name'=>'comp_coordinator',
            
            
        ]);
        $advisor = Role::create([
            'name'=>'advisor',
            
            
        ]);
        $supervisor = Role::create([
            'name'=>'supervisor',
            
        ]);
        $student = Role::create([
            'name'=>'student',
            
            
        ]);

    }
}
