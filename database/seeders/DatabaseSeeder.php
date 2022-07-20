<?php

namespace Database\Seeders;

use App\Models\Option;
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
                'number'=> '09127041207',
                'email'=>'admin@gmail.com',
                'is_admin'=> 1,
                'password'=> bcrypt('123456'),
            ],
            [
                'number'=> '09127041207',
                'email'=>'a@a.com',
                'password'=> bcrypt('123456'),
            ],
            [
                'number'=> '09127041207',
                'email'=>'seller@gmail.com',
                'is_seller' => 1,
                'password'=> bcrypt('123456'),
            ],
        ];

        $option = [
            [
                'title' => '/upload/no-image.jpg',
                'ico' => '/upload/no-image.jpg',
                'banner_txt_1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'banner_img_1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'video_file' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'video_poster' => '/upload/no-image.jpg',
                'banner_txt_2' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'banner_img_2' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            ]
        ];

      foreach($option as $value) {
          Option::create($value);
      }


        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
