<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Auth;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Input;
use Response;

class MediaController extends Controller
{
    public function store(Request $request)
    {
        $destinationPath = 'uploads/speaking';
        $fileName = time()."-".str_random(8).'.ogg';
        $qid = $request->qid;
        $cid = $request->cid;
        Input::file('file')->move($destinationPath,$fileName);
        $ans = $destinationPath.'/'.$fileName;
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

        return Response::json(['success'=>true,'file'=>asset($destinationPath.'/'.$fileName)]);
//        return "hello";
    }
}
