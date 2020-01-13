@extends('layouts.master')

@section('container')

<div class="defaultcontainer">

<div class="formcontainer">

		<h2 class="title">Upload new Blogpost:</h1>

			<form class="add-blogpost"  action="{{ route('blog.store')}}" method="post" enctype="multipart/form-data">
				@csrf
						<br>
						<div class="form-label-group">
								<label for="img">Image</label><br>
								<input type="file" name="img" id="img" class="">
						</div>
								<br>
								<div class="form-label-group">
									<label for="title">Title</label><br>
									<input type="text" name="title" id="title" class="">
								</div>
								<br>
					
								<div class="form-label-group">
									<label for="text">Text</label><br>
									<input type="text" name="text" id="text" class="">
								</div>
						<br>
						<div class="form-label-group"><br>
							<button type="submit">Done</button>
						</div>
			</form>
		</div>
	</div>
</div>

@endsection
