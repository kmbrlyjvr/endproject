@extends('layouts.master')
@section('title', 'Login')
@section('container')
<div class="defaultcontainer">
        <h2 class="title">login</h2>
    
        <div class="formcontainerlogin">
            <!--<img class="loginbg" src="imgs/water1.jpg" /> -->
            <div class="row">
                    <form action="{{ route('auth.login') }}" method="post" autocomplete="on">
                        @csrf
    
                        <div class="form-group">
                            <div class="form-label-group2">
                                <label> E-Mail </label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                        </div>
    
                        <div class="form-group">
                            <div class="form-label-group2">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                        </div>
                    <button class="button" type="submit" class="btn btn-primary">Login</button>
                    <p>Not a member yet? <a href="{{ route('auth.signup') }}">Sign Up</a></p>
            </div>
        </div>
    </div>
    @endsection
