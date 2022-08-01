<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Lesson;
use App\Models\Participant;
use App\Models\Question;
use App\Models\UserLesson;
use App\Models\UserQuestion;
use Auth;
use App\Models\MyClass;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Str;

class HomeworkController extends Controller
{
    public function show($lessonId, Request $request)
    {
        $userId = Auth::user()->id;
        $lesson = Lesson::findOrFail($lessonId);
        $courseId = $lesson->section->course->id;
        $qblock = $lesson->questionBlock;
        $questionId = $request->question == null ? $qblock->questions()->first()->id : $request->question;
        $question = $qblock->questions()->findOrFail($questionId);
        $user_lesson = UserLesson::where('user_id',$userId)
            ->where('lesson_id', $lesson->id)->first();
        if ($user_lesson == null) {
            return redirect('/');
        }


        $pos = 0;
        foreach ($qblock->questions as $key => $ques) {
            if ($ques->id == $question->id) {
                $pos = $key;
            }
        }
        $prevPos = $pos - 1;
        $nextPos = $pos + 1;
        if ($pos == 0) {
            $prevPos = 0;
        }
        if ($pos == $qblock->questions->count() - 1) {
            $nextPos = $pos;
        }
        $prevId = $qblock->questions[$prevPos]->id;
        $nextId = $qblock->questions[$nextPos]->id;
        $index = 0;


        if ($user_lesson->homework_status == Lesson::HOMEWORK_PENDING) {
            return view('student.homework.homework', compact('qblock', 'blockId', 'courseId', 'lesson', 'question', 'index', 'prevId', 'nextId', 'pos', 'userId'));
        } else {
            return view('student.homework.review', compact('qblock', 'blockId', 'courseId', 'lesson', 'question', 'index', 'prevId', 'nextId', 'pos', 'userId'));
        }
    }

    public function process($block, $targetType, $targetId, Request $request)
    {
        $errors = array();      // array to hold validation errors
        $data = array();      // array to pass back data

// validate the variables ======================================================
        // if any of these variables don't exist, add an error to our $errors array

        if (empty($_POST['answer']))
            if (empty($_FILES['answer']))
                $errors['answer'] = 'Answer is required.';

// return a response ===========================================================

        // if there are any errors in our errors array, return a success boolean of false
        if (!empty($errors)) {

            // if there are items in our errors array, return those errors
            $data['success'] = false;
            $data['errors'] = $errors;
        } else if (!empty($_POST['answer'])) {
            $this->addAnswer($_POST['answer'], $_POST['qid'], $targetType, $targetId);
            $data['success'] = true;
            $data['message'] = 'Success!';
        } else if (!empty($_FILES['answer'])) {
            $this->addAnswerSpeaking($_FILES['answer'], $_POST['qid'], $targetType, $targetId);
            $data['success'] = true;
            $data['message'] = 'Success!';
        }
        // return all our data to an AJAX call
        echo json_encode($data);
    }

    public function review($lessonId, $blockId = 0)
    {
        $classId = $this->findClassId($lessonId);
        $lesson = Lesson::findOrFail($lessonId);
        $qblock = null;
        if (count($lesson->questionBlocks) > 0) {
            if ($blockId < 0 || $blockId >= count($lesson->questionBlocks)) {
                //todo
                return "What are you doing?";
            } else
                $qblock = $lesson->questionBlocks[$blockId];
        }
        return view('student.homework.review', compact('qblock', 'blockId', 'classId'));
    }

