<?php

namespace App\Http\Controllers\Admin;

use App\Models\QuestionBlock;
use App\Models\Resource;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;

class QuestionBlockController extends Controller
{
    public function store($lid)
    {
        QuestionBlock::create(['lesson_id' => $lid]);
        return redirect()->back();
    }

    public function delete($id)
    {
        $qb = QuestionBlock::find($id);
        $qb->delete();
        return redirect()->back();
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
