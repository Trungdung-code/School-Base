<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileinsController extends Controller
{
    public function profileins()
    {
        return view('pages.instructor.profile');
    }
}
