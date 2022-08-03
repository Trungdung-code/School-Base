<?php

namespace App\Http\Controllers;

use App\Models\CategoryGroup;
use App\Models\UserClass;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

class EnrollController extends Controller
{
    public function index()
    {
        $categoryGroups = CategoryGroup::all();
        return view('student.enroll', compact('categoryGroups'));
    }

    public function create($classId)
    {
        $user = Auth::user();
        //$user->classes()->sync([$classId => ['state'=> UserClass::STATUS_PENDING]]);

        UserClass::create([
            "user_id"=>$user->id,
            "my_class_id"=>$classId,
            "state"=>UserClass::STATUS_PENDING
        ]);

        return redirect()->back();
    }
}
