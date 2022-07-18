<?php

use App\Athlete;
use Illuminate\Database\Seeder;

class AthletesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = config('discipline');
        $athletesArray = $data['athletes'];

        foreach ($athletesArray as $currentAthlet) {
            
            $athlet = new Athlete();
            $athlet->name = $currentAthlet['name'];
            $athlet->genre = $currentAthlet['genre'];

            $athlet->save();
        }
    }
}
