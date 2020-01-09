@extends('layouts.master')

@section('title', 'Signup')

@section('container')

	<div class="formcontainer">
		<div class="row">
			<div class="formlogreg">
			<h5 class="formtitle">Sign up</h5>

				<form action="{{ route('auth.postSignup') }}" method="post" autocomplete="off">

					@csrf

					<div class="form-group">
						<div class="form-label-group">
							<label>Name</label>
							<input type="text" class="form-control" name="name" required>
						</div>
					</div>

					<div class="form-group">
						<div class="form-label-group">
							<label>Email</label>
							<input type="email" class="form-control" name="email" required>
						</div>
					</div>

					<div class="form-group">
						<div class="form-label-group">
							<label>Password</label>
							<input type="password" class="form-control" name="password" required>
						</div>
					</div>

					<div class="form-group">
						<div class="form-label-group">
							<label>Password Confirm</label>
							<input type="password" class="form-control" name="password_confirmation" required>
						</div>
					</div>

					<div class="form-group form-check">
						<div class="form-label">
							<input type="checkbox" class="form-check-input" id="checkAccept" name="accept_terms">
							<label class="form-check-label" for="checkAccept"> I accept Terms & Conditions</label>
						</div>
					</div>

					<button type="submit" class="btn btn-primary">Sign up</button>
					<p>Already a member? <a href="{{ route('auth.login') }}">Login</a></p>

				</form>
			</div>
			</div>

		</div>
	</div>

@endsection
