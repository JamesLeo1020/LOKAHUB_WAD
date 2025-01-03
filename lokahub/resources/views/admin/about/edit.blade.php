@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit About Us</h1>
        <form action="{{ route('admin.about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $about->title) }}" required>
            </div>
            <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea name="description" id="description" class="form-control" required>{{ old('description', $about->description) }}</textarea>
            </div>

            <button type="submit" class="btn btn-success mt-3">Update</button>
        </form>
    </div>
@endsection
