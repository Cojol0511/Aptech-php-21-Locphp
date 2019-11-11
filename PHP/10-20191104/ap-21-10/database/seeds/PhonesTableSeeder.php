<?php

use Illuminate\Database\Seeder;

class PhonesTableSeeder extends Seeder
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
            DB::table('phones')->insert([
                'phone_numbers' => $faker->phoneNumber,
                'user_id' => $i+1,
            ]);
        }
    }
}
