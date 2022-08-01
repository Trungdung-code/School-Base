<?php

use Illuminate\Database\Seeder;
use Seeder\Web\LessonsTableSeeder;
use Seeder\Web\UserTableSeeder;
use Seeder\Web\CoursesTableSeeder;
use Seeder\Web\CurriculaTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('resources')->truncate();
/*        $this->call(UserTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(CurriculaTableSeeder::class);
        $this->call(LessonsTableSeeder::class);*/
/*        $this->call(ContestsTableSeeder::class);*/
/*        $this->call(QuestionsBlockSeeder::class);
        $this->call(UpdateContestsTable::class);*/
//        $this->call(ContestsTableStatusColumnSeeder::class);
//        $this->call(TagSeeder::class);
//        $this->call(BlogsTableSeeder::class);
        $this->call(ActivityTableSeeder::class);
    }
}
