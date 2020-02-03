@extends('layouts.master')
@section('title', 'Signup')
@section('container')

<div class="defaultcontainer">
		<h2 class="title">sign up and sit down</h2>

	<div class="formcontainer">
		<img src="designers/signup.jpg" alt="people sitting and drinking" />
		<div class="row">
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
								<label>Address</label>
								<input type="text" class="form-control" name="address" required>
							</div>
						</div>

					<div class="form-group">
							<div class="form-label-group">
								<label>ZIP Code</label>
								<input type="text" class="form-control" name="zip" required>
							</div>
						</div>
						<div class="form-group">
								<div class="form-label-group">
									<label for="country">Select Country</label>
									<select name="country" id="country">
											<option value="Austria">Austria</option>
											<option value="Belgium">Belgium</option>
											<option value="Canada">Canada</option>
											<option value="Denmark">Denmark</option>
											<option value="Norway">Norway</option>
											<option value="Philippines">Philippines</option>
											<option value="Sweden">Sweden</option>
											<option value="United Kingdom">United Kingdom</option>
											<option value="United States">United States</option>
									</select>
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

					<button class="button" type="submit">Sign up</button>
					<p>Already a member? <a href="{{ route('auth.login') }}">Login</a></p>

				</form>
			</div>
	</div>
</div>

@endsection
