<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkedAccountsController extends Controller
{
    public function linkedaccounts()
    {
        return view('pages.students.linked');
    }
}
