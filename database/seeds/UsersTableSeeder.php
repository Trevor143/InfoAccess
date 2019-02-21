<?php

use Illuminate\Database\Seeder;
use  Faker\Factory as Faker;

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
        $faker = Faker::create();
        //
        for ($i =0; $i<10; $itt) {
            App\User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'email_verified_at' => $faker->date(),
                'isAdmin' => $faker->numberBetween($min = 0, $max = 3),
                'password' => bcrypt('secret'),
                'approved_at' => now(),
            ]);
        }
    }
}
