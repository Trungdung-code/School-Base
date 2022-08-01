<?php

namespace App\Repositories;
use App\Models\Course;
use App\Models\Resource;

class CourseRepository
{
    public function courses()
    {
        return Course::all();
    }

    public function course($id)
    {
        return Course::findOrFail($id);
    }

    public function createByName($courseName, $id)
    {
        $course = new Course();
        $course->name = $courseName;
        $course->category_id = $id;
        $course->save();
        Resource::create([
                        'resourceable_id' => $course->id,
                        'resourceable_type' => Course::class,
                        'path' => ""
                    ]);
        return $course;
    }
}
