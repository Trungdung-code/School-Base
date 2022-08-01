<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = ["curriculum_id", "name", "description"];

    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }

    public function lessons()
    {
        return $this->hasMany('App\Models\Lesson');
    }

    /**
     * Trả về danh sách bài học đã được người dùng học
     * @return array
     */
    public function viewedLessons()
    {
        if(!Auth::check())
            return [];
        $user = \Auth::user();
        $viewedLessons = $user->lessons->whereIn('id', $this->lessons()->pluck('id')->toArray())->all();
        return $viewedLessons;
    }
}
