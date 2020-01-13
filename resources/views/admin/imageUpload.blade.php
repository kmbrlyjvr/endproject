@extends('layouts.master')
@section('container')

<!--<h2>Upload new designers project</h2>-->

<div class="defaultcontainer">

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

            <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
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


@endsection



