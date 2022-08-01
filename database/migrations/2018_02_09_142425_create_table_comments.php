<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function(Blueprint $table) {
           $table->increments('id');
           $table->string('user_name');
           $table->string('user_email');
           $table->integer('course_id');
           $table->mediumText('content');
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
        Schema::drop('comments');
/*        Schame::table('comments', function(Blueprint $table) {
           $table->dropColumn('id');
           $table->dropColumn('user_name');
           $table->dropColumn('user_email');
           $table->dropColumn('content');
        });*/
    }
}
