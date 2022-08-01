<?php

use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Blog::truncate();
        $faker = Faker\Factory::create('en_US');
        $limit = 5;
        for ($i = 0 ; $i < $limit; $i++)
        {
            $title = $faker->text(50);
            \App\Models\Blog::create([
                "title" => $title,
                "content" => $faker->realText(2000),
                "recapitulation" => $faker->realText(200),
                "slug" => str_slug($title),
                "display_image" => "/img/studyingboy.png",
            ]);
        }

    }
}
