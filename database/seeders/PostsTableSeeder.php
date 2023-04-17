<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory;
use DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [];
        $faker = Factory::create();
        $userIds = User::pluck('id')->toArray();


        $i;
        for($i=1;$i<=5;$i++)
        {
            $posts [] = 
            [
                
                
                'title'     => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'excerpt'   => $faker->paragraph(2, false),
                'content'   => $faker->text,
                'image'     => $faker->imageUrl($width = 640, $height = 480),
                'author_id' => collect($userIds)->random()
            ];

        }
        DB::table("posts")->insert($posts);
    }
}
