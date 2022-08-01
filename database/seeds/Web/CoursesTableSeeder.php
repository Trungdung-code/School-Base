<?php
namespace Seeder\Web;

use App\Models\CategoryGroup;
use App\Models\Course;
use DB;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //truncate category_groups, categories, courses table
        DB::table('category_groups')->truncate();
        DB::table('categories')->truncate();
        DB::table('courses')->truncate();

        $faker = Factory::create();
        //create 4 category_group
        $groups = ["IELTS", "TOEFL", "GMAT", "TOEIC"];
        $categoryNames = ["Foundation", "Listening", "Writing", "Speaking", "Reading"];
        $courseNames = ["Pronunciation", "Vocabulary", "Grammar"];

        foreach ($groups as $group) {
            $courseGroupId = DB::table('category_groups')->insertGetId([
                'name' => $group,
                'description' => $faker->sentence(6)
            ]);
            DB::table('resources')->insert([
                'resourceable_id' => $courseGroupId,
                'resourceable_type' => CategoryGroup::class,
                'path' => $faker->imageUrl()
            ]);
            //create 4 category for each category group
            foreach ($categoryNames as $categoryName) {
                $categoryId = DB::table('categories')->insertGetId([
                    "category_group_id" => $courseGroupId,
                    "name" => $categoryName,
                ]);
                //create 4 courses for each category
                foreach ($courseNames as $courseName) {
                    $courseId = DB::table('courses')->insertGetId([
                        "category_id" => $categoryId,
                        "name" => $courseName,
                        "description" => $faker->text(),
                    ]);
                    DB::table('resources')->insert([
                        'resourceable_id' => $courseId,
                        'resourceable_type' => Course::class,
                        'path' => "https://player.vimeo.com/video/100426447"
                    ]);
                }
            }
        }
    }
}
