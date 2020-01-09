@extends('layouts.master')

@section('title', $posting->title )

@section('container')

	<div class="row">
		<div class="col">

			<div class="card card-body">
				@if($blog->is_published)
					<i class="fa fa-check text-success"></i>
				@else
					<i class="fa fa-ban text-danger"></i>
				@endif
				<h1>{{ $blog->title }}</h1>
				<p class="lead">{{ $blog->text }}</p>
				<p>{{ diff_date($blog->created_at) }}</p>

				@if($blog->user)
					<p>User: {{ $blog->user->name }}</p>
				@endif

				<span>
					<a href="{{ route('blog') }}" class="btn btn-outline-primary">Back</a>
					<a href="{{ route('blog.edit', $posting->id) }}" class="btn btn-outline-primary">Edit</a>
					<form action="{{ route('blogs.destroy', $blog->id) }}" method="post">
						@csrf
						@method('delete')
						{{--
						<input type="text" name="_method" value="delete">
						--}}
						<button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
					</form>

				</span>
			</div>

		</div>
	</div>

@endsection
