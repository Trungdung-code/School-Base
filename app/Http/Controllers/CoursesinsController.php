<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesinsController extends Controller
{
    public function mycourses()
    {
        return view('pages.instructor.mycourses');
    }
}
