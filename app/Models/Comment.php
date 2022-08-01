<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";
    protected $fillable = ['user_id', 'course_id', 'content', 'rating'];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
