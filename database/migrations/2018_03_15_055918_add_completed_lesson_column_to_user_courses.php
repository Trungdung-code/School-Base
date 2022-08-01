<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCompletedLessonColumnToUserCourses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_courses', function(Blueprint $table) {
           $table->mediumText('completed_lessons')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_courses', function(Blueprint $table) {
            $table->dropColumn('complted_lessons');
        });
    }
}
