<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker; 
use App\Models\Trip;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(Faker $faker){
        $trips = [
            [
                'location' => 'Parigi',
                'duration' => '5 giorni',
                'departure_date' => '01/05/2022',
            ],
            [
                'location' => 'Londra',
                'duration' => '7 giorni',
                'departure_date' => '01/07/2022',
            ],
            [
                'location' => 'Roma',
                'duration' => '7 giorni',
                'departure_date' => '01/07/2022',
            ],
            [
                'location' => 'Amsterdam',
                'duration' => '5 giorni',
                'departure_date' => '01/04/2022',
            ],
            [
                'location' => 'Madrid',
                'duration' => '10 giorni',
                'departure_date' => '01/08/2022',
            ],
    
        ];
        {
            foreach($trips as $trip){
                $_trips = new Trip();
                $_trips->location = $trip['location'];
                $_trips->duration = $trip['duration'];
                $_trips->departure_date = $trip['departure_date'];
                $_trips->save();
            }
            
            for ($i = 0; $i < 10; $i++) {
            $_trips = new Trip();
            $_trips->location = $faker->text();
            $_trips->duration = $faker->numberBetween(3, 10);
            $_trips->departure_date = $faker->date();
            $_trips->save();
        }
        }
    }
}
