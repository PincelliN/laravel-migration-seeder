<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\trains;
use Faker\Generator as Faker;

class trainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 30; $i++) {
            $new_train = new trains();
            $new_train->company = $faker->words(1,true);
            $new_train->departure_station = $faker->words(3, true);
            $new_train->arrival_station = $faker->words(3, true);
            $new_train->departure = $faker->time('H:i:s');
            $new_train->arrival = $faker->time('H:i:s');
            $new_train->code = $faker->isbn10();
            $new_train->num_carriages = $faker->numberBetween(0, 30);
            $new_train->on_time = $faker->numberBetween(0, 1);
            $new_train->cancelled = $faker->numberBetween(0, 1);
            $new_train->departure_day = $faker->dateTimeThisMonth('+20 Day');
            $new_train->binary= $faker->numberBetween(0, 10);
            $new_train->save();

        }
    }
}