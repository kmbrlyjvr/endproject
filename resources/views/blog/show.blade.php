@extends('layouts.master')
@section('container')

<section class="defaultcontainer">
<h2 class="title outer">blog</h2>

<!-- RETURN (BACK) BUTTON -->
<!--<a href="{{ URL::previous() }}" class="back_button">Back</a> -->

    <div class="blogcontainer">
        <div class="blogheroimage fadeIn"><img src="{{ asset('storage/' . $blog->hero)}}" alt="woman talking to a man" /></div>

            <div class="blogpost">
                    <img class="blogimagestwo inner" src="{{ asset('storage/' . $blog->imagetwo)}}" alt="stylish girl">
                <div class="designername outer"><h2>{{ $blog->title }}</h2></div>
            </div>
    </div>
       <section class="blogimagessmall">
            <div class="bigtextcontainer"><h3 class="bigtext outer"><span class="highlightbigtext">{{ $blog->bigtext }}</span></h3></div>
            <div class="blogimagethree"><img class="inner" src="{{ asset('storage/' . $blog->imagethree)}}" alt="girl and sneakers"></div>
            <div class="blogimagefour"><img class="inner" src="{{ asset('storage/' . $blog->imagefour)}}" alt="girl and sneakers"></div><br>
       </section>    
   <section class="blogtextcontainer">
       <div class="blogtext">
        <br>
        <br>
        <br>
        <br>
        <p class="inner"><span>{{ $blog->text }} </span></p>
        <br>
        <br>
        <br>
        <br>
       </section>

</div>
</section>
@endsection