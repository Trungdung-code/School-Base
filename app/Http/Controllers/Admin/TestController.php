<?php

namespace App\Http\Controllers\Admin;

use App\Models\CategoryGroup;
use App\Models\Contest;
use App\Models\QuestionBlock;
use App\Models\User;
use App\PaginatorFactory;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Null_;

class TestController extends Controller
{

    public function index()
    {
        $available_contests = Contest::available()->orderBy('updated_at', 'desc')->paginate(6);
//        paginate(6, null, "available_courses", null);
        $drafted_contests = Contest::drafted()->orderBy('updated_at', 'desc')->get();
//        paginate(6, null, 'drafted_courses', null);

        $hiddenContests = Contest::hidden()->orderBy('updated_at', 'desc')->get();
//        paginate(6, null, 'drafted_courses', null);
        return view('teacher.contests.index',
            compact('available_contests', 'drafted_contests', 'hiddenContests'));
    }

    public function publish($contest_id)
    {
        $contest = Contest::findOrFail($contest_id);
        $contest->status = 'available';
        $contest->save();
        return redirect()->back();
    }

    public function hide($contest_id)
    {
        $contest = Contest::findOrFail($contest_id);
        $contest->status = 'hidden';
        $contest->save();
        return redirect()->back();
    }

    public function unhide($contest_id)
    {
        $contest = Contest::findOrFail($contest_id);
        $contest->status = 'available';
        $contest->save();
        return redirect()->back();
    }

    public function newContest()
    {
        return view('teacher.contests.new');
    }

    public function save(Request $request)
    {
        $contest = new Contest();
        $contest->name = $request->name;
        $contest->code = strtoupper(Str::random(6));
        $contest->start_time = strtotime($request->start_time);
        $contest->total_students = $request->total_students;
        $contest->duration = $request->duration;
        $contest->description = $request->description;
        if($request->filled('type')){
            $contest->type = $request->type;
        }
        $contest->timestamps = true;
        $contest->save();
        if ($request->tags != null) {
            foreach ($request->tags as $tag) {
                $contest->tags()->attach($tag, ['object_type' => 'contest']);
            }
        }
        return redirect()->route('admin.contest.show', ['id' => $contest->id]);
    }

    public function addQuestionBlock($id, Request $request)
    {
        $contest = Contest::find($id);
        $question_blocks = json_decode($contest->content, true);
        if ($question_blocks == null)
            $question_blocks = [];
        array_push($question_blocks, $request->qb_id);
        sort($question_blocks);
        $contest->content = json_encode($question_blocks);
        $contest->timestamps = true;
        $contest->save();
        $questionBlocks = QuestionBlock::findOrFail($request->qb_id);
        $questionBlocks->type_contest = CategoryGroup::UNIVERSITY;
        $questionBlocks->save();
        return redirect()->back();
    }

    public function show($id)
    {
        $contest = Contest::findOrFail($id);
        $question_blocks = PaginatorFactory::getPaginator($contest->question_blocks());
        $qBlocks = QuestionBlock::all();
        return view('teacher.contests.show', compact('contest', 'question_blocks', 'qBlocks'));
    }

    public function edit($id)
    {
        $contest = Contest::findOrFail($id);
        return view('teacher.contests.edit', compact('contest'));
    }

    public function deleteQuestionBlock($contest_id, Request $request)
    {
        $contest = Contest::findOrFail($contest_id);
        $question_blocks = json_decode($contest->content, true);
        $key = array_search($request->question_block_id, $question_blocks);
        unset($question_blocks[$key]);
        sort($question_blocks);
        $contest->content = json_encode($question_blocks);
        $contest->save();
        $questionBlocks = QuestionBlock::findOrFail($request->question_block_id);
        $questionBlocks->type_contest = null;
        $questionBlocks->save();
        return redirect()->back();
    }

    public function update($id, Request $request)
    {
        $contest = Contest::findOrFail($id);
        $contest->code = strtoupper($request->code);
        $contest->name = $request->name;
        $contest->start_time = strtotime($request->start_time);
        $contest->total_students = $request->total_students;
        $contest->duration = $request->duration;
        $contest->description = $request->description;
        $contest->type = $request->type ?? '';
        $contest->timestamps = true;
        $contest->save();
        return redirect()->route('admin.contest.show', ['id' => $id]);
    }

    public function changeCoverImage($contest_id)
    {
        $contest = Contest::findOrFail($contest_id);
        if (Input::hasFile('cover_image')) {
            $file = Input::file('cover_image');
            $name = $file->getClientOriginalName();
            $file->move('/var/www/newecourse/public/img/courses', $name);
            /*            Storage::disk('public')->put($name, $file);*/
            /*            $path = $file->move('img', $file->getClientOriginalName());*/
            $contest->cover_image = '/img/courses/' . $name;
            $contest->timestamps = true;
            $contest->save();
            return redirect()->back()->with(['message' => 'Change cover image successfully']);
        } else {
            return redirect()->back()->with(['message' => 'Cannot change cover image']);
        }
    }

    public function students($id)
    {
        $contest = Contest::findOrFail($id);
        $learning_students = $contest->learning_students()->paginate(10);
        $waiting_students = $contest->waiting_students()->paginate(10);
        return view('teacher.contests.students', compact('contest', 'learning_students', 'waiting_students'));
    }

    public function approveStudent(Request $request, $contest_id)
    {
        $student = User::findOrFail($request->student_id);
        $student->contests()->updateExistingPivot($contest_id, [
            'status' => 2,
        ]);
        return redirect()->back();
    }

    public function unapprovedStudent(Request $request, $contest_id)
    {
        $student = User::findOrFail($request->student_id);
        $student->contests()->updateExistingPivot($contest_id, [
            'status' => 1,
        ]);
        return redirect()->back();
    }

    public function leaderBoard($id)
    {
        $contest = Contest::findOrFail($id);
        $studentIds = $contest->learning_students()->pluck('users.id')->toArray();
        $topStudents = $contest->participants->whereIn('user_id', $studentIds)->unique('user_id');
        foreach ($topStudents as $topStudent){
            $topStudent['name'] = $topStudent->user->name;
            $topStudent['email'] = $topStudent->user->email;
        }
//        return $topStudents;
        $topStudents = $topStudents->toArray();

        usort($topStudents, function ($a, $b) {
            return $a['point'] < $b['point'];
        });

//        $waiting_students = $contest->waiting_students()->paginate(10);
//        $students = $allStudents;//->sortByDesc('total');

        return view('teacher.contests.leaderboad', compact('contest', 'topStudents'));
    }


}
