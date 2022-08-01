<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;

class StudentController extends Controller
{
    //
    public function index(Request $request)
    {
        $students = User::student()->get();
        return view('teacher.students.index', compact('students'));
    }

    public function showStudent(Request $request)
    {
        $student = User::student()->find($request->student_id);
        $waiting_courses = $student->waiting_courses()->paginate(10);
        $learning_courses = $student->learning_courses()->paginate(10);
        return view('teacher.students.show', compact('student', 'waiting_courses', 'learning_courses'));
    }

    public function delete($id)
    {
        $student = User::student()->findOrFail($id);
        $student->delete();
        return redirect()->back();
    }

    public function resetPassword(Request $request)
    {
        $id = $request->id;
        $password = $request->password;
        $student = User::student()->findOrFail($id);
        $student->password = bcrypt($password);
        $student->save();
        return redirect()->back();
    }
}
