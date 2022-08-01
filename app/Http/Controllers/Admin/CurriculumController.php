<?php

namespace App\Http\Controllers\Admin;

use App\Models\Curriculum;
use App\Models\Lesson;
use App\Models\Question;
use App\Models\QuestionBlock;
use App\Models\Resource;
use App\Models\Section;
use App\Repositories\CurriculumRepository;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CurriculumController extends Controller
{
    public function show($id, CurriculumRepository $curriculumRepository)
    {
        $curriculum = $curriculumRepository->curriculum($id);
        $allClasses = $curriculum->myClasses;
        $incoming = [];
        $inprocess = [];
        $ended = [];
        foreach($allClasses as $aClass)
        {
            if($aClass->start_time > Carbon::now()){
                array_push($incoming, $aClass);
            }else if($aClass->endTime() < Carbon::now())
            {
                array_push($ended, $aClass);
            }else{
                array_push($inprocess, $aClass);
            }
        }
        return view('teacher.curriculum', compact('curriculum', 'incoming', 'inprocess','ended'));
    }

    public function store(Request $request)
    {
        $name = $request->get('name');
        Curriculum::create(['name'=>$name, 'course_id'=>null]);
        return redirect()->back();
    }

    public function edit($id, CurriculumRepository $curriculumRepository, Request $request)
    {
        if($request->has('lesson'))
        {
            $lessonId = $request->get('lesson');
            $currentLesson = Lesson::findOrFail($lessonId);

        }else{
            $currentLesson  = null;
        }
        $curriculum = $curriculumRepository->curriculum($id);
        return view('teacher.editcurriculum', compact('curriculum', 'currentLesson'));
    }

    public function duplicate($id, CurriculumRepository $curriculumRepository)
    {
        $curr = $curriculumRepository->curriculum($id);
        $curr->duplicate();
        return redirect()->back();
    }
    public function delete($id, CurriculumRepository $curriculumRepository)
    {
        $curri = $curriculumRepository->curriculum($id);
        $curri->remove();
        $curricula = $curriculumRepository->curricula();
        return redirect('/admin/curricula');
    }
    public function showDetail($id, CurriculumRepository $curriculumRepository)
    {
        $curriculum = $curriculumRepository->curriculum($id);
        $sections = $curriculum->sections;
        $lesson_count = 0;
        foreach($sections as $section)
        {
            $lesson_count += count($section->lessons);
        }
        return view('teacher.curriculumdetail', compact('curriculum', 'lesson_count'));
    }

    /**
     * update curriculum's name
     * @param $id
     * @param Request $request
     * @param CurriculumRepository $curriculumRepository
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id, Request $request, CurriculumRepository $curriculumRepository)
    {
        $curr = $curriculumRepository->curriculum($id);
        $curr->name = $request->get('name');
        $curr->save();
        return redirect()->back();
    }
}
