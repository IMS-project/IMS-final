<?php
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $permissions = Permission::create([
            'name' => 'create-University',
            'name' => 'edit-University',
            'name' => 'create-Company',
            'name' => 'edit-Company',
        ]);
        /*Permission::create(['name' => 'create-University']);
        Permission::create(['name' => 'edit-University']);
        Permission::create(['name' => 'create-Company']);
        Permission::create(['name' => 'edit-Company']);
        Permission::create(['name' => 'import-Student']);
        Permission::create(['name' => 'create-Advisor']);
        Permission::create(['name' => 'assign-Advisor']);
        Permission::create(['name' => 'create-Supervisor']);
        Permission::create(['name' => 'assign-Supervisor']);
        Permission::create(['name' => 'view-Student']);
        Permission::create(['name' => 'view-Placement']);
        Permission::create(['name' => 'create-Attendance']);
        Permission::create(['name' => 'view-Attendance']);
        Permission::create(['name' => 'create-Chat']);
        Permission::create(['name' => 'create-Report']);
        Permission::create(['name' => 'edit-Report']);
        Permission::create(['name' => 'apply']);
        Permission::create(['name' => 'view-Report']);
       // Permission::create(['name' => 'view-Report']);
        
        
        */
        
    
        //$role = Role::create(['name' => 'admin']);
        //$role->givePermissionTo('create-University');
        $role = Role::create(['name' => 'admin'])
               ->givePermissionTo(['create-University', 'create-Company',]);

    
}
}