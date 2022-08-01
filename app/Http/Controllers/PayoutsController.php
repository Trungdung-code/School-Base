<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayoutsController extends Controller
{
    public function payouts()
    {
        return view('pages.instructor.payouts');
    }
}
