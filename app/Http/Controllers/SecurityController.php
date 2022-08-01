<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecurityController extends Controller
{
    public function security()
    {
        return view('pages.students.security');
    }
}
