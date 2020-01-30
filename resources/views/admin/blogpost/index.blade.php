
@extends('layouts.masterAdmin')
@section('container')

<div class="area">
<div class="defaultcontainer">
        <h2 class="title">Upload new Blogpost</h1>
            <div class="blogadmincontainer">
                <form class="form" id="form"  action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <input type="hidden" name="type"/>
                    @csrf
                            <br>
                            <div class="form-admin-group">
                                <label for="title">Title</label><br>
                                <input type="text" name="title" id="title" value="{{ old('title') }}">
                            </div>
                            <br>
                            <div class="form-admin-group">
                                <label>Text</label>
                                <textarea class="form-control" style="height:200px" name="text">{{ old('text') }}</textarea>
                            </div>
                            <div class="form-admin-group">
                                    <label for="bigtext">Phrase</label><br>
                                    <input type="text" name="bigtext" id="bigtext" value="{{ old('bigtext') }}">
                                </div>
                            <div class="form-admin-group">
                                    <label for="images">Hero (Landscape)</label><br>
                                    <input type="file" name="hero" id="hero">
                            </div>
                            <br>
                            <div class="form-admin-group">
                                    <label for="images">Image Two (Portrait)</label><br>
                                    <input type="file" name="imagetwo" id="imagetwo">
                            </div>
                            <br>
                            <div class="form-admin-group">
                                    <label for="images">Image Three (Portrait)</label><br>
                                    <input type="file" name="imagethree" id="imagethree">
                            </div>
                            <br>
                            <div class="form-admin-group">
                                    <label for="images">Image Four (Portrait)</label><br>
                                    <input type="file" name="imagefour" id="imagefour">
                            </div>
                    <br>
                    <div class="form-admin-group"><br>

                        <input type="hidden" name="is_published" value="0">
                        <input type="checkbox" class="form-check-input" id="publish" name="is_published" value="1" @if(old('is_published')) checked @endif>
                        <label class="form-check-label" for="isPublished">publish</label>

                        <button class="button" type="submit">Publish</button>
                </div>
            </form>

            <div class="blogpublish">
                        <h3>Published Blogposts</h3>
                        @foreach($blog as $blog)
                        <p>{{ $blog->title }}</p>
                        @endforeach


                    </div>
        </div>
    </div>
</div>

@endsection
