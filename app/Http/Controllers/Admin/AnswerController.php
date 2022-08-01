<?php

namespace App\Http\Controllers\Admin;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

use App\Http\Requests;

class AnswerController extends Controller
{
    //teacher feedback
    public function showFeedbackForm($id)
    {
        $answer = Answer::findOrFail($id);
        if ($answer->question_type == Question::TYPE_7) {
            return view('teacher.writingFeedback', compact('answer'));
        } else {
            return view('teacher.speakingFeedback', compact('answer'));
        }
    }

    public function saveFeedback($id, Request $request)
    {
        $answer = Answer::findOrFail($id);
        $answer->review = $request->get('review');
        $answer->review_status = Answer::REVIEWED;
        $answer->save();
        return redirect()->back();
    }
}
