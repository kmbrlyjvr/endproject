@extends('layouts.master')
@section('container')

<section class="defaultcontainer">
<h2 class="title outer">blog</h2>

<a href="{{ URL::previous() }}" class="back_button">Back</a> 

<div class="bloghomecontainer">
     <div class="bloghero fadeIn"><img src="imgs/bg1.jpg" style="opacity:0.8;" alt="multiple pic for stylish girl" /></div>

     <!-- <img src="imgs/blackpaper.jpg" alt="black paper" / -->

     <div class="bloghomepost">
    @foreach($blogs as $blog)

   <h2 class="title2 inner"><span class="highlightnude"><a class="bloglink" href="{{ route('blog.show', $blog->id) }}">{{ $blog->title }}</a></span></h2>

    @endforeach 
    </div>
</div>
</section>
@endsection