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
                'password'       => '$2y$10$14RIW30W6hV0GvSHt7jp6eJRC8cUEfQs4XfYvsxSFGFaEcZyelpZ.',
                'remember_token' => null,
                'created_at'     => '2019-09-19 17:30:34',
                'updated_at'     => '2019-09-19 17:30:34',
            ],
        ];

        User::insert($users);
    }
}
