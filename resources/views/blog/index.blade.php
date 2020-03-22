@extends('layouts.master')
@section('container')

<div class="defaultcontainer">
<h2 class="title">blog</h2>

<a href="{{ URL::previous() }}" class="back_button">Back</a> 

<div class="bloghomecontainer">
     <div class="bloghero"><img src="imgs/bg1.jpg" style="opacity:0.8;" alt="multiple pic for stylish girl" /></div>

     <!-- <img src="imgs/blackpaper.jpg" alt="black paper" / -->

     <div class="bloghomepost">
    @foreach($blogs as $blog)

   <h2 class="title2"><span class="highlightnude"><a class="bloglink" href="{{ route('blog.show', $blog->id) }}">{{ $blog->title }}</a></span></h2>

    @endforeach 
    </div>
</div>
</div>
@endsection