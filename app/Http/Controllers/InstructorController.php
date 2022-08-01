<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function profileins()
    {
        return view('pages.instructor.profile');
    }
    public function earnings()
    {
        return view('pages.instructor.earnings');
    }
    public function mycourses()
    {
        return view('pages.instructor.mycourses');
    }
    public function orders()
    {
        return view('pages.instructor.orders');
    }
    public function payouts()
    {
        return view('pages.instructor.payouts');
    }
    public function reviews()
    {
        return view('pages.instructor.reviews');
    }
    public function students()
    {
        return view('pages.instructor.students');
    }
}

