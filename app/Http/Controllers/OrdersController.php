<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function orders()
    {
        return view('pages.instructor.orders');
    }
}
