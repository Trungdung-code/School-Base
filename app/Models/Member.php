<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'user_courses';

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }
}
