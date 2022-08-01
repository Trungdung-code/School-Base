<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contest extends Model
{
    //
    public $timestamps = false;

    protected $dates = [
        'start_time'
    ];

    public function question_blocks()
    {
        $question_blocks = collect(json_decode($this->content))->map(function($id) {
           return QuestionBlock::findOrFail($id);
        });

        return $question_blocks;

    }

    public function tags()
    {
        return $this->belongsToMany('\App\Tag', 'tags_pivot_table',
            'object_id', 'tag_name')
            ->wherePivot('object_type', 'contest');
    }

    public function scopeDrafted($query)
    {
        return $query->where('status', 'drafted');
    }

    public function scopeAvailable($query)
    {
        return $query->where('status', 'available');
    }

    public function scopeHidden($query)
    {
        return $query->where('status', 'hidden');
    }

    public function hasQuizId($qid)
    {
        $qblocks = json_decode($this->content);
        if($qblocks == null)
            return false;
        if(in_array($qid, $qblocks)){
            return true;
        }
        return false;
    }
    public function waiting_students()
    {
        return $this->belongsToMany('App\Models\User', 'user_contests', 'contest_id', 'user_id')
            ->wherePivot('status', 1);
    }

    public function learning_students()
    {
        return $this->belongsToMany('App\Models\User', 'user_contests', 'contest_id', 'user_id')
            ->wherePivot('status', 2);
    }

    public function participants()
    {
        return $this->hasMany(Participant::class);
    }

}
