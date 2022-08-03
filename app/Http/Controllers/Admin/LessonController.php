<?php

namespace App\Http\Controllers\Admin;

use App\Models\Lesson;
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
}
