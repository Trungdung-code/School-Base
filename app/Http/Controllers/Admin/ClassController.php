<?php

namespace App\Http\Controllers\Admin;

use App\Models\Curriculum;
use App\Models\MyClass;
use App\Models\UserClass;
use App\Repositories\CurriculumRepository;
use DateTime;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ClassController extends Controller
{
    public function store(Request $request)
    {
        $startDate = $request->get('start-date');
        $startTime = $request->get('start-time');
        $time = DateTime::createFromFormat('Y-m-d H:i', $startDate.' '.$startTime);
        #return $time->format('Y-m-d H:i');
        #$time = "";
        MyClass::create([
            'name'=>$request->get('name'),
            'curriculum_id'=>$request->get('curriculum-id'),
            'start_time' => $time,
            'slot'=>$request->get('slot')
        ]);
        return redirect()->back();
    }

    public function waitList($id)
    {
        $myClass = MyClass::findOrFail($id);
        return view('teacher.waitlist', compact('myClass'));
    }

    public function accept($class_id, $student_id)
    {
        $myClass = MyClass::findOrFail($class_id);
        $myClass->users()->updateExistingPivot($student_id, ['state'=>UserClass::STATUS_JOINED]);
        return redirect()->back();
    }

    public function reject($class_id, $student_id)
    {
        $myClass = MyClass::findOrFail($class_id);
        $myClass->users()->updateExistingPivot($student_id, ['state'=>UserClass::STATUS_BANNED]);
        return redirect()->back();
    }

}
