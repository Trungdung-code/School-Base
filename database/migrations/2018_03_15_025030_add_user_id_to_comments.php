<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasColumn('comments', 'user_name'))
            Schema::table('comments', function (Blueprint $table) {
                $table->dropColumn('user_name');
            });
        if(Schema::hasColumn('comments', 'user_email'))
            Schema::table('comments', function (Blueprint $table) {
                $table->dropColumn('user_email');
            });
        Schema::table('comments', function ($table) {
            $table->integer('user_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(Schema::hasColumn('comments', 'user_id'))
            Schema::table('comments', function (Blueprint $table) {
                $table->dropColumn('user_id');
            });
        Schema::table('comments', function (Blueprint $table) {
            $table->string('user_name')->nullable();
            $table->string('user_email')->nullable();
        });
    }
}
