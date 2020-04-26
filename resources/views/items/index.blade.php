
@extends('layouts.master')
@section('container')

<div class="defaultcontainer">
        <h2 class="title">Choose Trouser</h2>

    <div class="trouserscontainer2">


        @foreach ($items as $item)
            <a href="{{ route('customize', $item->id) }}">
                <div class="trousers trousers-1 fadeIn">
                   <div>
                         <img class="fadeIn" src="{{ route('svg.render', [$item->svg]) }}" /> 
                    </div>
                </div>
            </a>
        @endforeach
        </div>
@endsection