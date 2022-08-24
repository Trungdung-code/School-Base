<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    public function examable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function question_blocks()
    {
        return $this->hasMany(QuestionBlock::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
