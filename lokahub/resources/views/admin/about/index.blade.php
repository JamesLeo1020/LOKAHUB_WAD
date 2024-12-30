@extends('layouts.app')

@section('content')
<div class="container">
    <h1>About Us Management</h1>
    <a href="{{ route('admin.about.create') }}" class="btn btn-primary mb-3">Create New About</a>

    <table class="table">
        <thead>
            <tr>
                <th>Content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($abouts as $about)
            <tr>
                <td>{{ $about->content }}</td>
                <td>
                    <a href="{{ route('admin.about.edit', $about->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.about.destroy', $about->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
