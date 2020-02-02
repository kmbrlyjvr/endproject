
@extends('layouts.masterAdmin')
@section('container')

<div class="area">
        <h2>Upload new Blogpost</h1>

<div class="defaultcontainer">
            <div class="blogadmincontainer">

                <form class="blogadminform" id="form"  action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <input type="hidden" name="type"/>
                    @csrf
                            <br>
                            <div class="form-admin-group">
                                <label for="title">Title</label><br>
                               <input type="text" name="title" id="title" value="{{ old('title') }}">
                            </div>
                            <br>
                            <div class="form-admin-group">
                               <!-- <textarea class="form-control" style="height:200px" name="text">{{ old('text') }}</textarea>-->

                                <textarea placeholder="Blogpost ." id="text" name="text" rows="4" style="overflow: hidden; word-wrap: break-word; resize: none; height: 160px; ">
                                {{ old('text') }}
                                </textarea>  
		                        <br>
                            </div>
                            <br>
                            <div class="form-admin-group">
                                    <label for="bigtext">Big Text / Phrase</label><br>
                                    <input type="text" name="bigtext" id="bigtext" value="{{ old('bigtext') }}">
                                </div>
                                <br>
                            <h2 class="title2">Upload Images</h2>
                            <div class="imageadminblog">
                            <div class="form-admin-group">
                                    <label for="images">Hero (Landscape)</label><br>
                                    <input class="inputfile" type="file" name="hero" id="hero">
                            </div>
                            <br>
                            <div class="form-admin-group">
                                    <label for="images">Image Two (Portrait)</label><br>
                                    <input class="inputfile"  type="file" name="imagetwo" id="imagetwo">
                            </div>
                            <br>
                            <div class="form-admin-group">
                                    <label for="images">Image Three (Portrait)</label><br>
                                    <input class="inputfile"  type="file" name="imagethree" id="imagethree">
                            </div>
                            <br>
                            <div class="form-admin-group">
                                    <label for="images">Image Four (Portrait)</label><br>
                                    <input  class="inputfile" type="file" name="imagefour" id="imagefour">
                            </div>
                        </div>
                    <br>
                    <br>
                    <div class="form-admin-group1">
                        <input type="hidden" name="is_published" value="0">
                        <input type="checkbox" class="form-check-input" id="publish" name="is_published" value="1" @if(old('is_published')) checked @endif>
                        <label class="form-check-label" for="isPublished">public</label>
                        <button class="button" type="submit">Publish</button>
                </div>
            </form>
            <div class="blogpublish">
                    <h3>Published Blogposts</h3>
                    @foreach($blog as $blog)
                    <a href="{{ route('blog.show', $blog->id) }}"><p>{{ $blog->title }}</p></a>
                    @endforeach
                </div>
        </div>
 
    </div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://static.tumblr.com/maopbtg/oimmiw86r/jquery.autosize-min.js'></script>

<script>
    $(document).ready(function(){
  $('#title').focus();
    $('#text').autosize();
});
</script>

@endsection
