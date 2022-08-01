<?php

namespace App\Http\Controllers\Admin;

use App\Models\Answer;
use App\Models\CategoryGroup;
use App\Models\Course;
use App\Models\Question;
use App\Models\User;
use App\Models\UserQuestion;
use App\PaginatorFactory;
use Elasticsearch\ClientBuilder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Storage;

class CourseController extends Controller
{
    public function index()
    {
        $available_courses = Course::available()->orderBy('updated_at', 'desc')->get();
//            paginate(6, null, "available_courses", null);
        $expired_courses = Course::expired()->orderBy('updated_at', 'desc')->
            paginate(6, null, 'expired_courses', null);
        $drafted_courses = Course::drafted()->orderBy('updated_at', 'desc')->get();
//            paginate(6, null, 'drafted_courses', null);
        return view('teacher.courses.index', compact('available_courses', 'expired_courses', 'drafted_courses'));
    }

    public function show_course($id)
    {
        $course = Course::findOrFail($id);
        $question_blocks = PaginatorFactory::getPaginator($course->question_blocks());
        return view('teacher.courses.show', compact('course', 'question_blocks'));
    }

    public function publish($id)
    {
        $course = Course::findOrFail($id);
        $course->status = 'available';
        $course->save();
        return redirect()->back();
    }

    public function students($id)
    {
        $course = Course::findOrFail($id);
        $learning_students = $course->learning_students()->paginate(10);
        $waiting_students = $course->waiting_students()->paginate(10);
        return view('teacher.courses.students', compact('course', 'learning_students', 'waiting_students'));
    }

    public function approveStudent(Request $request, $course_id)
    {
        $student = User::findOrFail($request->student_id);
        $student->courses()->detach($course_id);
        $student->courses()->attach($course_id, ['status'=>2]);
        return redirect()->back();
    }

    public function unapprovedStudent(Request $request, $course_id)
    {
        $student = User::findOrFail($request->student_id);
        $student->courses()->detach($course_id);
        $student->courses()->attach($course_id, ['status'=>1]);
        return redirect()->back();
    }


    public function newCourse()
    {
        return view('teacher.courses.new_course');
    }

    public function create(Request $request)
    {
        $course = new Course;
        $course->name = $request->name;
        $course->language = $request->language;
        $course->price = $request->price;
        $course->promotion_price = $request->promotion_price;
        $course->slot = $request->students;
        $course->level = $request->level;
        $course->category_id = $request->category_id;
        $course->duration = $request->duration;
        $course->access_duration = $request->access_duration;
        $course->status = "Drafted";
        $course->description = $request->description;
        $course->timestamps = true;
        $course->save();

        foreach($request->tags as $tag) {
            $course->tags()->attach($tag, ['object_type'=>'course']);

        }
        return redirect()->route('admin.course.new_sections', ['course_id'=>$course->id]);
    }

    public function new_sections($course_id)
    {
        $course = Course::findOrFail($course_id);
        return view('teacher.courses.new_sections', compact('course'));
    }

    public function editInfo($course_id)
    {
        $course = Course::findOrFail($course_id);
        return view('teacher.courses.edit_info', compact('course'));
    }

    public function update($course_id, Request $request)
    {
        $course = Course::findOrFail($course_id);
        $course->name = $request->name;
        $course->language = $request->language;
        $course->slot = $request->students;
        $course->duration = $request->duration;
        $course->access_duration = $request->access_duration;
        $course->price = $request->price;
        $course->promotion_price = $request->promotion_price;
        $course->level = $request->level;
        $course->category_id = $request->category_id;
        $course->description = $request->description;
        $course->timestamps = true;
        $course->save();
        return redirect()->route('admin.course.show', compact('course'));
    }

    public function addQuestionBlock($id, Request $request)
    {
        $course = Course::find($id);
        $question_blocks = json_decode($course->quizzes, true);
        if ($question_blocks == null)
            $question_blocks = [];
        array_push($question_blocks, $request->qb_id);
        $course->quizzes = json_encode($question_blocks);
        $course->timestamps = true;
        $course->save();
        return redirect()->back();

    }

    public function deleteQuestionBlock($contest_id, Request $request)
    {
        $course = Contest::findOrFail($contest_id);
        $question_blocks = json_decode($course->quizzes, true);
        $key = array_search($request->question_block_id, $question_blocks);
        unset($question_blocks[$key]);
        sort($question_blocks);
        $course->content = json_encode($question_blocks);
        $course->save();
        return redirect()->back();
    }

    public function changeCoverImage($course_id)
    {
        $course = Course::findOrFail($course_id);
        if (Input::hasFile('cover_image')) {
            $file = Input::file('cover_image');
            $name = $file->getClientOriginalName();
            $file->move('/var/www/newecourse/public/img/courses', $name);
/*            Storage::disk('public')->put($name, $file);*/
/*            $path = $file->move('img', $file->getClientOriginalName());*/
            $course->cover_image = '/img/courses/'.$name;
            $course->save();
            return redirect()->back()->with(['message'=>'Change cover image successfully']);
        } else {
            return redirect()->back()->with(['message'=>'Cannot change cover image']);
        }
    }

    public function selectCategory(Request $request)
    {
        $category_group = CategoryGroup::findOrFail($request->id);
        if($category_group == null)
            abort(404);
        return json_encode($category_group->categories);
    }

    public function search(Request $request)
    {
        $client = ClientBuilder::create()->build();
        $params['body']['query']['match']['name'] = $request->key_word;
        $courses = Course::hydrateElasticsearchResult($client->search($params));
        return view('teacher.courses.search_result', compact('courses'));
    }

    public function delete($id)
    {
        $course = Course::findOrFail($id);
        $members = $course->members;
        foreach($members as $member){
            $member->delete();
        }
        $course->delete();
        return redirect('admin/courses');
    }

    public function showPendingWork($id)
    {
        $course = Course::findOrFail($id);
        $allAnswers = $course->answers;
        $speakingAnswers = $allAnswers->where('question_type', Question::TYPE_13)->where('status', UserQuestion::WAITING_FOR_REVIEW)->all();
        $reviewedSpeakings = $allAnswers->where('question_type', Question::TYPE_13)->where('status', UserQuestion::REVIEWED)->all();
        $writingAnswers = $allAnswers->where('question_type', Question::TYPE_7)->where('status', UserQuestion::WAITING_FOR_REVIEW)->all();
        $reviewedWritings = $allAnswers->where('question_type', Question::TYPE_7)->where('status', UserQuestion::REVIEWED)->all();
        return view('teacher.pendingwork', compact('speakingAnswers', 'writingAnswers', 'reviewedSpeakings', 'reviewedWritings', 'course'));
    }

    public function showLeaderBoard($id)
    {
        $course = Course::findOrFail($id);
        $allStudents = $course->students;
        foreach($allStudents as $student){
            $student['point'] = $student->pointOfCourse($id);
//            $student['name'] = $student->user->name;
        }
        $students = $allStudents;//->sortByAsc('price');
        return view('teacher.courses.leaderboad', compact('students'));
    }
}
