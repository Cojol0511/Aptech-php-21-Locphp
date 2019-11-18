<?php

use App\Category;
use App\Post;
use Illuminate\Database\Seeder;

class CategoryPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $array_categories = Category::get()->pluck('id')->toArray();
        // dd($arrayIdOfCategories);
        $array_posts = Post::get()->pluck('id')->toArray();
        for ($i = 0; $i < 4; $i++) {
            DB::table('category_post')->insert(
                [
                    'category_id' => $array_categories[array_rand($array_categories)],
                    'post_id' => $array_posts[array_rand($array_posts)]
                ]
            );
        }
    }
}
