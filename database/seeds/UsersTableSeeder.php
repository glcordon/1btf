<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$il1JmKC/ZLhlw3tPt1CaleJ.G1axsH7WjbDSJwLeoFP8GLhbn1kEa',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
