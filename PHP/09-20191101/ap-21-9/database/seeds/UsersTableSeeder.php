<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            # code...
            DB::table('users')->insert([
                'name' => $faker->firstNameMale,
                'email' => $faker->freeEmail,
                'password' => bcrypt('secret'),
            ]);
        }
    }
}
