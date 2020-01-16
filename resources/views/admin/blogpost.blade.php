@extends('layouts.master')
@section('container')

<!--<h2>Upload new designers project</h2>-->

<div class="defaultcontainer">
        <h2 class="title">Upload new Blogpost:</h1>
            <div class="uploadcontainer">

            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
            </div>
            <img src="images/{{ Session::get('image') }}">
        @endif
    
    
        @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
        @endif
    
    <div class="formcontainer">
                <form class="add-blogpost"  action="" method="post" enctype="multipart/form-data">
                    @csrf
                                    <br>
                                    <div class="form-label-group">
                                        <label for="title">Title</label><br>
                                        <input type="text" name="title" id="title">
                                    </div>
                                    <br>
                                    <div class="form-label-group">
                                        <label for="text">Text</label><br>
                                        <input type="text" style="height:100px;" name="text" id="text">
                                    </div>
                                    <div class="form-label-group">
                                            <label for="phrase">Phrase</label><br>
                                            <input type="text" name="phrase" id="phrase">
                                        </div>
                                    <div class="form-label-group">
                                            <label for="image">Hero</label><br>
                                            <input type="file" name="image" id="hero">
                                    </div>
                                    <br>
                                    <div class="form-label-group">
                                            <label for="image">Image Two</label><br>
                                            <input type="file" name="image" id="imagetwo">
                                    </div>
                                    <br>
                                    <div class="form-label-group">
                                            <label for="image">Image Three</label><br>
                                            <input type="file" name="image" id="imagethree">
                                    </div>
                                    <br>
                                    <div class="form-label-group">
                                            <label for="image">Image Four</label><br>
                                            <input type="file" name="image" id="imagefour">
                                    </div>
                            <br>
                            <div class="form-label-group"><br>
                                <button type="submit">Done</button>
                            </div>
                </form>
        </div>
</div>
</div>
        

     <!--       <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <input type="file" id="hero" name="image" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <input type="file" id="imagetwo" name="image" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <input type="file" id="imagethree" name="image" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <input type="file" id="imagefour" name="image" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success">Upload</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    -->

@endsection



