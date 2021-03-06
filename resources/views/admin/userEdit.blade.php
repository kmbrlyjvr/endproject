@extends('layouts.masterAdmin')
@section('container')

       <div class="area">  
            <h2>Userslist</h2>

<div class="defaultcontainer">
    <div class="formcontainer">

        <div class="row">
                <form action="{{ route('admin.user.update', $user->id) }}" method="post" autocomplete="off">
                    @csrf
                    @method('put')

					<div class="form-group">
                            <div class="form-label-group2">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $user->name }}" required>
                            </div>
                        </div>


                        <div class="form-group">
                                <div class="form-label-group2">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="address" value="{{ $user->address }}" required>
                                </div>
                            </div>


					<div class="form-group">
                            <div class="form-label-group2">
                                <label>ZIP Code</label>
                                <input type="text" class="form-control" name="zip" value="{{ $user->zip }}" required>
                            </div>
                        </div>

                    
                        <div class="form-group">
								<div class="form-label-grou2">
									<label for="country">Select Country</label>
									<select name="country" id="country" value="{{ $user->country }}">
											<option value="Austria">Austria</option>
											<option value="Norway">Norway</option>
											<option value="Philippines">Philippines</option>
											<option value="United Kingdom">United Kingdom</option>
											<option value="United States">United States</option>
									</select>
								</div>
							</div>
  
                <button class="button" type="submit">update</button>
            </form>
        </div>
    </div>
</div>
@endsection
