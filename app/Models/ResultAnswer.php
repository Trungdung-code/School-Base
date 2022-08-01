<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultAnswer extends Model
{
    use HasFactory;
    protected $fillable = [
        'answers',
        'answers_correct',
        'answers_wrong',
        'question_id',
        'contest_result_id',
        'type'
    ];
}
