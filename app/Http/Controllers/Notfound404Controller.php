<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Notfound404Controller extends Controller
{
    public function notfound404()
    {
        return view('pages.notfound');
    }
}
