<?php

use Illuminate\Database\Seeder;

class ContestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $test_name = array(["SAT TEST" => 0, "IELTS TEST" => 1, "TOFLE TEST" => 2]);
        //
        $faker = \Faker\Factory::create();

        $limit = 10;

        for($i = 1; $i < $limit; $i++) {
            DB::table('contests')->insert([
               'name' => array_rand($test_name, 1),
                'description' => '<h3 style=\"font-family: PFCentroSlabPro, Arial, Helvetica, sans-serif; font-size: 1.4em; color: rgb(51, 51, 51); background-color: rgb(241, 241, 237);\">IELTS Listening description</h3><table cellspacing=\"0\" cellpadding=\"10\" border=\"1\" style=\"color: rgb(51, 51, 51); font-family: Arial; font-size: 16px; background-color: rgb(241, 241, 237);\"><caption></caption><thead></thead><tbody><tr><th>Paper format</th><td><p>There are four sections with ten questions each. The questions are designed so that the answers appear in the order they are heard in the audio.</p><p>The first two sections deal with situations set in everyday social contexts. In Section 1, there is a conversation between two speakers (for example, a conversation about travel arrangements), and in Section 2, there is a monologue in (for example, a speech about local facilities). The final two sections deal with situations set in educational and training contexts. In Section 3, there is a conversation between two main speakers (for example, two university students in discussion, perhaps guided by a tutor), and in Section 4, there is a monologue on an academic subject.</p><p>The recordings are heard only once. They include a range of accents, including British, Australian, New Zealand, American and Canadian.</p></td></tr><tr><th>Timing</th><td>Approximately 30 minutes (plus 10 minutes transfer time).</td></tr><tr><th>No. of questions</th><td>40</td></tr><tr><th>Task types</th><td>A variety of question types are used, chosen from the following: multiple choice, matching, plan/map/diagram labelling, form/note/table/flow-chart/summary completion, sentence completion.</td></tr><tr><th>Answering</th><td>Test takers write their answers on the question paper as they listen and at the end of the test are given 10 minutes to transfer their answers to an answer sheet. Care should be taken when writing answers on the answer sheet as poor spelling and grammar are penalised.</td></tr><tr><th>Marks</th><td>Each question is worth 1 mark.<br><br></td></tr></tbody></table>',
                'image' => '/img/blog1.png',
                'start_time' => $faker->dateTime(),
                'total_students' => random_int(1, 30),
                'content' => (string) json_encode([41, 42, 43, 44, 45])
            ]);
        }
    }
}
