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

        return view('blog.create', compact('blog'));
    }

    
    public function upload(Request $request)
    {
        if (!empty($_POST) && $_SERVER['REQUEST_METHOD'] == "POST") {

            $folder = "assets/img/";

            if (!empty($_FILES['img']['tmp_name'])) {
                $img = $folder . $_FILES['img']['name'];
                move_uploaded_file($_FILES['publig/img']['tmp_name'], $img);
            } 

            echo "<div class=\"successupload\"><p>Successfully Uploaded!</p></div>";

            $blog = new Blog();
            $blog->setBlog($_POST['title'],$_POST['text'],$folder.$_FILES['image']['name']);
        }

        return redirect()->route('blog.index')->with('success');
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

        return redirect()->route('blog.store', $blog->id)->with('success', 'blog created');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $blog = Blog::findOrFail($id);

        return view('blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $this->validate($request, [
            'title' => 'required|string|min:3|max:192',
            'text' => 'required|string|between:2,140',
            'img' => 'required',
        ]);
        
        $blog->fill($request->all());
        $blog->is_published = $request->has('is_published');
        $blog->save();

        return redirect()->route('blog.index', $blog->id)->with('success', 'Blog updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('blog.index')->with('success', 'Blogpost deleted!');
    }
}
