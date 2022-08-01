<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserQuestion extends Model
{
    const WAITING_FOR_REVIEW = 'wait';
    const REVIEWED = 'reviewed';
    protected $fillable = [
        'user_id',
        'question_id',
        'point',
        'answer',
        'review_status',
        'review'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function question()
    {
        return $this->belongsTo('App\Models\Question');
    }
}
