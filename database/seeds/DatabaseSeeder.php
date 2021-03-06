<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call(DegreeSeeder::class);
        $this->call(DisciplineSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(CitySeeder::class);
    }
}
