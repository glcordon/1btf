<?php

use App\Permission;
use App\Role;
use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = Permission::all();
        $roles       = Role::all();

        $roles->firstWhere('title', 'Admin')->permissions()->attach($permissions);

        $role = Role::where('title', 'Free Plan')->first()->permissions();
        $role->attach($permissions->firstWhere('title', 'test_access'));
        $role->attach($permissions->firstWhere('title', 'profile_password_edit'));

        $role = Role::where('title', 'Member')->first()->permissions();
        $role->attach($permissions->firstWhere('title', 'test_access'));
        $role->attach($permissions->firstWhere('title', 'profile_password_edit'));
    }
}
