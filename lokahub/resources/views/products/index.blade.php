<!-- index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container py-5">
    <!-- Header Section -->
    <div class="row align-items-center mb-4">
        <div class="col-md-6">
            <h2 class="fw-bold mb-0">Products</h2>
            <p class="text-muted mb-md-0">Explore what our community has to offer</p>
        </div>
        <div class="col-md-6 text-md-end">
            <a href="{{ route('products.create') }}" class="btn btn-primary">
                <i class="fas fa-plus-circle me-2"></i>Add New Product
            </a>
        </div>
    </div>

    <!-- Search and Filter Section -->
    <div class="card border-0 custom-shadow mb-4">
        <div class="card-body">
            <form action="{{ route('products.index') }}" method="GET" class="row g-3">
                <!-- Search -->
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-text bg-white">
                            <i class="fas fa-search text-muted"></i>
                        </span>
                        <input type="text" class="form-control" name="search" 
                               placeholder="Search products..." value="{{ request('search') }}">
                    </div>
                </div>

                <!-- Category Filter -->
                <div class="col-md-3">
                    <select class="form-select" name="category">
                        <option value="">All Categories</option>
                        <option value="electronics" {{ request('category') == 'electronics' ? 'selected' : '' }}>Electronics</option>
                        <option value="books" {{ request('category') == 'books' ? 'selected' : '' }}>Books</option>
                        <option value="clothing" {{ request('category') == 'clothing' ? 'selected' : '' }}>Clothing</option>
                        <option value="furniture" {{ request('category') == 'furniture' ? 'selected' : '' }}>Furniture</option>
                        <option value="others" {{ request('category') == 'others' ? 'selected' : '' }}>Others</option>
                    </select>
                </div>

                <!-- Price Range -->
                <div class="col-md-3">
                    <select class="form-select" name="price_range">
                        <option value="">All Prices</option>
                        <option value="0-50" {{ request('price_range') == '0-50' ? 'selected' : '' }}>Under Rp50.000</option>
                        <option value="50-100" {{ request('price_range') == '50-100' ? 'selected' : '' }}>Rp50.000 - Rp100.000</option>
                        <option value="100-200" {{ request('price_range') == '100-200' ? 'selected' : '' }}>Rp100.000 - Rp200.000</option>
                        <option value="200+" {{ request('price_range') == '200+' ? 'selected' : '' }}>Over Rp200.000</option>
                    </select>
                </div>

                <!-- Filter Button -->
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary w-100">
                        <i class="fas fa-filter me-2"></i>Filter
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Products Grid -->
    <div class="row g-4">
        @forelse($products as $product)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 custom-shadow product-card">
                    <!-- Product Image -->
                    <div class="position-relative">
                        <img src="{{ $product->image_url ?? '/api/placeholder/400/300' }}" 
                             class="card-img-top" alt="{{ $product->name }}"
                             style="height: 200px; object-fit: cover;">
                        <div class="position-absolute top-0 end-0 p-2">
                            <span class="badge bg-{{ $product->condition === 'new' ? 'success' : 'warning' }}">
                                {{ ucfirst($product->condition) }}
                            </span>
                        </div>
                    </div>

                    <!-- Product Details -->
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h5 class="card-title mb-0 fw-bold">{{ $product->name }}</h5>
                            <span class="badge bg-primary">{{ ucfirst($product->category) }}</span>
                        </div>
                        <p class="card-text text-muted mb-2">
                            {{ Str::limit($product->description, 100) }}
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="fw-bold text-primary mb-0">Rp{{ number_format($product->price, 0, ',', '.') }}</h5>
                            <small class="text-muted">Posted {{ $product->created_at->diffForHumans() }}</small>
                        </div>
                    </div>

                    <!-- Product Actions -->
                    <div class="card-footer bg-white border-0 pt-0">
                        <div class="d-flex gap-2">
                            <a href="{{ route('products.show', $product) }}" 
                               class="btn btn-outline-primary flex-grow-1">
                                <i class="fas fa-eye me-1"></i>View Details
                            </a>
                            @if(auth()->id() === $product->user_id)
                                <a href="{{ route('products.edit', $product) }}" 
                                   class="btn btn-outline-secondary">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('products.destroy', $product) }}" 
                                      method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger" 
                                            onclick="return confirm('Are you sure you want to delete this product?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="card border-0 custom-shadow">
                    <div class="card-body text-center py-5">
                        <i class="fas fa-box-open fa-3x text-muted mb-3"></i>
                        <h3 class="fw-bold">No Products Found</h3>
                        <p class="text-muted mb-4">
                            @if(request('search') || request('category') || request('price_range'))
                                No products match your search criteria. Try adjusting your filters.
                            @else
                                There are no products available at the moment.
                            @endif
                        </p>
                        @if(request('search') || request('category') || request('price_range'))
                            <a href="{{ route('products.index') }}" class="btn btn-primary">
                                <i class="fas fa-sync-alt me-2"></i>Reset Filters
                            </a>
                        @else
                            <a href="{{ route('products.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus-circle me-2"></i>Add First Product
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        @endforelse
    </div>

    <!-- Pagination -->
    <div class="mt-4">
        {{ $products->links() }}
    </div>
</div>

<!-- Add to Cart Modal -->
<div class="modal fade" id="addToCartModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add to Cart</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <!-- Add to cart form would go here -->
            </div>
        </div>
    </div>
</div>

<style>
    .product-card {
        transition: transform 0.2s ease-in-out;
    }
    .product-card:hover {
        transform: translateY(-5px);
    }
    .custom-shadow {
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    }
</style>
@endsection