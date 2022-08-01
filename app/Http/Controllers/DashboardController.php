<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('student.dashboard', compact('user'));
    }
}
