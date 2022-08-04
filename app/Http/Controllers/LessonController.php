<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\UserLesson;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LessonController extends Controller
{
    /* Last lesson is the id of the lesson that user has viewed before */
    public function show($courseId, $lessonId)
    {
        $lesson = Lesson::find($lessonId);
        $course = Course::findOrFail($courseId);
        if($lesson == null){
            $lesson = $course->lessons()->first();
        }
        if ($lesson->preview == 0 && !Auth::check())
            return redirect()->back();
        $course = $lesson->section->course;
        $section = $lesson->section;
        $lessons = $course->lessons;
        if (Auth::check()) {
            $user_course = DB::table('user_courses')->where('user_id', Auth::user()->id)
                ->where('course_id', $course->id)->first();
            if ($user_course == null) {
                return redirect()->back();
            }
            if ($user_course->completed_lessons == '' || $user_course->completed_lessons == null)
                $completed_lessons = [];
            else {

                $completed_lessons = json_decode($user_course->completed_lessons, true);
            }
            DB::table('user_courses')->where('user_id', Auth::user()->id)
                ->where('course_id', $course->id)->update(['last_lesson' => $lesson->id]);
        } else {
            $completed_lessons = [];
        }
        $userLessons = Auth::user()->lessons->whereIn('id', $course->lessons->pluck('id')->toArray());
        $completed_lessons = $userLessons->pluck('id')->toArray();
        $completedHomeworks = UserLesson::where('user_id', Auth::user()->id)->whereIn('lesson_id', $completed_lessons)->where('homework_status', Lesson::HOMEWORK_DONE)->pluck('lesson_id')->toArray();

//        return $completedHomeworks;
        $user_lesson = UserLesson::where('user_id', Auth::user()->id)
            ->where('lesson_id', $lesson->id)->first();
//        return $user_lesson;
        $lessons = Auth::user()->lessons;
//        return $lessons;
//        return $user_lesson;
        if($user_lesson == null){
            $user_lesson = new UserLesson();
            $user_lesson->user_id = Auth::user()->id;
            $user_lesson->lesson_id = $lesson->id;
            $user_lesson->homework_status = Lesson::HOMEWORK_PENDING;
            $user_lesson->save();
        }
//        return $completedHomeworks;
        return view('student.lesson_show',
            compact('lesson', 'course', 'section', 'lessons', 'completed_lessons', 'completedHomeworks'));
    }

    public function showPreview($id)
    {
        $lesson = Lesson::findOrFail($id);
        $course = $lesson->section->course;
        $section = $lesson->section;
        $lessons = $course->lessons;
        if ($lesson->preview == true) {
            return view('guests.lesson_show',
                compact('lesson', 'course', 'section', 'lessons', 'completed_lessons'));
        } else {
            return redirect()->back();
        }
    }

    public function change(Request $request)
    {
        $lesson = Lesson::find($request->id);
        $course = $lesson->section->course;
        if (Auth::check()) {
            $user_course = DB::table('user_courses')->where('user_id', Auth::user()->id)
                ->where('course_id', $course->id)->first();
            if ($user_course->completed_lessons == '' || $user_course->completed_lessons == null)
                $completed_lessons = [];
            else
                $completed_lessons = json_decode($user_course->completed_lessons, true);
            if (!in_array($request->id, $completed_lessons))
                array_push($completed_lessons, $request->id);
            DB::table('user_courses')->where('user_id', Auth::user()->id)
                ->where('course_id', $course->id)
                ->update(['completed_lessons' => json_encode($completed_lessons)]);
        }
        $lessons = $course->lessons->toArray();
        $index = $this->find($lesson->id, $lessons);
        if ($lessons[$index + 1]['preview'] == 0 && Auth::check())
            return redirect()->back();
        if ($index >= 0 and $index < count($lessons) - 1)
            return redirect()->route('lesson.show', ['id' => $lessons[$index + 1]['id']]);
        else
            return redirect()->back();
    }

    private function find($id, $collection)
    {
        foreach ($collection as $idx => $item)
            if ($item['id'] == $id)
                return $idx;
        return false;
    }

    public function finishHomework($id)
    {
        $user_lesson = UserLesson::where('user_id', Auth::user()->id)
            ->where('lesson_id', $id)->first();
        if ($user_lesson == null) {
            return redirect('/');
        }
        $user_lesson->homework_status = Lesson::HOMEWORK_DONE;
        $user_lesson->save();
        return redirect()->back();
    }

}
