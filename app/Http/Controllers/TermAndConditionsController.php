<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermAndConditionsController extends Controller
{
    public function term()
    {
        return view('pages.extrapage.term_conditions');
    }
}
