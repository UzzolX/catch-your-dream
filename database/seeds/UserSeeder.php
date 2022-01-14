<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'           => 'Lima B',
                'user_type'           => 'admin',
                'email'          => 'lima123@gmail.com',
                'password'       => bcrypt('lima123@gmail.com')
            ],
            [
                'name'           => 'Mousumi A',
                'user_type'           => 'admin',
                'email'          => 'mousumi12@gmail.com',
                'password'       => bcrypt('mousumi12@gmail.com')
            ],
            [
                'name'           => 'Uxxol A',
                'user_type'           => 'admin',
                'email'          => 'uzzolah@gmail.com',
                'password'       => bcrypt('uzzolah@gmail.com')
            ],
        ];
        User::truncate();
        User::insert($users);
    }
}
