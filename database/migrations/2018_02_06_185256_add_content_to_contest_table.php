<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class AddContentToContestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if(!Schema::hasColumn('contests', 'content')) {
            Schema::table("contests", function ($table) {
                $table->string('content');
            });
        }
        if(Schema::hasColumn('question_blocks', 'content')) {
            Schema::table("question_blocks", function ($table) {
                $table->dropColumn('content');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("contests", function($table) {
           $table->dropColumn('content');
        });
        Schema::table("question_blocks", function($table) {
           $table->string('content');
        });
    }
}
