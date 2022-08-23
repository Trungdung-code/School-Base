<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function exams()
    {
        return $this->morphMany(Exam::class, 'examable');
    }

    public function revises()
    {
        return $this->hasMany(Revise::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
