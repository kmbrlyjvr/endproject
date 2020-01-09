@extends('layouts.master')

@section('container')

	<div class="row justify-content-center">
		<div class="col-6">

			<div class="card card-body">

				<h1>Edit a Blogpost:</h1>

				<form action="{{ route('blogs.update', $blog->id) }}" method="post" autocomplete="off">

					@method('put')
					@include('blogs_form')

				</form>

			</div>

		</div>
	</div>

@endsection
