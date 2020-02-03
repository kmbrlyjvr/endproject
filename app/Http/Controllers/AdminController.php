<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Orders;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    public function blogpost(Request $request)
    {
        $blog = Blog::all();

        return view('admin.blogpost.index', ['blog' => $blog]);
    }
    

    public function store(Request $request)
    {
        $this->validate($request, [

            'title' => 'required|string|min:3|max:192',
            'text' => 'required|string',
            'bigtext' => 'required|string',
            'hero' => 'required|file',
            'imagetwo' => 'required|file',
            'imagethree' => 'required|file',
            'imagefour' => 'required|file',

        ]);

        $blog = new Blog();
        $blog->fill($request->only(['title', 'text', 'bigtext', 'is_published']));
        $blog->save();

        $storagePath = "blog/{$blog->id}";

        $pathHero = $request->file('hero')->store($storagePath);
        $pathImagetwo = $request->file('imagetwo')->store($storagePath);
        $pathImagethree = $request->file('imagethree')->store($storagePath);
        $pathImagefour = $request->file('imagefour')->store($storagePath);

        $blog->hero = $pathHero;
        $blog->imagetwo = $pathImagetwo;
        $blog->imagethree = $pathImagethree;
        $blog->imagefour = $pathImagefour;
        $blog->save();

        return redirect()->route('admin.blogpost', $blog->id);
    }


    public function create(Request $blog)
    {
        $blog = new Blog;

        return view('admin.blogpost.create', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        return view('admin.blogpost.edit', compact('blog'));
    }

    public function show(Blog $blog)
    {
        return view('blog.show', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $this->validate($request, [
            'title' => 'required|string|min:3|max:192',
            'text' => 'required|string|between:2,140',
        ]);
        
        $blog->fill($request->all());
        $blog->is_published = $request->has('is_published');
        $blog->save();

        return redirect()->route('admin.blogpost.index', $blog->id);
    }

}

