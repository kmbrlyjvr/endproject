
@extends('layouts.master')
@section('container')

<div class="defaultcontainer">
    <div class="trouserscontainer2">
        <h2 class="title2">Choose Trouser</h2>


        @foreach ($items as $item)
            <a href="{{ route('customize', $item->id) }}">
                <div class="trousers trousers-1">
                   <div>
                         <img src="{{ route('svg.render', [$item->svg]) }}" /> 
                    </div>
                </div>
            </a>
        @endforeach
    </div>
@endsection