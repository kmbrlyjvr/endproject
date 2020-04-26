@extends('layouts.master')

@push('head')
    <meta name="custom-type" content="{{ $item->svg }}">
@endpush

@push('scripts')
    <script src="{{ mix('/js/manifest.js') }}"></script>
    <script src="{{ mix('/js/vendor.js') }}"></script>
    <script src="{{ mix('/js/app.js') }}"></script>
@endpush

@section('container')


<div class="defaultcontainer">
    <!-- RETURN (BACK) BUTTON -->
    <a href="{{ URL::previous() }}" class="back_button">Back</a> 
        <div id="app">
            <generator-component></generator-component>
        </div>
<div>

@endsection
     