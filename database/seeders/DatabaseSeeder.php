<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $user = [
            [
                'number'=> '09369949693',
                'email'=>'admin@gmail.com',
                'is_admin'=> 1,
                'password'=> bcrypt('123456'),
            ],
            [
                'number'=> '093699949699',
                'email'=>'a@a.com',
                'password'=> bcrypt('123456'),
            ],
            [
                'number'=> '09190622401',
                'email'=>'seller@gmail.com',
                'is_seller' => 1,
                'password'=> bcrypt('123456'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
