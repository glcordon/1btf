<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            [
                'id'             => 1,
                'title'          => 'Admin',
                'stripe_plan_id' => null,
                'price'          => null,
            ],
            [
                'id'             => 2,
                'title'          => 'Free Plan',
                'stripe_plan_id' => null,
                'price'          => null,
            ],
            [
                'id'             => 3,
                'title'          => 'Member',
                'stripe_plan_id' => 'plan_xxxxxxxxxxxxxx',
                'price'          => 1999,
            ],
        ];

        Role::insert($roles);
    }
}
