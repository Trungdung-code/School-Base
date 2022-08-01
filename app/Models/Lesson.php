<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Lesson extends Model
{
    protected $fillable = ["section_id", "name", "intro", "duration"];

    const HOMEWORK_PENDING = 'pending';
    const HOMEWORK_DONE = 'done';

    public function section()
    {
        return $this->belongsTo('App\Models\Section');
    }

    public function materials()
    {
        return $this->morphMany(Resource::class, 'resourceable');
    }

    public function questionBlock()
    {
        return $this->belongsTo('App\Models\QuestionBlock', 'question_block_id');
    }

    public function isOpened($classId)
    {
        if ($this->startTime($classId) < Carbon::now()) {
            return true;
        }
        return false;
    }

    public function isOverdue($classId)
    {
        if ($this->endTime($classId) < Carbon::now()) {
            return true;
        }
        return false;
    }

    public function startTime($classId)
    {
        $myClass = MyClass::findOrFail($classId);
        $curriculum = $this->section->curriculum;
        $sections = $curriculum->sections;
        $duration = 0;
        foreach ($sections as $section) {
            $lessons = $section->lessons;
            foreach ($lessons as $lesson) {
                if ($lesson->id == $this->id) {
                    return $myClass->start_time->addDays($duration);
                } else {
                    $duration += $lesson->duration;
                }
            }
        }
    }

    public function endTime($classId)
    {
        return $this->startTime($classId)->addDays($this->duration);
    }

    public function users()
    {
        return $this->belongsToMany('App\Models\User', 'user_lessons')->withPivot('start_time', 'attempt', 'score', 'block_number', 'hw_status');
    }

    public function calculatePoint($user_id = null)
    {
        $point = 0;
        $qbs = $this->questionBlocks;
        foreach ($qbs as $qb) {
            foreach ($qb->questions as $question) {
                $point += $question->calculatePoint($user_id);
            }
        }
        return $point;
    }

    public function isReviewReady()
    {
        $wquestions = array();
        $uid = \Auth::user()->id;
        foreach ($this->questionBlocks as $questionBlock) {
            foreach ($questionBlock->questions as $question) {
                if ($question->type == Question::TYPE_7) {
                    if ($question->users != null)
                        if ($question->users->contains($uid)) {
                           array_push($wquestions, $question);
                        }
                }
            }
        }
        if(count($wquestions) <= 0)
            return false;
        foreach($wquestions as $question)
        {
            if ($question->users()->find($uid)->pivot->review_status == UserQuestion::WAITING_FOR_REVIEW) {
                return false;
            }
        }
        return true;
    }

    public function hasHomeWork()
    {
        if (count($this->questionBlocks) > 0) {
            return true;
        }else{
            return false;
        }
    }

    public function course()
    {
        return $this->section->course;
    }
}
