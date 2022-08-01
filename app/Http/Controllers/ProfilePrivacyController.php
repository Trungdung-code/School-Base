<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilePrivacyController extends Controller
{
    public function profileprivacy()
    {
        return view('pages.students.profileprivacy');
    }
}