    public function addAnswer($answer, $qid, $targetType, $targetId)
    {
        $question = Question::findOrFail($qid);
        $qtype = $question->type;
        $point = 0;
        switch ($qtype) {
            case Question::TYPE_1:
                if ($answer == $question->true_answer) {
                    $point = $question->point;
                } else {
                    $point = 0;
                }
                break;
            case Question::TYPE_2:
                $correctAnswers = json_decode($question->true_answer);
                $points = json_decode($question->point);
                foreach ($answer as $item) {
                    $index = array_search($item, $correctAnswers);
                    if ($index !== false) {
                        $point += $points[$index];
                    }
                }
                $answer = json_encode($answer);
                break;
            case Question::TYPE_3:
                if (strcasecmp($answer, $question->true_answer) == 0) {
                    $point += $question->point;
                }
                break;
            case Question::TYPE_4:
                if (strcasecmp($answer, $question->true_answer) == 0) {
                    $point += $question->point;
                }
                break;
            case Question::TYPE_5:
                if (strcasecmp($answer, $question->true_answer) == 0) {
                    $point += $question->point;
                }
                break;
            case Question::TYPE_6:
                $questions = json_decode($question->answer);
                $trueans = json_decode($question->true_answer);
                $points = json_decode($question->point);
                for ($i = 0; $i < count($questions); $i++) {
                    if ($answer[$i] == $trueans[$i]) {
                        $point += $points[$i];
                    }
                }
                $answer = json_encode($answer);
                break;
            case Question::TYPE_7:
                break;
            case Question::TYPE_8:
                $ans = $question->answer;
                $st = strpos($ans, '[Key]');
                $keys = [];
                while ($st !== FALSE) {
                    $en = strpos($ans, '[/Key]', $st);
                    $k = substr($ans, $st + strlen('[Key]'), $en - $st - strlen('[Key]'));
                    array_push($keys, trim($k));
                    $st = strpos($ans, '[Key]', $en);
                }
                foreach ($answer as $index => $item) {
                    if (strcasecmp(trim($item), $keys[$index]) == 0) {
                        $point += $question->point;
                    }
                }
                $answer = json_encode($answer);
                break;
            case Question::TYPE_9:
                if (strcasecmp($answer, $question->true_answer) == 0) {
                    $point += $question->point;
                }
                break;
            case Question::TYPE_10:
                $ans = $question->answer;
                $st = strpos($ans, '[Key]') + strlen('[Key]');
                $en = strpos($ans, '[/Key]');
                $key = substr($ans, $st, $en - $st);
                if (strcasecmp($answer, $key) == 0) {
                    $point += $question->point;
                }
                break;
            case Question::TYPE_11:
                $ans = $question->answer;
                $st = strpos($ans, '[Key]');
                $keys = [];
                while ($st !== FALSE) {
                    $en = strpos($ans, '[/Key]', $st);
                    $k = substr($ans, $st + strlen('[Key]'), $en - $st - strlen('[Key]'));
                    array_push($keys, $k);
                    $st = strpos($ans, '[Key]', $en);
                }
                foreach ($keys as $key) {
                    if (array_search($key, $answer) !== FALSE) {
                        $point += $question->point;
                    }
                }
                $answer = json_encode($answer);
                break;
            case Question::TYPE_12:
                if ($answer == $question->true_answer) {
                    $point = $question->point;
                } else {
                    $point = 0;
                }
                break;
            case Question::TYPE_13:
                break;
        };

        $oldAnswers = Answer::where('user_id', Auth::user()->id)->where('question_id', $question->id)
            ->where('target_type', $targetType)
            ->where('target_id', $targetId)
            ->get();


        //tính điểm thi lưu vào bảng user_contests để thuận tiện truy vấn
        if ($targetType == 'contest') {
            $totalPoint = 0;
            //lấy ra bản ghi tham gia contest của user
            $participant = Participant::where('contest_id', $targetId)->where('user_id', Auth::user()->id)->first();
            //tổng điểm hiện tại
            $totalPoint = $participant->point;
            foreach ($oldAnswers as $oldAnswer) {
                $totalPoint = $totalPoint - $oldAnswer->point;
            }
            $totalPoint = $totalPoint + $point;
            $participant->point = $totalPoint;
            $participant->save();
        }

        foreach ($oldAnswers as $oldAnswer) {
                $oldAnswer->delete();
        }

        \Cache::add(Auth::user()->id.":".$qid, 1, 90);

        if ($qtype == Question::TYPE_7) {
            Auth::user()->questions()->attach([$question->id => ['answer' => $answer, 'point' => $point, 'review_status' => UserQuestion::WAITING_FOR_REVIEW], 'target_type' => $targetType, 'target_id' => $targetId]);
        } else {
            Auth::user()->questions()->attach([$question->id => ['answer' => $answer, 'point' => $point, 'target_type' => $targetType, 'target_id' => $targetId]]);
        }
    }

    public function findClassId($lessonId)
    {
        $lesson = Lesson::findOrFail($lessonId);
        $allClasses = $lesson->section->curriculum->myClasses;
        $user = Auth::user();
        foreach ($user->myClasses as $myClass) {
            if ($allClasses->contains($myClass->id)) {
                return $myClass->id;
            }
        }
        return FALSE;
    }

    private function addAnswerSpeaking($answer, $qid, $targetType, $targetId)
    {
        $user = Auth::user();
        $destinationPath = '/uploads/speaking/';
        $fileName = "speak" . time() . "-" . $qid . Str::random(5) . ".webm";
        $path = $destinationPath . $fileName;
        move_uploaded_file(
            $answer['tmp_name'],
            $_SERVER['DOCUMENT_ROOT'] . $path
        );
        // delete old file;
        if ($user->questions->contains($qid)) {
            $oldPath = $user->questions()->find($qid)->pivot->answer;
            unlink($_SERVER['DOCUMENT_ROOT'] . $oldPath);
        }
        //$user->questions()->detach($qid);
        $userAnswers = Auth::user()->answers;
        $oldAnswer = $userAnswers->where('question_id', $qid)
            ->where('target_type', $targetType)
            ->where('target_id', $targetId)
            ->first();
        if ($oldAnswer != null) {
            $oldAnswer->delete();
        }
        $user->questions()->attach([$qid => ['answer' => $path, 'point' => 0, 'review_status' => UserQuestion::WAITING_FOR_REVIEW], 'target_type' => $targetType, 'target_id' => $targetId]);
    }

}
