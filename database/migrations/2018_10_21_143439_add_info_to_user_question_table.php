<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInfoToUserQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("user_questions", function($table) {
            $table->string('course_id')->nullable();
            $table->string('question_type')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("user_questions", function($table) {
            $table->dropColumn('course_id');
            $table->dropColumn('question_type');
        });
    }
}
