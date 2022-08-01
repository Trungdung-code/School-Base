<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserLesson extends Model
{
    const STATUS_WAITING_FOR_REVIEW = "waiting";
    const  STATUS_REVIEWED = "review";
    const  STATUS_NORMAL = "normal";
    const MAX_ATTEMPT = 200;
    protected $fillable = [
        "user_id",
        "lesson_id",
        "attempt",
        "status",
        "score"
    ];
}
