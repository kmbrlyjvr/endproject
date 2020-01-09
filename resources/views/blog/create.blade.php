@extends('layouts.master')

@section('container')

	<div class="row justify-content-center">
		<div class="col-6">

			<div class="card card-body">

				<h1>Upload your project:</h1>

				<form action="{{ route('blog.store') }}" method="post" autocomplete="off">

					@include('blog_form')

				</form>

			</div>

		</div>
	</div>

@endsection
