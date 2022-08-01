<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    public const READING = 'Reading';
    public const WRITING = 'Writing';
    public const PRONUNCTIATION = 'Pronunciation';
    public const Foundation = 'Foundation';
    public const  VOCABULARY = 'vocabulary';
    public const COMMUNICATION = 'Communication';

    /**
     * return group has this category
     */
    public function categoryGroup()
    {
        return $this->belongsTo('App\Models\CategoryGroup');
    }

    /**
     * return all courses belong to this category
     */
    public function courses()
    {
        return $this->hasMany('App\Models\Course');
    }

    public function hasClass()
    {
        $courses = $this->courses;
        foreach ($courses as $course) {
            if ($course->hasClass()) {
                return true;
            }
        }
        return false;
    }
}
