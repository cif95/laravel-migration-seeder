<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100 ; $i++) { 
            $newTrain = new Train();
            $newTrain->departure_date = $faker->dateTimeBetween('now', '+3 months');
            $newTrain->company = $faker->word();
            $newTrain->departure_station = $faker->word();
            $newTrain->arrival_station = $faker->word();
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_code = $faker->numerify();
            $newTrain->wagons = $faker->numberBetween(2, 10);
            $newTrain->is_onScheduled = $faker->boolean();
            $newTrain->is_cancelled = $faker->boolean();
            $newTrain->slug= $faker->slug(3, false);
            $newTrain->save();
        }
    }
}
