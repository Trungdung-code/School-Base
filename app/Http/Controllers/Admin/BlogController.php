<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('updated_at', 'DESC')->paginate(10);

        return view('teacher.blogs.index', compact('blogs'));
    }

    public function show(Request $request)
    {
        $blog = Blog::findOrFail($request->id);

        return view('teacher.blogs.show', compact('blog'));
    }

    public function create()
    {
        return view('teacher.blogs.create');
    }

    public function store(Request $request)
    {
        $destinationPath = 'uploads/blogs';
        $fileName = '/img/studyingboy.png';
        $path = $fileName;

        if (Input::hasFile('media')) {
            $fileName = "blog" . time() . '.' . $request->file('media')->getClientOriginalExtension();
            $request->file('media')->move($destinationPath, $fileName);
            $path = '/' . $destinationPath . '/' . $fileName;
        }

        $blog = Blog::create([
            "title" => $request->title,
            "content" => $request->blogcontent,
            "recapitulation" => $request->recapitulation,
            "slug" => str_slug($request->title),
            "display_image" => $path,
        ]);

        $blog->slug = $blog->id . '-' . $blog->slug;
        $blog->save();

        return redirect()->route('admin.blog.show', $blog->id);
    }

    public function edit(Request $request)
    {
        $blog = Blog::findOrFail($request->id);

        return view('teacher.blogs.edit', compact('blog'));
    }

    public function update(Request $request)
    {
        $blog = Blog::findOrFail($request->id);

        $blog->update($request->all());

        $blog->content = $request->blogcontent;

        if (Input::hasFile('media'))
        {
            $destinationPath = 'uploads/post/display_images';

            if (file_exists(public_path($blog->display_image)) && $blog->display_image != '/img/studyingboy.png')
                unlink(public_path($blog->display_image));

            $fileName = "blog" . time() . '.' . $request->file('media')->getClientOriginalExtension();
            $request->file('media')->move($destinationPath, $fileName);
            $path = '/' . $destinationPath . '/' . $fileName;

            $blog->display_image = $path;
        }

        $blog->save();

        return redirect()->route('admin.blog.show', ['id' => $blog->id]);
    }

    public function delete(Request $request)
    {
        $blog = Blog::findOrFail($request->id);

        unlink(public_path($blog->display_image));

        $blog->delete();

        return redirect()->route('admin.blog.index');
    }

}
