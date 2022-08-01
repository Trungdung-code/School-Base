<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class AnswerController extends Controller
{
    public function store($cid, $qid, Request $request)
    {
        $ans = $request->get('answer');
//        $dataStore = $request->get('index');
        $user = \Auth::user();
        $answer = Answer::where('user_id', $user->id)->where('question_id', $qid)->where('contest_id', $cid)->first();
        if ($answer != null) {
            $answer->answer = $ans;
            $answer->save();
        } else {
            $answer = new Answer();
            $answer->user_id = $user->id;
            $answer->contest_id = $cid;
            $answer->question_id = $qid;
            $answer->answer = $ans;
            $answer->save();
        }


    }

    public function show($cid, $qid, Request $request)
    {
        $index = $request->get('index');
        $user = \Auth::user();
        $answer = Answer::where('user_id', $user->id)->where('contest_id', $cid)->where('question_id', $qid)->first();
//        $true_answer = Question::where('question_id', $qid)->first();
        if ($answer != null) {
            return $answer->answer;
        } else {
            return array();
        }
//        return $true_answer + "abc";

    }

    public function showTrueAnswer($cid, $qid, Request $request)
    {
        $index = $request->get('index');
        $user = \Auth::user();
        $answer = Answer::where('user_id', $user->id)->where('contest_id', $cid)->where('question_id', $qid)->first();
        $question = Question::find($qid);
        $true_answer = $question->true_answer;
        if ($answer != null) {
            return ['answer' => json_decode($answer->answer), 'true_answer' => $true_answer];
        } else {
            return null;
        }
    }

    public function showTrueAnswerSortWord($cid, $qid, Request $request)
    {
        $index = $request->get('index');
        $user = \Auth::user();
        $answer = Answer::where('user_id', $user->id)->where('contest_id', $cid)->where('question_id', $qid)->first();
        $question = Question::find($qid);
        $true_answer = $question->true_answer;
        if ($answer != null) {
            return ['answer' => json_decode($answer->answer), 'true_answer' => json_decode($true_answer)];
        } else {
            return null;
//            return ['answer'=>array(),'true_answer'=>array()];
        }
    }

    public function showTrueAnswerSortSentences($cid, $qid, Request $request)
    {
        $index = $request->get('index');
        $user = \Auth::user();
        $answer = Answer::where('user_id', $user->id)->where('contest_id', $cid)->where('question_id', $qid)->first();
        $question = Question::find($qid);
        $true_answer = $question->true_answer;
        if ($answer != null) {
            return ['answer' => json_decode($answer->answer), 'true_answer' => json_decode($true_answer)];
        }
        return ['answer' => array(), 'true_answer' => json_decode($true_answer)];

//        return $true_answer;
    }

    public function showTrueAnswerEnterWords($cid, $qid, Request $request)
    {
        $index = $request->get('index');
        $user = \Auth::user();
        $answer = Answer::where('user_id', $user->id)->where('contest_id', $cid)->where('question_id', $qid)->first();
        $question = Question::find($qid);
        $true_answer = $question->true_answer;
        return $true_answer;
    }

    public function showTrueAnswerEdit($cid, $qid, Request $request)
    {
        $index = $request->get('index');
        $user = \Auth::user();
        $answer = Answer::where('user_id', $user->id)->where('contest_id', $cid)->where('question_id', $qid)->first();
        $question = Question::find($qid);
        $true_answer = $question->true_answer;
        if ($answer != null) {
            return ['answer' => $answer->answer, 'true_answer' => $true_answer];
        } else {
            return ['answer' => "", 'true_answer' => $true_answer];
        }
    }
}
