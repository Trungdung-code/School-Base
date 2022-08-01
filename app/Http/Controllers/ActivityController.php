<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

use App\Http\Requests;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::all();

        return view('activities.index', compact('activities'));
    }

    public function show($id, $slug)
    {
        $activity = Activity::findOrFail($id);

        if ($activity->slug != $slug)
        {
            abort(404);
        }

        return view('activities.show', compact('activity'));
    }

}
