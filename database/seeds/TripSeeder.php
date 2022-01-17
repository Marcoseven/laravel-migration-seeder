<?php


use App\Models\Trip;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run(Faker $faker)
    {
        foreach ($trips as $trip) {
            $_trip = new Trip();
            $_trip->locality = $trip['locality'];
            $_trip->departure_date = $trip['departure_date'];
            $_trip->_number_of_days = $trip['number_of_days'];
            $_trip->save();
        }
    }
}
