@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Delete About Us</h1>

    <div class="alert alert-warning">
        <strong>Warning!</strong> Are you sure you want to delete the "About Us" section titled "<strong>{{ $about->title }}</strong>"?
    </div>

    <form action="{{ route('admin.about.destroy', $about->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
        <a href="{{ route('admin.about.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
