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
        //$this->call(RoleTableSeeder::class);
        //$this->call(PermissionTableSeeder::class);
        //$this->call(RoleUserSeeder::class);
        //$this->call(PermissionRoleSeeder::class);
        $this->call(DegreeSeeder::class);
        $this->call(DisciplineSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(CitySeeder::class);
    }
}
