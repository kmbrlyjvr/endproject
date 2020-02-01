<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\User;
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
        $blogs = Blog::orderBy('created_at', 'desc')->take(2)->get();

      /*  $blogs = Blog::all();*/
        return view('blog.index', ['blogs' => $blogs]);
    }

    public function show(Blog $blog)
    {
        return view('blog.show', compact('blog'));
    }
    
}
