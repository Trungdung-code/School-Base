<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 'user_questions';
    const WAITING_FOR_REVIEW = 'wait';
    const REVIEWED = 'reviewed';
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function question()
    {
        return $this->belongsTo('App\Models\Question');
    }
}
