<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Elasticquent\ElasticquentTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Course extends Model
{
//    use ElasticquentTrait;

    /**
     * return the video intro of this course from the resource
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function videoIntro()
    {
        return $this->morphOne(Resource::class, 'resourceable');
    }

    /**
     * return the category of this course
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function category_group()
    {
        return $this->category()
            ->join('category_groups', 'category_groups.id', '=', 'categories.category_group_id')
            ->select(DB::raw('category_groups.*'));
    }

    public function curriculum()
    {
        return $this->hasOne('App\Models\Curriculum');
    }

    /**
     * check
     * @return bool
     */
    public function hasClass()
    {
        $curri = $this->curriculum;
        if ($curri == null)
            return false;
        if (count($curri->incomingClasses) > 0) {
            foreach ($curri->incomingClasses as $myClass) {
                if (Auth::user()->isClassAvailable($myClass->id)) {
                    return true;
                }
            }
        }
        return false;
    }

    public function sections()
    {
        return $this->hasMany('\App\Models\Section');
    }

    public function lessons()
    {
        return $this->hasManyThrough('\App\Models\Lesson',
            '\App\Models\Section',
            'course_id',
            'section_id',
            'id', 'id');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function scopeDrafted($query)
    {
        return $query->where('status', 'drafted');
    }

    public function scopeAvailable($query)
    {
        return $query->where('status', 'available');
    }

    public function scopeExpired($query)
    {
        return $query->where('status', 'expired');
    }

    public function students()
    {
        return $this->belongsToMany('App\Models\User', 'user_courses', 'course_id', 'user_id');
    }

    public function waiting_students()
    {
        return $this->belongsToMany('App\Models\User', 'user_courses', 'course_id', 'user_id')
            ->wherePivot('status', 1);
    }

    public function learning_students()
    {
        return $this->belongsToMany('App\Models\User', 'user_courses', 'course_id', 'user_id')
            ->wherePivot('status', 2);
    }

    public function question_blocks()
    {
        $question_blocks = collect(json_decode($this->quizzes))->map(function ($id) {
            return QuestionBlock::findOrFail($id);
        });
        return $question_blocks;
    }

    public function tags()
    {
        return $this->belongsToMany('\App\Tag', 'tags_pivot_table',
            'object_id', 'tag_name')
            ->wherePivot('object_type', 'course');
    }

    public function members()
    {
        return $this->hasMany('\App\Models\Member');
    }

    public function answers()
    {
        return $this->hasMany('\App\Models\Answer');
    }
}
