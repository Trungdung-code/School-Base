<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryGroup;
use App\Models\Contest;
use App\Models\ContestResult;
use App\Models\Participant;
use App\Models\Question;
use App\Models\QuestionBlock;
use App\Models\ResultAnswer;
use App\Models\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class ContestController extends Controller
{

    public function index()
    {
        $contests = Contest::available()->get()->reverse();
        $latest_contests = Contest::available()
            ->take(5)->get();
        return view('guests.contests_index', compact('contests', 'latest_contests'));
    }

    public function show(Request $request)
    {

//        $course = Course::find($request->courseID);
//        $relate_courses = DB::table('courses')->take(2)->get();
//        $latest_courses = DB::table('courses')->orderBy('updated_at', 'desc')->take(3)->get();
        $contest = Contest::available()->find($request->contestID);
//        $contest = Contest::all()->first();
        if (Auth::check()) {
            $student = Auth::user();
            try {
                $status = (int)$student->contests->find($contest->id)->pivot->status;
            } catch (\Exception $e) {
                $status = 0;
            }
        } else {
            $status = 0;
        }
        $contests = Contest::available()->take(3)->get();

        return view('guests.contest_show', compact('contest', 'contests', 'status'));
    }

//    public function show_quizzes()
//    {
//        $contest = Contest::all()->first();
//        $contests = Contest::all();
//        return view('guests.contest_wait_test', compact('contest', 'contests'));
//    }

//    public function get_start_time(Request $request)
//    {
//        $contest = Contest::find($request->contestID);
//        $datetime = $contest->start_time;
//        return json_encode($datetime);
//    }
    public function get_contents(Request $request)
    {
        $contest = Contest::find($request->contestID);
        $content = json_decode($contest->content, true);
        $start_time = Carbon::parse($contest->start_time);
        $end_time = Carbon::parse($contest->start_time);
        $duration = $contest->duration;
        $end_time->addMinutes($duration);
        $now = Carbon::now();
//        return $now.'-'.$start_time;
        if ($now < $start_time) {
            return view('guests.contest_wait_test', compact('contest'));
        } else {
            $user = auth()->user();
            if(!$user){
                return redirect(url('/login'));
            }else{
                $questionBlocks = $contest->question_blocks();
                $contestResult = $user->contestsResult->where('user_id', $user->id)
                    ->where('contest_id', $contest->id)->first();
                $countQuestion = 0;
                $questionBlocks->map(function ($block) use(&$countQuestion){
                    $countQuestion = $countQuestion + $block->questions->count();
                    return $block;
                });
                if($contestResult){
                    $data = $this->existsContestResult($contestResult, $questionBlocks, $start_time, $contest);
                    $time_send =  $data['time_send'];
                    $resultUserChooseQuestionID =  $data['resultUserChooseQuestionID'];
                    $resultUserChooseAnswers =  $data['resultUserChooseAnswers'];
                    $arrayChoose =  $data['arrayChoose'];
                    $arrayNotChoose =  $data['arrayNotChoose'];
                    $arrayAnswersCorrect =  $data['arrayAnswersCorrect'];
                    $answersCorrect =  $data['answersCorrect'];
                    $arrayAnswersWrong =  $data['arrayAnswersWrong'];
                    $answerWrong =  $data['answerWrong'];
                    $ranks =  $data['ranks'];
                    $message = $data['message'];
                    $total_point = $data['total_point'];
                    $answer_correct = $data['answer_correct'];
                   
                    return view('national_exam.wait_test',  compact('total_point', 'contest',
                        'answer_correct', 'time_send', 'countQuestion', 'questionBlocks','resultUserChooseQuestionID', 'resultUserChooseAnswers',
                        'arrayChoose', 'arrayNotChoose', 'arrayAnswersCorrect', 'answersCorrect', 'arrayAnswersWrong', 'answerWrong',
                    'ranks'));
                }
            }
            if($questionBlocks->isEmpty()){
                $message = 'Chưa có khối câu hỏi nào để hiện thị';
                return view('guests.contest_wait_test', compact('message', 'contest'));
            }
            $questionBlock = $request->qblock != null ? $questionBlocks->where('id', intval($request->qblock))->first() : $questionBlocks->first();
            if($questionBlock->questions->isEmpty()){
                $message = 'Chưa có câu hỏi nào để hiện thị';
                return view('guests.contest_wait_test', compact('message', 'contest'));
            }
            $questionId = $request->question == null ? $questionBlock->questions()->first()->id : $request->question;
            $question = $questionBlock->questions()->findOrFail($questionId);
            //tìm câu hỏi trước và sau để hỗ trợ prev next
            $pos = 0;
            foreach ($questionBlock->questions as $key => $ques) {
                if ($ques->id == $question->id) {
                    $pos = $key;
                }
            }
            $prevPos = $pos - 1;
            $nextPos = $pos + 1;
            if ($pos == 0) {
                $prevPos = 0;
            }
            if ($pos == $questionBlock->questions->count() - 1) {
                $nextPos = $pos;
            }
            $prevId = $questionBlock->questions[$prevPos]->id;
            $nextId = $questionBlock->questions[$nextPos]->id;
            $qblock = $questionBlock;
            $qblocks = $questionBlocks;
            $index = 0;
            $participant = Participant::where('user_id', Auth::user()->id)->where('contest_id', $contest->id)->first();
            $userId = $participant->user_id;
            if ($now > $start_time and $now < $end_time) {
                if( $contest->type == CategoryGroup::UNIVERSITY){
                    return view('national_exam.show', compact('contest', 'questionBlock', 'questionBlocks',
                        'question', 'qblock', 'qblocks', 'index', 'prevId',
                        'nextId', 'pos', 'userId'));
                }
                return view('student.contest.show', compact('contest', 'questionBlock', 'questionBlocks',
                     'question', 'qblock', 'qblocks', 'index', 'prevId',
                     'nextId', 'pos', 'userId'));
            }
            else if ($now > $end_time) {
                $message = 'Bài thi này đã kết thúc !';
                return view('guests.contest_wait_test', compact('message', 'contest'));
//                 return view('student.contest.review', compact('contest', 'questionBlock', 'questionBlocks', 'question', 'qblock', 'qblocks', 'index', 'prevId', 'nextId', 'participant', 'pos', 'userId'));
            }
        }


    }

    public function existsContestResult($contestResult, $questionBlocks, $start_time, $contest)
    {
        $message = 'Your score is';
        $total_point = $contestResult->total_point;
        $answer_correct =$contestResult->answer_correct;
        $created_at = Carbon::parse($contestResult->created_at)->format('H:i:s');
        $contest_time_start = $start_time->format('H:i:s');
         $cenvertedTime = date('H:i:s',strtotime('2 seconds',strtotime($contest_time_start)));
        $time_work =date('H:i:s',(strtotime($created_at) - strtotime($cenvertedTime)));
        $time_send =  Carbon::parse($time_work)->format('i:s');
        // tất cả đáp án chọn
        $answersChoose = $contestResult->resultAnswers->where('type', CategoryGroup::UNIVERSITY);
        $questions = collect();
        $questionBlocks->map(function ($block) use(&$questions){
            $questions[] = $block->questions;
            return $block;
        });
        // tất cả đáp án có trong bài test
        $collectQuestions = collect();
        foreach ($questions->toArray() as $block) {
            foreach ($block as $question){
                $collectQuestions->push($question) ;
            }
        }
        //id đáp án đã chọn
        $resultUserChooseQuestionID = [];
        // câu trả lời đáp án chọn
        $resultUserChooseAnswers = [];
        foreach ($answersChoose as $rows) {
            $resultUserChooseQuestionID[$rows->question_id] = $rows->question_id;
            $resultUserChooseAnswers[$rows->question_id] = $rows->answers;
        }
        $questionsChoose = $collectQuestions->whereIn('id',$resultUserChooseQuestionID);
        $arrayChoose = array_column($questionsChoose->toArray(), 'id');
        $questionsNotChoose = $collectQuestions->whereNotIn('id', $resultUserChooseQuestionID);
        $arrayNotChoose = array_column($questionsNotChoose->toArray(), 'id');
        // đáp án đã chọn đúng
        $answersCorrectQuestionID = $answersChoose->whereNotNull('answers_correct')->map(function ($answerChoose) {
            return $answerChoose;
        })->keyBy('question_id');
        $answersCorrect = [];
        foreach ($answersCorrectQuestionID as $key => $item) {
            $answersCorrect[$key] = $item->answers_correct;
        }
        $arrayAnswersCorrect =  array_column($answersCorrectQuestionID->toArray(), 'question_id');
        //đáp án sai
        $answersWrongQuestionID = $answersChoose->whereNull('answers_correct')->map(function ($answerChoose) {
            return $answerChoose;
        })->keyBy('question_id');;
        $arrayAnswersWrong =  array_column($answersWrongQuestionID->toArray(), 'question_id');

        $answerWrong = [];
        foreach ($answersWrongQuestionID as $key => $item) {
            $answerWrong[$key] = $item->answers;
        }
        //rank contest
        $ranks = ContestResult::where('contest_id', $contest->id)->orderByDesc('total_point')->orderBy('time_send', 'asc')->get()->take(10);

        return ['ranks' => $ranks, 'time_send' => $time_send, 'resultUserChooseQuestionID' => $resultUserChooseQuestionID,
        'resultUserChooseAnswers' => $resultUserChooseAnswers, 'arrayChoose' => $arrayChoose, 'arrayNotChoose' => $arrayNotChoose,
        'arrayAnswersCorrect' => $arrayAnswersCorrect, 'answersCorrect' => $answersCorrect, 'arrayAnswersWrong' => $arrayAnswersWrong,
        'answerWrong' => $answerWrong, 'message' => $message, 'total_point' => $total_point, 'answer_correct' => $answer_correct];
    }

    public function resultExamEnglish(Request $request, $id)
    {
        $contest = Contest::findOrFail($id);
        $start_time = Carbon::parse($contest->start_time);
        $end_time = Carbon::parse($contest->start_time);
        $duration = $contest->duration;
        $end_time->addMinutes($duration);
        $questionBlocks = $contest->question_blocks();
        $countQuestion = 0;
        $questionBlocks->map(function ($block) use(&$countQuestion){
            $countQuestion = $countQuestion + $block->questions->count();
            return $block;
        });
        $now = Carbon::now();
        if ($now < $start_time) {
            return abort(403, 'Cấm ! Bài thi này đã kiểm tra xong rồi !');
        } else {
            $user = auth()->user();
            if(!$user){
                return redirect(url('/login'));
            }else{
                $contestResult = $user->contestsResult->where('user_id', $user->id)
                    ->where('contest_id', $contest->id)->first();
                if($contestResult){
                    $data = $this->existsContestResult($contestResult, $questionBlocks, $start_time, $contest);
                    $time_send =  $data['time_send'];
                    $resultUserChooseQuestionID =  $data['resultUserChooseQuestionID'];
                    $resultUserChooseAnswers =  $data['resultUserChooseAnswers'];
                    $arrayChoose =  $data['arrayChoose'];
                    $arrayNotChoose =  $data['arrayNotChoose'];
                    $arrayAnswersCorrect =  $data['arrayAnswersCorrect'];
                    $answersCorrect =  $data['answersCorrect'];
                    $arrayAnswersWrong =  $data['arrayAnswersWrong'];
                    $answerWrong =  $data['answerWrong'];
                    $ranks =  $data['ranks'];
                    $message = $data['message'];
                    $total_point = $data['total_point'];
                    $answer_correct = $data['answer_correct'];
                   
                    return view('national_exam.wait_test', compact('message', 'contest', 'total_point', 'answer_correct', 'time_send',
                        'questionBlocks', 'countQuestion', 'resultUserChooseQuestionID', 'resultUserChooseAnswers',
                    'arrayChoose', 'arrayNotChoose', 'arrayAnswersCorrect', 'answersCorrect', 'arrayAnswersWrong', 'answerWrong',
                'ranks'));
                }
            }
            $contentTest = json_decode($contest->content);
            $questionAll = $request->except('_token');
            $arrayAnswer = [];
            $allResultChoose = [];
            foreach ($questionAll as $answer => $value){
//                $answerID = explode('_', $answer);
                $arrayAnswer[$answer] = $answer;
                $allResultChoose[$answer] = $value;
            }
            $questionExistsAndAnswerTrue = Question::whereIn('id',$arrayAnswer)->get()->filter(function ($question)
            use ($allResultChoose){
                if($question->true_answer === $allResultChoose[$question->id]){
                    return $question;
                }
            })->keyBy('id');
            $arrayQuestionExistsAndAnswerTrue = array_column($questionExistsAndAnswerTrue->toArray(), 'id');
            $arrayCorrect =
            // tinh ket qua
            $total_point = $questionExistsAndAnswerTrue->count()*0.2;
            $answer_correct =  $questionExistsAndAnswerTrue->count();
            $contestResult = ContestResult::create([
                'user_id' => auth()->user()->id,
                'contest_id' => $contest->id,
                'total_point' => $total_point,
                'answer_correct' => $questionExistsAndAnswerTrue->count()
            ]);
            $questions = collect();
            $questionBlocks->map(function ($block) use(&$questions){
                $questions[] = $block->questions;
                return $block;
            });
            $questionOfContest = collect();
                // tất cả đáp án có trong bài test
            foreach ($questions->toArray() as $block) {
                foreach ($block as $question){
                    $questionOfContest->push($question) ;
                }
            }
            $questionOfContest = $questionOfContest->map(function ($question) {
                return $question;
            })->keyBy('id');

            foreach ($questionAll as $answer => $value){
                // lưu đáp án
                $resultAnswers = ResultAnswer::create([
                    'question_id' => $answer,
                    'answers' => $value,
                    'contest_result_id' => $contestResult->id,
                    'type' => CategoryGroup::UNIVERSITY
                ]);
                if(in_array($answer,$arrayQuestionExistsAndAnswerTrue)) {
                    $resultAnswers->update(['answers_correct' => $questionExistsAndAnswerTrue[$answer]->true_answer]);
                }
                if(!in_array($answer,$arrayQuestionExistsAndAnswerTrue)) {
                    $resultAnswers->update(['answers_wrong' => $questionOfContest[$answer]['true_answer']]);
                }
            }
            $resultAnswers->update(['contest_result_id' => $contestResult->id]);
            if($questionBlocks->isEmpty()){
                $message = 'Chưa có câu hỏi nào để hiện thị';
                return view('guests.contest_wait_test', compact('message', 'contest'));
            }
             //rank contest
             $data = $this->existsContestResult($contestResult, $questionBlocks, $start_time, $contest);
             $time_send =  $data['time_send'];
             $resultUserChooseQuestionID =  $data['resultUserChooseQuestionID'];
             $resultUserChooseAnswers =  $data['resultUserChooseAnswers'];
             $arrayChoose =  $data['arrayChoose'];
             $arrayNotChoose =  $data['arrayNotChoose'];
             $arrayAnswersCorrect =  $data['arrayAnswersCorrect'];
             $answersCorrect =  $data['answersCorrect'];
             $arrayAnswersWrong =  $data['arrayAnswersWrong'];
             $answerWrong =  $data['answerWrong'];
             $ranks =  $data['ranks'];
             $contestResult->update(['time_send' => Carbon::now()->format('H'.':'.$time_send)]);
            return view('national_exam.wait_test', compact('total_point', 'contest', 'questionBlocks', 'answer_correct', 'time_send',
             'countQuestion', 'resultUserChooseQuestionID', 'resultUserChooseAnswers',
             'arrayChoose', 'arrayNotChoose', 'arrayAnswersCorrect', 'answersCorrect', 'arrayAnswersWrong', 'answerWrong',
         'ranks'));
        }
    }

//    public function getReviewAnwers(Request $request, $id)
//    {
//        $contest = Contest::findOrFail($id);
//        $questionBlocks = $contest->question_blocks();
//        $data = [
//            'contest' => $contest,
//            'questionBlocks' => $questionBlocks
//        ];
//        return view('national_exam.show_answers')->with($data);
//    }

    public function showAnswersContest(Request $request, $id){
        $contest = Contest::findOrFail($id);
        $questionBlocks = $contest->question_blocks();
        if($questionBlocks->isEmpty()){
            $message = 'Chưa có câu hỏi nào để hiện thị';
            return view('guests.contest_wait_test', compact('message', 'contest'));
        }
        return view('national_exam.show_answers', compact('contest', 'questionBlocks'));
    }

    public function get_reviews(Request $request)
    {
        $contest = Contest::find($request->contestID);
        $content = json_decode($contest->content);

        $blocks = QuestionBlock::findMany($content);
        $block = QuestionBlock::find($content[$request->index]);
        $index = $request->index;
//        $user_answer = Answer::;

//        $start_time = Carbon::parse($contest->start_time);
//        $end_time = Carbon::parse($contest->start_time);
//        $duration = $contest->duration;
//        $end_time->addMinutes($duration);
//        $now = Carbon::now();
//        return $now.'-'.$start_time;
//        if ($now < $start_time) {
//            return view('guests.contest_wait_test', compact('contest', 'contests'));
//        } else if ($now > $start_time and $now < $end_time) {
//            return view('guests.contest_test', compact('contest', 'contests', 'blocks', 'block', 'index'));

//        } else if ($now > $end_time) {
        return view('guests.review_test', compact('contest', 'contests', 'blocks', 'block', 'index'));
//        }
//        return json_encode($content);
//        dd(json_encode($content));
    }


//    public function get_first_review(Request $request)
//    {
//        $contest = Contest::find(1);
//        $content = json_decode($contest->content);
//
//        $blocks = QuestionBlock::findMany($content);
//        $block = QuestionBlock::find($content[1]);
//        return view('guests.review_test', compact('contest', 'contests', 'blocks', 'block'));
////        return ($block);
//    }

    public function purchase(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $contest = Contest::available()->find($request->contest_id);
            $user->contests()->attach($contest, array('status' => 1));
            return redirect()->route('contest.show', $contest->id);
        }
    }

    public function join(Request $request)
    {
        $code = $request->get('code');
        if ($code == null || $code == '') {
            return back()->withErrors(['The code is not valid']);
        }
        $contest = Contest::where('code', $code)->first();
        if ($contest == null) {
            return back()->withErrors(['The code is not valid']);
        }
        if (Auth::check()) {
            $user = Auth::user();
            $exists = $user->contests->contains($contest);
            if ($exists) {
                $user->contests()->updateExistingPivot($contest->id, [
                    'status' => 2,
                ]);
            } else {
                $user->contests()->attach($contest, array('status' => 2));
            }
            return redirect()->route('contest.get_contents', $contest->id);
        }
        return back();
    }

    public function cancel(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $contest = Contest::available()->find($request->contest_id);
            $user->contests()->detach($contest->id);
            return redirect()->route('contest.show', $contest->id);
        }
    }

    public function myContests()
    {
        $user = Auth::user();
        $availableContests = $user->contests()->where('start_time', '>=', Carbon::now())->get();
        $previousContests = $user->contests()->where('start_time', '<', Carbon::now())->get();
        return view('guests.my_contests', compact('availableContests', 'previousContests'));
    }
}

