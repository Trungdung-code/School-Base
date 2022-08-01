<?php

use Illuminate\Database\Seeder;

class ActivityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $activity = new \App\Models\Activity();
        $activity->name = "Eduma Autumn 2017";
        $activity->slug = str_slug("Eduma Autumn 2017");
        $activity->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
typesetting, remaining essentially unchanged.";
        $activity->content = "<ul class='thim-list-content'>
<li>Over 37 lectures and 55.5 hours of content!</li>
<li>LIVE PROJECT End to End Software Testing Training Included.</li>
<li>Learn Software Testing and Automation basics from a professional trainer from your own desk.</li>
<li>Information packed practical training starting from basics to advanced testing techniques.</li>
<li>Best suitable for beginners to advanced level users and who learn faster when demonstrated.</li>
<li>Course content designed by considering current software testing technology and the job market.</li>
<li>Practical assignments at the end of every session.</li>
<li>Practical learning experience with live project work and examples.</li></ul>";
        $activity->start = new DateTime('17-06-2018 8:00');
        $activity->finish = new DateTime('17-06-2018 18:00');
        $activity->address = "Aeon Mall, Long Biên, Hà Nội";

        $activity->save();
    }
}
