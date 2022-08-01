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
        Schema::create('result_answers', function (Blueprint $table) {
            $table->id();
            $table->integer('answers')->nullable()->comment('đáp án học sinh nộp bài');
            $table->integer('answers_correct')->nullable()->comment('Đáp án đúng');
            $table->integer('answers_wrong')->nullable()->comment('Đáp án sai');
            $table->integer('question_id')->nullable()->comment('id câu hỏi');
            $table->integer('contest_result_id')->nullable()->comment('id của bảng contest result id');
            $table->string('type')->nullable()->comment('loại contest');
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
        Schema::dropIfExists('result_answers');
    }
};
