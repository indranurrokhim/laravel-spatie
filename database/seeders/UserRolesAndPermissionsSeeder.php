<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserRolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $indra = User::create([
            'name' => "indra",
            'email' => "indra@gmail.com",
            'password' => Hash::make('password'),
        ]);
        $manager = User::create([
            'name' => "manager",
            'email' => "manager@gmail.com",
            'password' => Hash::make('password'),
        ]);
        $staff = User::create([
            'name' => "staff",
            'email' => "staff@gmail.com",
            'password' => Hash::make('password'),
        ]);

        $role_manager = Role::create(['name'=>'manager']);
        $role_staff = Role::create(['name'=>'staff']);

        Permission::create(['name'=>'read role']);
        Permission::create(['name'=>'create role']);
        Permission::create(['name'=>'update role']);
        Permission::create(['name'=>'delete role']);

        Permission::create(['name'=>'read user']);
        Permission::create(['name'=>'create user']);
        Permission::create(['name'=>'update user']);
        Permission::create(['name'=>'delete user']);

        Permission::create(['name'=>'read so']);
        Permission::create(['name'=>'create so']);
        Permission::create(['name'=>'update so']);
        Permission::create(['name'=>'delete so']);

        $role_manager->givePermissionTo('read role');
        $role_manager->givePermissionTo('create role');
        $role_manager->givePermissionTo('update role');
        $role_manager->givePermissionTo('delete role');

        $role_manager->givePermissionTo('read user');
        $role_manager->givePermissionTo('create user');
        $role_manager->givePermissionTo('update user');
        $role_manager->givePermissionTo('delete user');

        $role_manager->givePermissionTo('read so');
        $role_manager->givePermissionTo('create so');
        $role_manager->givePermissionTo('update so');
        $role_manager->givePermissionTo('delete so');

        $role_staff->givePermissionTo('read so');
        $role_staff->givePermissionTo('create so');
        $role_staff->givePermissionTo('update so');
        $role_staff->givePermissionTo('delete so');


        $indra->assignRole('manager');
        $indra->assignRole('staff');
        $manager->assignRole('manager');
        $staff->assignRole('staff');
        
        $staff->givePermissionTo('create user'); //trial
    }
}
