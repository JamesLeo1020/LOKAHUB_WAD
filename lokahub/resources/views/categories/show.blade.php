@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Categories</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Create New Category</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('categories.delete', $category->id) }}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- Static Carousel -->
<div id="categoryCarousel" class="carousel slide" data-bs-ride="false">
        <div class="carousel-inner">
            @foreach ($categories as $index => $category)
                @if ($index % 8 === 0) <!-- Start a new carousel item every 8 categories -->
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <div class="d-flex justify-content-around">
                @endif
                            <div class="category-item text-center mx-2">
                                <h5>{{ $category->name }}</h5>
                            </div>
                                <!-- Remove the Edit button from here -->
                @if (($index + 1) % 8 === 0 || $index === count($categories) - 1) <!-- Close the carousel item after 8 categories or at the last category -->
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#categoryCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#categoryCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
@endsection