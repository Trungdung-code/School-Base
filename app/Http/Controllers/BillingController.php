<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function billinginfo()
    {
        return view('pages.students.billinginfo');
    }
}
