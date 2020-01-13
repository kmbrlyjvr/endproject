@extends('layouts.master')
@section('container')

<div class="defaultcontainer">
    <div class="aboutcontainer">
        <a href="{{ URL::previous() }}" class="back_button">Back</a> 

        <div class="aboutheroimage"><img src="imgs/blackwater.jpg"></div>

            <p style="text-align:center;">behind the story of</p>

                    <div class="logo">
                        <img src="/svgs/logo.svg">
                    </div>

            <div class="sintastory">
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)</p>
            </div>
    </div>
</div>

@endsection