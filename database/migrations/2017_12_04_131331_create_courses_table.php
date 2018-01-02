<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('degree_id')->unsigned();
            $table->integer('discipline_id')->unsigned();
            $table->integer('duration');
            $table->double('fee');
            $table->date('deadline');
            $table->string('program_website_link')->nullable();
            $table->string('admission_inquiry_link')->nullable();
            $table->text('overview')->nullable();
            $table->text('programme_outline')->nullable();
            $table->text('key_facts')->nullable();
            $table->text('addmission_requirments')->nullable();
            $table->text('students_service')->nullable();
            $table->text('fee_funding')->nullable();
            $table->integer('inst_id')->unsigned();
            $table->timestamps();

            $table->foreign('discipline_id')->references('id')->on('disciplines')->onDelete('cascade');
            $table->foreign('degree_id')->references('id')->on('degrees')->onDelete('cascade');
            $table->foreign('inst_id')->references('id')->on('institutions')->onDelete('cascade');
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
            $table->dropForeign('courses_discipline_id_foreign');
            $table->dropForeign('courses_uni_id_foreign');
            $table->dropForeign(['degree_id']);
            $table->dropIfExists('courses');
        });
    }
}
