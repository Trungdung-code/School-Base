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
        Schema::create('question_blocks', function (Blueprint $table) {
            $table->id();
            $table->text('description')->nullable();
            $table->foreignId('exam_id')->constrained();
            $table->integer('amount'); // amount of questions in a question_block
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
        Schema::dropIfExists('question_blocks');
    }
};
