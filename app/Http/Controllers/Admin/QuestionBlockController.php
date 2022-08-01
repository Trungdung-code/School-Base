<?php

namespace App\Http\Controllers\Admin;

use App\Models\QuestionBlock;
use App\Models\Resource;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;

class QuestionBlockController extends Controller
{

    public function add_qb(Request $request)
    {
/*        $question_block = new QuestionBlock();
        $question_block->save();*/
        return view('teacher.quizzes.new_qb');
/*        return redirect()->route('admin.question_block.show', ['id'=>$question_block->id]);*/
    }

    public function index()
    {
        $question_blocks = QuestionBlock::with('category')->get();
        return view('teacher.quizzes.index', compact('question_blocks'));
    }

    public function show($id)
    {
        $qblock = QuestionBlock::findOrFail($id);
        return view('teacher.editcurriculum', compact('qblock'));
    }

/*    public function store($lid)
    {
        QuestionBlock::create(['lesson_id' => $lid]);
        return redirect()->back();
    }*/

    public function delete($id)
    {
        $qb = QuestionBlock::find($id);
        $qb->delete();
        return redirect()->back();
    }

    public function saveContent($id, Request $request)
    {
        $qb = QuestionBlock::findOrFail($id);
        $qb->content = $request->qb_content;
        $qb->type = $request->type;
        $qb->level = $request->level;
        $qb->category_id = $request->category;
        $qb->title = $request->title;
        $qb->save();
        return redirect()->route('admin.question_block.show', ['id'=>$id]);
    }

    public function save(Request $request)
    {
        $qb = new QuestionBlock();
        $qb->title = $request['title'];
        $qb->level = $request['level'];
        $qb->category_id = $request['category'];
        $qb->type = $request['type'];
        $qb->timestamps = true;
        $qb->save();
        return redirect()->route('admin.question_block.show', ['id'=>$qb->id]);
    }

    public function addMaterial($id, Request $request)
    {
        $qblock = QuestionBlock::find($id);
        $title = $request->get('title');
        $des = $request->get('description');
        if ($request->has('video')) {
            $path = $request->get('video');
            $type = Resource::TYPE_VIDEO;
        } elseif ($request->has('audio')) {
            $path = $request->get('audio');
            $type = Resource::TYPE_AUDIO;
        } elseif ($request->hasFile('document')) {
            $destinationPath = 'uploads/quest/';
            $fileName = "mat" . time() . "-" . $qblock->id.Str::random(5).".pdf";
            $path = '/' . $destinationPath . $fileName;
            Input::file('document')->move($destinationPath, $fileName);
            $type = Resource::TYPE_PDF;
        }
        Resource::create([
            'resourceable_id' => $qblock->id,
            'resourceable_type' => QuestionBlock::class,
            'path' => $path,
            'properties' => json_encode(["title" => $title, "type" => $type, "description" => $des])
        ]);
        return redirect()->back();
    }
}
