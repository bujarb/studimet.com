<?php

use Illuminate\Database\Seeder;
use App\Discipline;
class DisciplineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $discipline1 = new Discipline();
        $discipline1->name = "Agriculture & Forestry";
        $discipline1->save();

        $discipline2 = new Discipline();
        $discipline2->name = "Applied Sciences & Professions";
        $discipline2->save();

        $discipline3 = new Discipline();
        $discipline3->name = "Arts, Design & Architecture";
        $discipline3->save();

        $discipline4 = new Discipline();
        $discipline4->name = "Business & Management";
        $discipline4->save();

        $discipline5 = new Discipline();
        $discipline5->name = "Computer Science & IT ";
        $discipline5->save();

        $discipline6 = new Discipline();
        $discipline6->name = "Engineering & Technology";
        $discipline6->save();

        $discipline7 = new Discipline();
        $discipline7->name = "Environmental Studies & Earth Sciences";
        $discipline7->save();

        $discipline8 = new Discipline();
        $discipline8->name = "Hospitality, Leisure & Sports";
        $discipline8->save();

        $discipline9 = new Discipline();
        $discipline9->name = "Humanities";
        $discipline9->save();

        $discipline10 = new Discipline();
        $discipline10->name = "Journalism & Media";
        $discipline10->save();

        $discipline11 = new Discipline();
        $discipline11->name = "Law";
        $discipline11->save();

        $discipline12 = new Discipline();
        $discipline12->name = "Medicine & Health";
        $discipline12->save();

        $discipline13 = new Discipline();
        $discipline13->name = "Natural Sciences & Mathematics";
        $discipline13->save();

        $discipline14 = new Discipline();
        $discipline14->name = "Social Sciences";
        $discipline14->save();
    }
}
