<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 30; $i++) {
            $newTrain = new Train();
            $newTrain->Train_Id = $faker->randomElement(["NJEPOR", "QWBHOP","AWVHUI"]);
            $newTrain->Train_Company = $faker->word();
            $newTrain->From_Station = $faker->city();
            $newTrain->To_Station = $faker->city();
            $newTrain->Departure_Time = $faker->dateTimeThisYear();
            $newTrain->Arrival_Time = $faker->dateTimeThisYear();
            $newTrain->Carriage_Number = $faker->numberBetween(0, 100);
            $newTrain->On_Time = $faker->randomElement(["Yes", "No"]);
            $newTrain->Cancelled = $faker->randomElement(["Yes", "No"]);
            $newTrain->save();
        }
    }
}
