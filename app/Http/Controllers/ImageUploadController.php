<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function imageUpload()
    {
        return view('imageUpload');
    }

    public function imageUploadPost()
    {        
        request()->validate([
            'image' => 'required|mimetypes:image/svg',
        ]);

        $imageName = time().'.'.request()->image->getClientOriginalExtension();

        request()->image->move(public_path('svgs'), $imageName);

        return back()
            ->with('success', 'You have successfully uploaded your design piece.')
            ->with('image', $imageName);
        
    }
}
