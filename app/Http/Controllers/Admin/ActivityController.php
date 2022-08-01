<?php

namespace App\Http\Controllers\Admin;

use App\Models\Activity;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Carbon;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::orderBy('updated_at', 'DESC')->paginate(10);

        return view('teacher.activities.index', compact('activities'));
    }

    public function show(Request $request)
    {
        $activity = Activity::findOrFail($request->id);

        return view('teacher.activities.show', compact('activity'));
    }

    public function create()
    {
        return view('teacher.activities.create');
    }

    public function store(Request $request)
    {
        $destinationPath = 'uploads/activities';
        $fileName = '/img/studyingboy.png';
        $path = $fileName;

        if (Input::hasFile('cover')) {
            $fileName = "activity" . time() . '.' . $request->file('cover')->getClientOriginalExtension();
            $request->file('cover')->move($destinationPath, $fileName);
            $path = '/' . $destinationPath . '/' . $fileName;
        }

        $activity = Activity::create([
            "name" => $request->name,
            "content" => $request->econtent,
            "finish" => Carbon\Carbon::createFromFormat('Y/m/d H:i', $request->finish),
            "start" => Carbon\Carbon::createFromFormat('Y/m/d H:i', $request->start),
            "address" => $request->address,
            "description" => $request->description,
            "slug" => str_slug($request->name),
            "cover" => $path,
        ]);

        $activity->slug = $activity->id . '-' . $activity->slug;
        $activity->save();

        return redirect()->route('admin.activity.show', $activity->id);
    }

    public function edit(Request $request)
    {
        $activity = Activity::findOrFail($request->id);

        return view('teacher.activities.edit', compact('activity'));
    }

    public function update(Request $request)
    {
        $activity = Activity::findOrFail($request->id);

        $activity->update($request->all());

        $activity->content = $request->econtent;

        if (Input::hasFile('cover'))
        {
            $destinationPath = 'uploads/event/cover';

            if (file_exists(public_path($activity->cover)) && $activity->cover != '/img/activity.jpg')
                unlink(public_path($activity->cover));

            $fileName = "activity" . time() . '.' . $request->file('cover')->getClientOriginalExtension();
            $request->file('cover')->move($destinationPath, $fileName);
            $path = '/' . $destinationPath . '/' . $fileName;

            $activity->cover = $path;
        }

        $activity->save();

        return redirect()->route('admin.activity.show', ['id' => $activity->id]);
    }

    public function delete(Request $request)
    {
        $activity = Activity::findOrFail($request->id);

        unlink(public_path($activity->cover));

        $activity->delete();

        return redirect()->route('admin.activity.index');
    }
}
