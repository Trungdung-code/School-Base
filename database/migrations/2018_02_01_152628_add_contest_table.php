<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddContestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("contests", function(Blueprint $table) {
            $table->increments("id");
            $table->string("image");
            $table->string("name");
            $table->longText("description");
            $table->dateTime("start_time");
            $table->integer("total_students");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("contests");
    }
}
