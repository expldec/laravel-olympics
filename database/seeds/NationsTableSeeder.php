<?php

use App\Nation;
use Illuminate\Database\Seeder;

class NationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = config('discipline');
        $nationsArray = $data['countries'];

        foreach ($nationsArray as $currentNation) {
             $nation = new Nation();
             $nation->name = $currentNation['name'];
             $nation->code = $currentNation['acronym'];

             $nation->save();
        }
    }
}
