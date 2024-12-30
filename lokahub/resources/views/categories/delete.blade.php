@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Delete Category</h1>

    <div class="alert alert-warning">
        <strong>Warning!</strong> Are you sure you want to delete the category "<strong>{{ $category->name }}</strong>"?
    </div>

    <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection