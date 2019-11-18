<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 5; $i++) {
            # code...
            Post::insert([
                'title' => $faker->name(),
                'description' => $faker->realText(50),
                'content' => $faker->realText(100)
            ]);
        }
    }
}
