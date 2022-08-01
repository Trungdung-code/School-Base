<?php
namespace Seeder\Web;

use App\Models\CategoryGroup;
use App\Models\Course;
use App\Models\Curriculum;
use DB;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CurriculaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //truncate category_groups, categories, courses table
        DB::table('curricula')->truncate();
        $faker = Factory::create();
        for ($i = 1; $i < 10; $i++) {
            Curriculum::create([
                'course_id' => null,
                'name' => $faker->sentence()
            ]);
        }
    }
}
