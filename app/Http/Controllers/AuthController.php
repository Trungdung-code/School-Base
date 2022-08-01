<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('pages.auth.login');
    }
    public function signup()
    {
        return view('pages.auth.signup');
    }
    public function forgot()
    {
        return view('pages.auth.forgot');
    }
}
