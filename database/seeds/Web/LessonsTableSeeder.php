<?php
namespace Seeder\Web;

use App\Models\Course;
use App\Models\Curriculum;
use App\Models\Lesson;
use App\Models\Section;
use DB;
use Faker\Factory;
use Illuminate\Database\Seeder;

class LessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->truncate();
        DB::table('lessons')->truncate();
        $faker = Factory::create();
        $curricula = Curriculum::all();
        foreach ($curricula as $curriculum)
        {
            $count = rand(3,5);
            for($i = 1; $i<= $count; $i++)
            {
                //make sections for this courses
                $section = new Section();
                $section->name = $faker->sentence(5);
                $section->description = $faker->text();
                $section->curriculum_id = $curriculum->id;
                $section->save();
                //make lessons for this section
                $lessonCount = rand(3,7);
                for($j = 1; $j < $lessonCount; $j++)
                {
                    $lesson = new Lesson();
                    $lesson->name = $faker->sentence(5);
                    $lesson->intro = $faker->sentence(5);
                    $lesson->section_id = $section->id;
                    $lesson->duration = 1;
                    $lesson->save();
                }
            }
        }
    }
}
