<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\CategoryGroup;

class CategoryGroupController extends Controller
{

    public function index()
    {
        $groups = CategoryGroup::all();
        return view('teacher.coursename', compact("groups"));
    }

}
