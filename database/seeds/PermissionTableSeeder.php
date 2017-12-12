<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Super-Admin permisisons
        $permission = new Permission();
        $permission->name = "manage-univeristy-authorization";
        $permission->display_name = "Authorize University";
        $permission->description = "Can authorize users to have the ability to insert univeristies";
        $permission->save();

        $permission = new Permission();
        $permission->name = "manage-users";
        $permission->display_name = "Manage Users";
        $permission->description = "Can manage users";
        $permission->save();

        $permission = new Permission();
        $permission->name = "manage-universities";
        $permission->display_name = "Manage Univerisites";
        $permission->description = "Can edit,delete unveristies listed by a person";
        $permission->save();

        $permission = new Permission();
        $permission->name = "manage-courses";
        $permission->display_name = "Manage Courses";
        $permission->description = "Can edit,delete courses listed by a university";
        $permission->save();

        // End of admin permissions

        // Moderator permissions

        $permission = new Permission();
        $permission->name = "add-universities";
        $permission->display_name = "Manage Universities";
        $permission->description = "Can add universities";
        $permission->save();

        $permission = new Permission();
        $permission->name = "delete-universities";
        $permission->display_name = "Delete Univerisites";
        $permission->description = "Can delete universities";
        $permission->save();

        $permission = new Permission();
        $permission->name = "edit-universities";
        $permission->display_name = "Edit Univerisites";
        $permission->description = "Can edit universities";
        $permission->save();

        $permission = new Permission();
        $permission->name = "add-courses";
        $permission->display_name = "Add Courses";
        $permission->description = "Can add courses";
        $permission->save();

        $permission = new Permission();
        $permission->name = "delete-courses";
        $permission->display_name = "Delete Courses";
        $permission->description = "Can delete courses";
        $permission->save();

        $permission = new Permission();
        $permission->name = "edit-courses";
        $permission->display_name = "Edit Courses";
        $permission->description = "Can edit courses";
        $permission->save();

        // End of moderator permissions
    }
}
