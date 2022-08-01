<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

use App\Http\Requests;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }

    public function show($title)
    {
        $blog = Blog::where('slug', $title)->first();
        $blogs = Blog::all();
        return view('blogs.show', compact('blog', 'blogs'));
    }
}
