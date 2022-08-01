<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareersController extends Controller
{
    public function careers()
    {
        return view('pages.careers');
    }
}
