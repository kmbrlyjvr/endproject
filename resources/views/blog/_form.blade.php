
@csrf

<div class="form-group">
	<label>Title</label>
	<input type="text" class="form-control" name="title" value="{{ $blog->title }}" required>
</div>

<div class="form-group">
	<label>Text</label>
	<textarea class="form-control" name="text">{{ $blog->text }}</textarea>
</div>

<!-- image upload in SVG -->

<div class="form-group form-check">
	<input type="checkbox" class="form-check-input" id="checkPublished" name="is_published" {{ $blog->is_published ? 'checked' : '' }}>
	<label class="form-check-label" for="checkPublished"> Publish</label>
</div>

<button type="submit" class="btn btn-primary">Save</button>
<a href="{{ route('blog') }}" class="btn btn-outline-primary">Back</a>
