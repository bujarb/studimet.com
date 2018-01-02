<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('control_type');
            $table->string('type');
            $table->integer('year');
            $table->integer('city')->unsigned();
            $table->string('address');
            $table->string('email');
            $table->integer('phone_number')->nullable();
            $table->integer('students_number')->nullable();
            $table->integer('teaching_staff_number')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();
            $table->string('logo_path');
            $table->string('background_image_path')->nullable();
            $table->timestamps();


            $table->foreign('city')->references('id')->on('cities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('courses', function (Blueprint $table) {
          $table->dropForeign(['city']);
          $table->dropIfExists('institutions');
      });
    }
}
