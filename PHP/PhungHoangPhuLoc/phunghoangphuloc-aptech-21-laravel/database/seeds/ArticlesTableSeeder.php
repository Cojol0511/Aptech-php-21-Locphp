<?php

use App\Article;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker =  Faker\Factory::create();
        for ($i=0; $i < 5; $i++) { 
            # code...
            Article::insert([
                'title' => $faker->name(),
                'title_slug' => $faker->firstName(),
                'description' => $faker->realText(300)
            ]);
        }
    }
}
