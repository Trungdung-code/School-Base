<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function question_block()
    {
        return $this->belongsTo(QuestionBlock::class);
    }

    public function user_answers()
    {
        return $this->hasMany(UserAnswer::class);
    }

    public function bookmarks()
    {
        return $this->morphMany(Bookmark::class, 'bookmarkable');
    }
}
