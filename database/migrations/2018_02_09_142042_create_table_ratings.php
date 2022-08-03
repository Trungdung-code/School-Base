<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateTableRatings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create("ratings", function (Blueprint $table) {
           $table->increments('id');
           $table->integer('user_id');
           $table->integer('course_id');
           $table->integer('stars');
           $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('ratings');
/*        Schema::table('reviews', function (Blueprint $table) {
           $table->dropColumn('id');
           $table->dropColumn('usesr_id');
           $table->dropColumn('course_id');
           $table->dropColumn('stars');
        });*/
    }
}
