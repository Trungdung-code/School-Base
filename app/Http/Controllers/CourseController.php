<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\CategoryGroup;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class CourseController extends Controller
{

    public function all_course(Request $request)
    {
        return view('pages.courses.allcourses');
    }

    public function my_courses(Request $request)
    {
        $student = Auth::user();
        $courses = $student->myCourses()->orderBy('updated_at', 'desc')->get();
        $latest_courses = Course::orderBy('updated_at', 'desc')->take(5)->get();
        $type = 3;
        return view('guests.courses_index', compact('courses', 'latest_courses', 'type'));
    }

    public function index(Request $request)
    {
        $type = $request->type;
        if ($type == 0) {
            $courses = Course::available()->paginate(7);
        } else if ($type == 1) {
            $category_group = CategoryGroup::find($request->id);
            $courses = $category_group->courses()->available()->orderBy('updated_at')->paginate(7);
        } else if ($type == 2) {
            $category = Category::find($request->id);
            $category_group = $category->categoryGroup;
            $courses = $category->courses()->available()->orderBy('updated_at')->paginate(7);
        }
        $latest_courses = Course::available()->orderBy('updated_at', 'desc')->take(3)->get();
        return view('guests.courses_index',
            compact('courses', 'latest_courses', 'type', 'category', 'category_group'));
    }

    public function show($id)
    {
        $course = Course::available()->find($id);
        if (Auth::check()) {
            $student = Auth::user();
            try {
                $status = (int)$student->myCourses->
                    where('id', $course->id)->first()->pivot->status;
            } catch (\Exception $e) {
                $status = 0;
            }
        } else {
            $status = 0;
        }
        $relate_courses = Course::available()->take(2)->get();
        $latest_courses = Course::available()->orderBy('updated_at', 'desc')->take(3)->get();

        $comments = $course->comments;
        $ratings = [0 => 0, 1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0];
        foreach ($comments as $comment) {
            if ($comment->rating) {
                $ratings[$comment->rating]++;
                $ratings[0]++;
            }
        }

        if (Auth::check())
            $user_course = DB::table('user_courses')->where('user_id', Auth::user()->id)
                ->where('course_id', $course->id)->first();
        return view('guests.course_show',
            compact('course', 'relate_courses',
                'latest_courses', 'status', 'comments', 'ratings', 'user_course'));
    }


    public function showQuizzes($id)
    {
        /*        $course = Course::find($id);
                $blocks = $course->question_blocks();
                $block = $blocks[0];
                return view('student.quizzes_show',
                    compact('course', 'blocks', 'block'));*/
    }

    public function purchase(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $course = Course::available()->find($request->course_id);
            $user->myCourses()->attach($course, array('status' => 1));
            return redirect()->route('course.show', $course->id);
        }
    }

    public function cancel(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $course = Course::available()->find($request->course_id);
            $user->myCourses()->detach($course->id);
            return redirect()->route('course.show', $course->id);
        }
    }

    public function post_comment(Request $request)
    {
        if (Auth::check()) {
            $comment = new Comment;
            $user = Auth::user();
            $comment->user_id = $user->id;
            $comment->course_id = $request->course_id;
            $comment->content = $request->get('content');
            $comment->rating = (int)$request->rating;
            $comment->save();
            return redirect()->route('course.show', $request->course_id);
        }
    }

    public function detailCourse($id)
    {
        return view('pages.courses.cousedetail');
    }
    public function successful()
    {
        return view('pages.courses.success');
    }
}
