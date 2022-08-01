<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $table = "user_contests";

    public function contest()
    {
        return $this->belongsTo(Contest::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function answers()
    {
        return Answer::where('user_id', $this->user_id)->where('target_type', 'contest')->where('target_id', $this->contest_id);
    }

    public function questions()
    {
        return $this->hasMany(Question::class)->all();
    }

    public function getQuestionById($id)
    {
        return $this->questions()->findOrFail($id);
    }
}
