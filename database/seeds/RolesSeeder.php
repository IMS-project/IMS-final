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
            'slug'=>'admin',
            'permission'=>json_encode([
                'create-Company'=>true,
                'update-Company'=>true,
                'publish-company'=>true,
                'create-University'=>true,
                'update-University'=>true,
                'publish-University'=>true,
            ])
        ]);
        $uni_coordinator = Role::create([
            'name'=>'uni_coordinator',
            'slug'=>'un-coordinator', 
            'permission'=>json_encode([
                'create-Student'=>true,
                'create-Advisor'=>true,
            ])
        ]);
        $comp_coordinator = Role::create([
            'name'=>'comp_coordinator',
            'slug'=>'comp-coordinator',
            'permission'=>json_encode([
                'create-supervisor'=>true,
                'assign-supervisor'=>true,
            ])
        ]);
        $advisor = Role::create([
            'name'=>'advisor',
            'slug'=>'advisor',
            'permission'=>json_encode([
                'check-attendance'=>true,
                'evaluate-students'=>true,
            ])
        ]);
        $supervisor = Role::create([
            'name'=>'supervisor',
            'slug'=>'supervisor',
            'permission'=>json_encode([
                'evaluate-Student'=>true,
                'take-attendance'=>true,
            ])
        ]);
        $student = Role::create([
            'name'=>'student',
            'slug'=>'student',
            'permission'=>json_encode([
                'apply-internship'=>true,
                'submit-report'=>true,
            ])
        ]);

    }
}
