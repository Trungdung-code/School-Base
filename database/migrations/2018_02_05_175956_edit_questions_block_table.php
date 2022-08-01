<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditQuestionsBlockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasColumn('question_blocks', 'lesson_id')) {
            Schema::table('question_blocks', function($table) {
               $table->dropColumn('lesson_id');
            });
        }
        if(Schema::hasColumn('question_blocks', 'order')) {
            Schema::table('question_blocks', function($table) {
                $table->dropColumn('order');
            });
        }
        Schema::table('question_blocks', function($table) {
           $table->string('type');
           $table->mediumText('content');
           $table->string('material');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('question_blocks', function($table) {
           $table->dropColumn('type') ;
           $table->dropColumn('content');
           $table->dropColumn('material');
        });
    }
}
