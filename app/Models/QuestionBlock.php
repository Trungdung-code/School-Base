<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionBlock extends Model
{
    public static $LEVELS = [
        'grade1' => 'Grade 1',
        'grade2' => 'Grade 2',
        'grade3' => 'Grade 3',
        'grade4' => 'Grade 4',
        'grade5' => 'Grade 5',
        'grade6' => 'Grade 6',
        'grade7' => 'Grade 7',
        'grade8' => 'Grade 8',
        'grade9' => 'Grade 9',
        'grade10' => 'Grade 10',
        'grade11' => 'Grade 11',
        'grade12' => 'Grade 12',
        'beginners' => 'Beginners',
        'preintermediate' => 'Pre-Intermediate',
        'intermediate' => 'Intermediate',
        'advanced' => 'Advanced',
        'mastery' => 'Mastery',
        'talent' => 'Talent'
    ];
    public const READING = 'reading';
    public const READING2 = 'reading2';
    public const READING3 = 'reading3';
    public const WRITING = 'writing';
    public const PRONUNCTIATION = 'pronunciation';
    public const Foundation = 'foundation';
    public const GRAMMAR = 'grammar';
    public const COMMUNICATION = 'communication';
    public const  VOCABULARY = 'vocabulary';
    public static $TYPES = [
        "reading" => "Reading",
        "writing" => "Writing",
        "listening" => "Listening",
        "speaking" => "Speaking",
        "grammar" => "Grammar",
        "pronunciation" => "Pronunciation",
        "vocabulary" => "Vocabulary",
        'communication' => "Communication",
    ];

    public function questions()
    {
        return $this->hasMany('App\Models\Question');
    }

    public function materials()
    {
        return $this->morphMany(Resource::class, 'resourceable');
    }

    public function lesson()
    {
        return $this->belongsTo('App\Models\Lesson');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
