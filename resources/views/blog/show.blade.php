@extends('layouts.master')
@section('container')

<div class="defaultcontainer">
<h2 class="title">blog</h2>

<!-- RETURN (BACK) BUTTON -->
<!--<a href="{{ URL::previous() }}" class="back_button">Back</a> -->

    <div class="blogcontainer">
        <div class="blogheroimage"><img src="{{ asset('storage/' . $blog->hero)}}" alt="woman talking to a man" /></div>

            <div class="blogpost">
                    <img class ="blogimagestwo" src="{{ asset('storage/' . $blog->imagetwo)}}" alt="stylish girl">
                <div class="designername"><h2>{{ $blog->title }}</h2></div>
            </div>
    </div>
       <div class="blogimagessmall">
            <div class="bigtextcontainer"><h3 class="bigtext"><span class="highlightbigtext">{{ $blog->bigtext }}</span></h3></div>
            <div class="blogimagethree"><img src="{{ asset('storage/' . $blog->imagethree)}}" alt="girl and sneakers"></div>
            <div class="blogimagefour"><img src="{{ asset('storage/' . $blog->imagefour)}}" alt="girl and sneakers"></div><br>
       </div>    
   <div class="blogtextcontainer">
       <div class="blogtext">
        <br>
        <br>
        <br>
        <br>
        <p><span>{{ $blog->text }} </span></p>
        <br>
        <br>
        <br>
        <br>
    </div>

</div>
</div>
@endsection