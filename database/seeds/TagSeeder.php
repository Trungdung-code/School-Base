<?php

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{

    public static $tags = ["ielts", 'sat', 'toelf', 'gre'];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this::$tags as $tag_name) {
            $tag = new \App\Tag();
            $tag->name = $tag_name;
            $tag->timestamps = true;
            $tag->save();
        }
    }
}
