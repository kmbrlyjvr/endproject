@extends('layouts.master')
@section('container')
@push('scripts')
    <script src="{{ mix('/js/manifest.js') }}"></script>
    <script src="{{ mix('/js/vendor.js') }}"></script>
    <script src="{{ mix('/js/app.js') }}"></script>
@endpush

<div class="defaultcontainer">
<!-- RETURN (BACK) BUTTON -->
<a href="{{ URL::previous() }}" class="back_button">Back</a> 

<div id="app">
    <generator-component></generator-component>
</div>

<div>

@endsection
     