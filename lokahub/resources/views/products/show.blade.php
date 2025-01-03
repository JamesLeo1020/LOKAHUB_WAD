@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mt-4 text-center">{{ $product->name }}</h1>
        <div class="card mb-4">
            <img src="{{ $product->image ? asset('storage/' . $product->image) : 'https://via.placeholder.com/300' }}" class="card-img-top" alt="{{ $product->name }}">
            <div class="card-body">
                <p class="card-text">{{ $product->description }}</p>
                <p class="card-text"><strong>Price:</strong> Rp{{ number_format($product->price, 2, ',', '.') }}</p>
                <p class="card-text"><strong>Category:</strong> {{ $product->category }}</p>
                <div class="text-center">
                    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to Products</a>
                </div>
            </div>
        </div>
    </div>
@endsection