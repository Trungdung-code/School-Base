<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContestResult extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'contest_id',
        'total_point',
        'answer_correct',
        'time_send'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function resultAnswers()
    {
        return $this->hasMany(ResultAnswer::class, 'contest_result_id');
    }

    public function scopeTypeContest($query)
    {
        return $query->where('type', CategoryGroup::UNIVERSITY);
    }
}
