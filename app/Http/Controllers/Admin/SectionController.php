<?php

namespace App\Http\Controllers\Admin;

use App\Models\Lesson;
use App\Models\Section;
use App\Repositories\LessonRepository;
use App\Repositories\SectionRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SectionController extends Controller
{

    public function storeSection(Request $request)
    {
        $section = new Section();
        $section->name = $request->get('name');
        $section->description = $request->get('description');
        $section->course_id = $request->get('course_id');
        $section->save();
        return redirect()->back();
    }

    public function updateSection($id, SectionRepository $sectionRepository, Request $request)
    {
        $section = $sectionRepository->section($id);
        $section->name = $request->get('name');
        $section->description = $request->get('description');
        $section->save();
        return redirect()->back();
    }
    public function destroySection($id, SectionRepository $sectionRepository)
    {
        $section = $sectionRepository->section($id);
        $lessons = $section->lessons;
        foreach ($lessons as $lesson)
            $lesson->delete();
        $section->delete();
        return redirect()->back();
    }
    public function storeLesson($section_id, Request $request)
    {
        $lesson = new Lesson();
        $lesson->name = $request->get('name');
        $lesson->intro = '';
        $lesson->duration = $request->get('duration');
        $lesson->section_id = $section_id;
        $lesson->save();
        return redirect()->back();
    }
    public function updateLesson($id, LessonRepository $lessonRepository, Request $request)
    {
        $lesson = $lessonRepository->lesson($id);
        $lesson->name = $request->get('name');
        $lesson->intro = $request->get('intro');
        $lesson->duration = $request->get('duration');
        $lesson->save();
        return redirect()->back();
    }
    public function destroyLesson($id, LessonRepository $lessonRepository)
    {
        $lesson = $lessonRepository->lesson($id);
        $lesson->delete();
        return redirect()->back();
    }
}
