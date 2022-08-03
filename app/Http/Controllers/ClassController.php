<?php

namespace App\Http\Controllers;

use App\Models\CategoryGroup;
use App\Models\MyClass;
use App\Models\UserClass;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;

class ClassController extends Controller
{
    public function show($classId)
    {
        $myClass = MyClass::findOrFail($classId);
        $categoryGroups = CategoryGroup::all();
        $users = $myClass->users()->wherePivot('state', UserClass::STATUS_JOINED);
        if($users == null)
            return view('student.classblock', compact('categoryGroups'));
        else
        {
            $user = $users->find(\Auth::user()->id);
            if($user == null)
            {
                return view('student.classblock', compact('categoryGroups'));
            }else{
                return view('student.classview', compact('categoryGroups', 'myClass'));
            }
        }
    }

    public function leaderboard($classId)
    {
        $myClass = MyClass::findOrFail($classId);
        return view('student.leaderboard', compact('myClass'));
    }
}
