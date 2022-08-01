<?php

namespace App\Repositories;

use App\Models\Lesson;

class LessonRepository
{
    public function lessons()
    {
        return Lesson::all();
    }

    public function lesson($id)
    {
        return Lesson::findOrFail($id);
    }
}
