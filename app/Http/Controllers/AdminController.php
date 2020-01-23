<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Orders;
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
        $users = User::all();
        return view('admin.index', ['users' => $users]);
    }

    public function users()
    {
        $users = User::all();
        return view('admin.users', ['users' => $users]);
    }

    public function orders()
    {   
        $users = User::all();
        $orders = Orders::all();
        return view('admin.orders', ['users' => $users], ['orders' => $orders]);
    }

    public function blogpost()
    {
        return view('admin.blogpost.index');
    }

    public function blogType($type)
    {
        $imgs = \Storage::files($type);
        return view('admin.blog.show', [
            'imgs' => $imgs,
            'type' => $type,
        ]);
    }

    public function uploadImgs(UploadImgRequest $request)
    {
        $type = $request->get('type');
        foreach ($request->images as $image) {
            $image->storage($type);
        }

        return redirect()->route('admin.blogType', ['type' => $type]);
    }
    

    public function store(Request $request)
    {
        $this->validate($request, [

            'title' => 'required|string|min:3|max:192',
            'text' => 'required|string|between:2,140',
        ]);

        $blog = new Blog();
        $blog->fill($request->all());
        $blog->is_published = $request->has('is_published');
        $blog->save();

        return redirect()->route('admin.blogpost.show', $blog->id)->width('success', 'Blog created!');
    }


    public function create(Request $request)
    {
        $blog = new Blog;

        return view('admin.blogpost.create', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        return view('admin.blogpost.edit', compact('blog'));
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

        return redirect()->route('admin.blogpost.index', $blog->id)->with('success', 'Blog updated!');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('admin.blogpost.index')->with('success', 'Blogpost deleted!');
    }
}

