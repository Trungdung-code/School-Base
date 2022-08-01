<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class MyClass extends Model
{
    protected $fillable = [
        'name', 'curriculum_id', 'start_time', 'slot'
    ];
    protected $dates = ['start_time'];
    

    public function endTime()
    {
        $curriculum = $this->curriculum;
        $days = $curriculum->duration();
        $endDay = $this->start_time->addDay($days);
        return $endDay;
    }
    public function curriculum()
    {
        return $this->belongsTo('App\Models\Curriculum');
    }

    public function users()
    {
        return $this->belongsToMany('App\Models\User', 'user_classes');
    }
    public function waitList()
    {
        return $this->users()->wherePivot('state', UserClass::STATUS_PENDING);
    }
    public function activeList()
    {
        return $this->users()->wherePivot('state', UserClass::STATUS_JOINED);
    }
    public function bannedList()
    {
        return $this->users()->wherePivot('state', UserClass::STATUS_BANNED);
    }

    public function lessons()
    {
        $result = array();
        foreach($this->curriculum->sections as $section)
        {
            foreach ($section->lessons as $lesson)
            {
                array_push($result, $lesson);
            }
        }
        return $result;
    }

    public function pendingWriting()
    {
        $answers = $this->writingAnswerList();
        $result = array_filter($answers, function($item){
            return $item->review_status == UserQuestion::WAITING_FOR_REVIEW;
        });
        return $result;
    }

    public function pendingSpeaking()
    {
        $answers = $this->speakingAnswerList();
        $result = array_filter($answers, function($item){
            return $item->review_status == UserQuestion::WAITING_FOR_REVIEW;
        });
        return $result;
    }

    public function reviewedWriting()
    {
        $answers = $this->writingAnswerList();
        $result = array_filter($answers, function($item){
            return $item->review_status == UserQuestion::REVIEWED;
        });
        return $result;
    }

    public function reviewedSpeaking()
    {
        $answers = $this->speakingAnswerList();
        $result = array_filter($answers, function($item){
            return $item->review_status == UserQuestion::REVIEWED;
        });
        return $result;
    }

    public function writingAnswerList()
    {
        $questions = $this->writingQuestionList();
        $students = $this->activeList()->get();
        //$answers = UserQuestion::all();
        $answers = new Collection();
        foreach($students as $student)
        {
            $answers =  $answers->merge(UserQuestion::where('user_id', $student->id)->get());
        }

        $result = array();
        //todo
        //return $result;

        foreach ($answers as $answer)
        {
                foreach ($questions as $question)
                {
                    if($question->id == $answer->question_id){
                        array_push($result, $answer);
                        break;
                    }
                }
        }
        return $result;
    }

    public function speakingAnswerList()
    {
        $questions = $this->speakingQuestionList();
        $students = $this->activeList()->get();
        //$answers = UserQuestion::all();
        $answers = new Collection();
        foreach($students as $student)
        {
            $answers =  $answers->merge(UserQuestion::where('user_id', $student->id)->get());
        }

        $result = array();
        //todo
        //return $result;

        foreach ($answers as $answer)
        {
            foreach ($questions as $question)
            {
                if($question->id == $answer->question_id){
                    array_push($result, $answer);
                    break;
                }

            }
        }
        return $result;
    }

    public function writingQuestionList()
    {
        $result = array();
        foreach($this->curriculum->sections as $section)
        {
            foreach ($section->lessons as $lesson)
            {
                //only get questions of lessons has already done
                if($lesson->isOverdue($this->id)){
                    foreach($lesson->questionBlocks as $questionBlock)
                    {
                        foreach($questionBlock->questions as $question)
                        {
                            if($question->type == Question::TYPE_7){
                                array_push($result, $question);
                            }
                        }
                    }
                }
            }
        }
        return $result;
    }
    public function speakingQuestionList()
    {
        $result = array();
        foreach($this->curriculum->sections as $section)
        {
            foreach ($section->lessons as $lesson)
            {
                //only get questions of lessons has already done
                if($lesson->isOverdue($this->id)){
                    foreach($lesson->questionBlocks as $questionBlock)
                    {
                        foreach($questionBlock->questions as $question)
                        {
                            if($question->type == Question::TYPE_13){
                                array_push($result, $question);
                            }
                        }
                    }
                }
            }
        }
        return $result;
    }
}

