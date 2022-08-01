<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contest_results', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('contest_id')->nullable();
            $table->integer('answer_correct')->nullable();
            $table->float('total_point')->nullable();
            $table->time('time_send')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contest_results');
    }
};
