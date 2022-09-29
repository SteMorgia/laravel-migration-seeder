<?php

use Illuminate\Database\Seeder;
use App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        $faker = \Faker\Factory::create('it_IT');

        for ($i=0; $i<10000; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->sentence();
            $newTrain->departures_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departures_time = $faker->dateTime();
            $newTrain->arrival_time = $faker->dateTime();
            $newTrain->train_code = $faker->randomNumber(5, false);
            $newTrain->train_carriages =$faker->numberBetween(0, 10);
            $newTrain->save();
        }
    }
}
