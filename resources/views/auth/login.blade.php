@extends('layouts.master')

@section('title', 'Login')

@section('container')

<div class="formcontainer">
    <div class="row">
        <div class="formlogreg">
        <h5 class="formtitle">Login</h5>

         <form action="{{ route('auth.login') }}" method="post" autocomplete="off">

            @csrf

            <div class="form-group">
                <div class="form-label-group">
                    <label> E-Mail </label>
                    <input type="email" class="form-control" name="email" required>
                </div>
            </div>

            <div class="form-group">
                <div class="form-label-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <p>Not a member yet? <a href="{{ route('auth.signup') }}">Sign Up</a></p>
    </div>
    </div>
</div>
@endsection

