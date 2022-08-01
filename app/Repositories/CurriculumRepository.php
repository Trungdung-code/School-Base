<?php

namespace App\Repositories;
use App\Models\Curriculum;

class CurriculumRepository
{
    public function curricula()
    {
        return Curriculum::all();
    }

    public function curriculum($id)
    {
        return Curriculum::findOrFail($id);
    }

    public function availableCurriculum($id)
    {
        $curricula = Curriculum::whereNull('course_id')->orWhere('course_id',$id)->get();
        return $curricula;
    }
}
