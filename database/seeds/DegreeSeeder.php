<?php

use Illuminate\Database\Seeder;
use App\Degree;
class DegreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bachelor = new Degree();
        $bachelor->name = 'Bachelor';
        $bachelor->display_name = 'Bsc';
        $bachelor->save();

        $masters = new Degree();
        $masters->name = 'Master';
        $masters->display_name = 'Msc';
        $masters->save();

        $phd = new Degree();
        $phd->name = 'PHD';
        $phd->display_name = 'Phd   ';
        $phd->save();
    }
}
