<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsInsController extends Controller
{
    public function students()
    {
        return view('pages.instructor.students');
    }
}
