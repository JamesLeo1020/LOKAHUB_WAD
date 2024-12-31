@extends('layouts.app')

@section('content')
<div class="container">
    <h1>About Us Management</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('admin.about.create') }}" class="btn btn-primary mb-3">Create New About</a>

    @if ($abouts->isEmpty())
        <div class="alert alert-info">
            No about content found. Create a new one to display here.
        </div>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Content</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($abouts as $about)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $about->content }}</td>
                        <td>
                            <a href="{{ route('admin.about.edit', $about->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.about.destroy', $about->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this content?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
