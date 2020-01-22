@extends('layouts.master')
@section('title', 'Edit')
@section('container')

<div class="defaultcontainer">
    <h2 class="title">Edit</h2>

    <div class="formcontainerlogin">
        <!--<img class="loginbg" src="imgs/water1.jpg" /> -->
        <div class="row">
                <form action="{{ route('profile.update', $user->id) }}" method="put" autocomplete="off">
                    @csrf


					<div class="form-group">
                            <div class="form-label-group2">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>


                        <div class="form-group">
                                <div class="form-label-group2">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                            </div>


					<div class="form-group">
                            <div class="form-label-group2">
                                <label>ZIP Code</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>

                    
                        <div class="form-group">
								<div class="form-label-grou2">
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
  
                <button class="button" type="submit" class="btn btn-primary">update</button>
        </div>
    </div>
</div>
@endsection

