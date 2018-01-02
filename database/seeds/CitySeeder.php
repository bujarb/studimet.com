<?php

use Illuminate\Database\Seeder;
use App\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // City 1 -- Ferizaj
        $ferizaj = new City();
        $ferizaj->name = "Ferizaj";
        $ferizaj->save();
    }
}
