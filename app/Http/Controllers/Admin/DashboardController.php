<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use App\Models\Curriculum;
use App\Models\MyClass;
use App\Models\UserAnswer;
use App\Models\UserQuestion;
use App\Repositories\CourseRepository;
use App\Repositories\CurriculumRepository;
use App\Repositories\GroupRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Storage;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $curricula = Curriculum::all();
        return view('teacher.dashboard', compact('curricula'));
    }

    public function reviewWriting($classId, $answerId)
    {
        $answer = UserQuestion::findOrFail($answerId);
        return view('teacher.feedback', compact('answer', 'classId'));
    }

    public function storeReviewWriting($classId, $answerId, Request $request)
    {
        $answer = UserQuestion::findOrFail($answerId);
        $answer->review = $request->get('review');
        $answer->review_status = UserQuestion::REVIEWED;
        $answer->save();
        return redirect('/admin/classes/' . $classId);
    }


    public function reviewSpeaking($classId, $answerId)
    {
        $answer = UserQuestion::findOrFail($answerId);
        return view('teacher.feedbacks', compact('answer', 'classId'));
    }

    public function storeReviewSpeaking($classId, $answerId, Request $request)
    {
        $answer = UserQuestion::findOrFail($answerId);
        $answer->review = $request->get('review');
        $answer->review_status = UserQuestion::REVIEWED;
        $answer->save();
        return redirect('/admin/classes/' . $classId);
    }

    public function pendingwork($classId)
    {
        $aClass = MyClass::findOrFail($classId);

        return view('teacher.pendingwork', compact('aClass'));
    }

    public function coursename(GroupRepository $groupRepository)
    {
        $groups = $groupRepository->groups();
        return view('teacher.coursename', compact('groups'));
    }

    public function courseintro(GroupRepository $groupRepository, CurriculumRepository $curriculumRepository)
    {
        $groups = $groupRepository->groups();
        $course = $groups[0]->categories[0]->courses[0];
        /*        $curricula = $curriculumRepository->availableCurriculum($course->id);*/
        #dd($curricula);
        return view('teacher.courseintro', compact('groups', 'course'));
    }

    public function curricula(CurriculumRepository $curriculumRepository)
    {
        $curricula = $curriculumRepository->curricula();
        return view('teacher.curricula', compact('curricula'));
    }

    public function coursecontent()
    {
        return view('teacher.coursecontent');
    }

    public function classes(CurriculumRepository $curriculumRepository)
    {
        $curricula = $curriculumRepository->curricula();
        return view('teacher.classes', compact('curricula'));
    }

    public function uploadImage(Request $request)
    {
        if ($request->hasFile('image')) {
            $this->validate($request,
                [
                    'image' => 'max:1024',
                ],
                [
                    'image.max' => "Your image file could not be saved, because it exceeds 1 MB, the maximum allowed size for uploads. "
                ]
            );

            $destinationPath = 'uploads/editors';

            $fileName =  microtime() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move($destinationPath, $fileName);
            $path = '/' . $destinationPath . '/' . $fileName;

            return $path;
        }
    }

}
