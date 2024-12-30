@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit About Us</h1>

    <form action="{{ route('admin.about.update', $about->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea id="content" name="content" class="form-control" rows="5" required>{{ $about->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-warning">Update</button>
    </form>
</div>
@endsection
