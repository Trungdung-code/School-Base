<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacypolicyController extends Controller
{
    public function privacypolicy()
    {
        return view('pages.extrapage.privacy_policy');
    }
}
