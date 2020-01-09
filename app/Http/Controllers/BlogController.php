<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blog.index');
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $blog = new Blog;
        $blog->fill($request->old());
        
        return view('blog.create'. compact('blog'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|min:3|max:192',
            'text' => 'required|string|between:2,140',
            'img' => 'required',
        ]);


        $blog = new Blog();
        $blog->fill($request->all());
        $blog->is_published = $request->has('is_published');
        $blog->user_id = auth()->id();
        $blog->save();

        return redirect()->route('blog.show', $blog->id)->with('success', 'blog created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::findOrFail($id);

        return view('blog.show', ['blog' => $blog]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->fill($request->old());

        return view('blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|string|min:3|max:192',
            'text' => 'required|string|between:2,140',
            'img' => 'required',
        ]);
        
        $blog = blog::findOrFail($id);
        $blog->fill($request->all());
        $blog->is_published = $request->has('is_published');
        $blog->save();

        return redirect()->route('blog.show', $blog->id)->with('success', 'Blog updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('blog')->with('success', 'Blogpost deleted!');
    }
}
