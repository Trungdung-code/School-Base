<?php

namespace App\Http\Controllers\Admin;

use App\Models\Lesson;
use App\Models\QuestionBlock;
use App\Models\Resource;
use App\Repositories\LessonRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;

class LessonController extends Controller
{
    public function addMaterial($id, Request $request, LessonRepository $lessonRepository)
    {
        $lesson = $lessonRepository->lesson($id);
        $title = $request->get('title');
        $des = $request->get('description');
        if ($request->has('video')) {
            $path = $request->get('video');
            $type = Resource::TYPE_VIDEO;
        } elseif ($request->has('audio')) {
            $path = $request->get('audio');
            $type = Resource::TYPE_AUDIO;
        } elseif ($request->hasFile('document')) {
            $destinationPath = 'uploads/docs/';
            $fileName = "docs" . time() . "-" . $lesson->id.Str::random(5).".pdf";
            $path = '/' . $destinationPath . $fileName;
            Input::file('document')->move($destinationPath, $fileName);
            $type = Resource::TYPE_PDF;
        }
        Resource::create([
            'resourceable_id' => $lesson->id,
            'resourceable_type' => Lesson::class,
            'path'=>$path,
            'properties'=>json_encode(["title"=>$title, "type"=>$type, "description"=>$des])
        ]);
        return redirect()->back();
    }

    public function deleteMaterial($mid)
    {
        $res = Resource::findOrFail($mid);
        $res->delete();
        return redirect()->back();
    }

    public function showContent($id)
    {
        $lesson = Lesson::findOrFail($id);
        return view('teacher.lessons.show', compact('lesson'));
    }
    public function editContent($id)
    {
        $lesson = Lesson::findOrFail($id);
        return view('teacher.lessons.edit', compact('lesson'));
    }

    public function updateContent($id, Request $request)
    {
        $lesson = Lesson::findOrFail($id);
        $lesson->content = $request->get('content');
        $lesson->save();
        return redirect('/admin/lessons/'.$id.'/');
    }

    public function deleteLesson($id)
    {
        $lesson = Lesson::findOrFail($id);
        $lesson->delete();
        return redirect()->back();
    }

    public function updateLessonInfo($lesson_id, Request $request)
    {
        $lesson = Lesson::findOrFail($lesson_id);
        $lesson->name = $request->name;
        if($request->has('preview'))
            $lesson->preview = 1;
        else
            $lesson->preview = 0;
        $lesson->save();
        return redirect()->back();
    }

    public function showQuizs($id)
    {
        $question_blocks = QuestionBlock::all();
        $currentId = Lesson::findOrFail($id)->question_block_id;
        return view('teacher.lessons.quizlist', compact('question_blocks', 'id', 'currentId'));
    }

    public function saveQuiz($id, Request $request)
    {
        $lesson = Lesson::findOrFail($id);
        $lesson->question_block_id = $request->quizid;
        $lesson->save();
        return redirect('/admin/lessons/'.$id.'/');
    }
}
