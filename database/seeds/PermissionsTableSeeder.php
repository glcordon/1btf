<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => '1',
                'title' => 'country_access',
            ],
            [
                'id'    => '2',
                'title' => 'country_create',
            ],
            [
                'id'    => '3',
                'title' => 'country_delete',
            ],
            [
                'id'    => '4',
                'title' => 'country_edit',
            ],
            [
                'id'    => '5',
                'title' => 'country_show',
            ],
            [
                'id'    => '6',
                'title' => 'permission_access',
            ],
            [
                'id'    => '7',
                'title' => 'permission_create',
            ],
            [
                'id'    => '8',
                'title' => 'permission_delete',
            ],
            [
                'id'    => '9',
                'title' => 'permission_edit',
            ],
            [
                'id'    => '10',
                'title' => 'permission_show',
            ],
            [
                'id'    => '11',
                'title' => 'profile_password_edit',
            ],
            [
                'id'    => '12',
                'title' => 'role_access',
            ],
            [
                'id'    => '13',
                'title' => 'role_create',
            ],
            [
                'id'    => '14',
                'title' => 'role_delete',
            ],
            [
                'id'    => '15',
                'title' => 'role_edit',
            ],
            [
                'id'    => '16',
                'title' => 'role_show',
            ],
            [
                'id'    => '17',
                'title' => 'test_access',
            ],
            [
                'id'    => '18',
                'title' => 'user_access',
            ],
            [
                'id'    => '19',
                'title' => 'user_create',
            ],
            [
                'id'    => '20',
                'title' => 'user_delete',
            ],
            [
                'id'    => '21',
                'title' => 'user_edit',
            ],
            [
                'id'    => '22',
                'title' => 'user_management_access',
            ],
            [
                'id'    => '23',
                'title' => 'user_show',
            ],
        ];

        Permission::insert($permissions);
    }
}
