@extends('layouts.master')
@section('container')

<div class="defaultcontainer">
<h2 class="title">blog</h2>

<!-- RETURN (BACK) BUTTON -->
<!--<a href="{{ URL::previous() }}" class="back_button">Back</a> -->

    <div class="blogcontainer">
        <div class="blogheroimage"><img src="{{ asset('storage/' . $blog->hero)}}" alt="woman talking to a man" /></div>

            <div class="blogpost">
                    <p><span class="highlight">{{ $blog->text }} </span></p>

                        <img class ="blogimagestwo" src="{{ asset('storage/' . $blog->imagetwo)}}" alt="stylish girl">
                    <div class="designername"><h2>{{ $blog->title }}</h2></div>
            </div>
    </div>
       <div class="blogimagessmall">
            <div class="bigtextcontainer"><h2 class="bigtext"> <span class="highlightbigtext">{{ $blog->bigtext }}</span><h2></div>
            <div class="blogimagethree"><img src="{{ asset('storage/' . $blog->imagethree)}}" alt="girl and sneakers"></div>
            <div class="blogimagefour"><img src="{{ asset('storage/' . $blog->imagefour)}}" alt="girl and sneakers"></div>
       </div>       
</div>
@endsection