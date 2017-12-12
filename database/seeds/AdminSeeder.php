<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Admin();
        $admin->name = 'Bujar';
        $admin->email = 'begisholli.bujar@gmail.com';
        $admin->password = bcrypt('bujar123');
        $admin->save();
    }
}
