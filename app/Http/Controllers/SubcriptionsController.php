<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubcriptionsController extends Controller
{
    public function subscriptions()
    {
        return view('pages.students.subcriptions');
    }
}
