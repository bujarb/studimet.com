<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = "super_admin";
        $role->display_name = "Super Admin";
        $role->description = "The super admin of the page";
        $role->save();

        $role = new Role();
        $role->name = "moderator";
        $role->display_name = "Moderator";
        $role->description = "The moderator can add,delete and update universities and courses";
        $role->save();

        $role = new Role();
        $role->name = "student";
        $role->display_name = "Student";
        $role->description = "The student can just compare and view univerisites and courses";
        $role->save();
    }
}
