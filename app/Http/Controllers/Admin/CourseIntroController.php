<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Resource;
use App\Models\Section;
use App\Repositories\CategoryRepository;
use App\Repositories\CourseRepository;
use App\Repositories\CurriculumRepository;
use App\Repositories\GroupRepository;
use App\Repositories\LessonRepository;
use App\Repositories\SectionRepository;
use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

Class CourseIntroController extends Controller
{
    public function courses()
    {
        $available_courses = Course::available()->paginate(4, null, "available_courses", null);
        $expired_courses = Course::expired()->paginate(4, null, 'expired_courses', null);
        $drafted_courses = Course::expired()->paginate(4, null, 'drafted_courses', null);
        return view('teacher.courses.index', compact('available_courses', 'expired_courses', 'drafted_courses'));
    }

    public function show_course(Request $request)
    {
        $course = Course::findOrFail($request->course_id);
        return view('teacher.courses.show', compact('course'));
    }

    public function fetchGroups($id, GroupRepository $groupRepository)
    {
        $group = $groupRepository->group($id);
        $cates = $group->categories->map(function ($c) {
            return ['id' => $c->id, 'name' => $c->name];
        })->toArray();
        $courses = $group->categories[0]->courses->map(function ($c) {
            return ['id' => $c->id, 'name' => $c->name];
        })->toArray();
        return response()->json(['category' => $cates, 'course' => $courses]);
    }

    public function fetchCates($id, CategoryRepository $categoryRepository)
    {
        $cate = $categoryRepository->category($id);
        $courses = $cate->courses->map(function ($c) {
            return ['id' => $c->id, 'name' => $c->name];
        })->toArray();
        return response()->json($courses);

    }

    public function fetchCourses(CourseRepository $courseRepository, GroupRepository $groupRepository, CurriculumRepository $curriculumRepository)
    {
        $id = Input::get('c3');
        $groups = $groupRepository->groups();
        $course = $courseRepository->course($id);
        $curricula = $curriculumRepository->availableCurriculum($course->id);
        return view('teacher.courseintro', compact('groups', 'course','curricula' ));
    }

    public function storeCourseIntro($id, Request $request, CourseRepository $courseRepository, CurriculumRepository $curriculumRepository)
    {
        $course = $courseRepository->course($id);
        $course->description = $request->get('editor1');
        $course->videoIntro->path = $request->get('video-url');
        $course->videoIntro->save();
        $course->save();
/*        $currentCurriculum = $course->curriculum;
        if($currentCurriculum != null)
        {
            $currentCurriculum->course_id = null;
            $currentCurriculum->save();
        }
        $newCurriculum = $curriculumRepository->curriculum($request->get('curriculum-id'));
        $newCurriculum->course_id = $id;
        $newCurriculum->save();*/
        return redirect()->back();
    }


    public function storeSection($curriculum, Request $request)
    {
        $section = new Section();
        $section->name = $request->get('name');
        $section->description = $request->get('description');
/*        $section->curriculum_id = $curriculum;*/
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
        $lesson->section_id = $section_id;
        $lesson->save();
        return redirect()->back();
    }
    public function updateLesson($id, LessonRepository $lessonRepository, Request $request)
    {
        $lesson = $lessonRepository->lesson($id);
        $lesson->name = $request->get('name');
        $lesson->save();
        return redirect()->back();
    }
    public function destroyLesson($id, LessonRepository $lessonRepository)
    {
        $lesson = $lessonRepository->lesson($id);
        $lesson->delete();
        return redirect()->back();
    }

    public function updateCategory(Request $request)
    {
        $course = Course::find($request->course_id);
        $course->category_id = $request->category_id;
        $course->save();
        return redirect()->back();
    }
}
