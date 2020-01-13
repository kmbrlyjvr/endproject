<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\BlogImage;

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

    /*public function imageUploadPost()
    {        
        request()->validate([
            'image' => 'required|image|mimes:jpeg,jpg,png,svg',
        ]);


        $imageName = time().'.'.request()->image->getClientOriginalExtension();

        /*equest()->image->move(public_path('designers'), $imageName);
        $blogimage = new Blogimage();
        $blogimage = request()->save();

        return back()
            ->with('success', 'You have successfully uploaded your design piece.')
            ->with('blogimage', $imageName);
        
}*/

    public function ImageUploadPost(Request $request)
    {


        $this->validate($request, [
                'imageName' => 'required',
                'imageName.*' => 'mimes:jpeg,jpg,png,svg'
        ]);


        if($request->hasfile('imageName'))
         {
            foreach($request->file('imageName') as $file)
            {
                $name = time().'.'.$file->extension();
                $file->move(public_path().'/designers/', $name);  
                $data[] = $name;  
            }
         }


         $blogimage = new BlogImage();
         $blogimage->imageName=json_encode($data);
         $blogimage->save();


        return back()->with('success', 'Your images has been successfully added');
    }

    
}
