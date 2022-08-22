<?php

namespace Database\Seeders;

use App\Models\Bookmark;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Promotion;
use App\Models\Subcription;
use App\Models\Transaction;
use App\Models\Membership;
use App\Models\Subject;
use App\Models\Topic;
use App\Models\Exam;
use App\Models\Revise;
use App\Models\QuestionBlock;
use App\Models\Question;
use App\Models\UserAnswer;
use App\Models\ExamUser;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory()
            ->count(10)
            ->create();

        Subject::factory()
            ->count(10)
            ->create();

        Topic::factory()
            ->count(10)
            ->create();

        Promotion::factory()
            ->count(10)
            ->create();

        Subcription::factory()
            ->count(10)
            ->create();

        Transaction::factory()
            ->count(10)
            ->create();

        Membership::factory()
            ->count(10)
            ->create();

        Exam::factory()
            ->count(10)
            ->create();

        Revise::factory()
            ->count(10)
            ->create();

        QuestionBlock::factory()
            ->count(10)
            ->create();

        ExamUser::factory()
            ->count(10)
            ->create();

        Question::factory()
            ->count(10)
            ->create();

        UserAnswer::factory()
            ->count(10)
            ->create();

        Bookmark::factory()
            ->count(10)
            ->create();
    }
}
