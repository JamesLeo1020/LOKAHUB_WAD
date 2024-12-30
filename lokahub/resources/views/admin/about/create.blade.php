@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create About Us</h1>

    <form action="{{ route('admin.about.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea id="content" name="content" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection
