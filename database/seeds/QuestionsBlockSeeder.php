<?php

use Illuminate\Database\Seeder;

class QuestionsBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ["reading"=>0, "writing"=>1, "listening"=>2, "speaking"=>3];
        $question_blocks = \App\Models\QuestionBlock::all();
        foreach($question_blocks as $qb) {
            $qb->type = array_rand($types, 1);
            $qb->material = '/materials/hourse.mp3';
            $qb->save();
        }
    }
}
