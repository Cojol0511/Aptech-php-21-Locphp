<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
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
            User::insert([
                'name' => $faker->firstNameMale,
                'email'=>$faker->safeEmail,
                'password'=> bcrypt('secret'),
            ]);
        }
    }
}
