<!-- create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 custom-shadow">
                <div class="card-header bg-white py-3">
                    <div class="d-flex align-items-center">
                        <a href="{{ route('products.index') }}" class="btn btn-outline-primary me-3">
                            <i class="fas fa-arrow-left"></i>
                        </a>
                        <h4 class="fw-bold m-0">Create New Product</h4>
                    </div>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Product Name -->
                        <div class="mb-4">
                            <label for="name" class="form-label fw-semibold">Product Name <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-box"></i></span>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                       id="name" name="name" value="{{ old('name') }}" 
                                       placeholder="Enter product name">
                            </div>
                            @error('name')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Description -->
                        <div class="mb-4">
                            <label for="description" class="form-label fw-semibold">Description <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-align-left"></i></span>
                                <textarea class="form-control @error('description') is-invalid @enderror" 
                                          id="description" name="description" rows="4" 
                                          placeholder="Describe your product">{{ old('description') }}</textarea>
                            </div>
                            @error('description')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <!-- Price -->
                            <div class="col-md-6 mb-4">
                                <label for="price" class="form-label fw-semibold">Price <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-tag"></i></span>
                                    <input type="number" class="form-control @error('price') is-invalid @enderror" 
                                           id="price" name="price" value="{{ old('price') }}" 
                                           placeholder="Enter price">
                                </div>
                                @error('price')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Category -->
                            <div class="col-md-6 mb-4">
                                <label for="category" class="form-label fw-semibold">Category <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-folder"></i></span>
                                    <select class="form-select @error('category') is-invalid @enderror" 
                                            id="category" name="category">
                                        <option value="" selected disabled>Select a category</option>
                                        <option value="electronics">Electronics</option>
                                        <option value="books">Books</option>
                                        <option value="clothing">Clothing</option>
                                        <option value="furniture">Furniture</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                                @error('category')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Condition -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Condition <span class="text-danger">*</span></label>
                            <div class="d-flex gap-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="condition" 
                                           id="conditionNew" value="new" checked>
                                    <label class="form-check-label" for="conditionNew">
                                        New
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="condition" 
                                           id="conditionUsed" value="used">
                                    <label class="form-check-label" for="conditionUsed">
                                        Used
                                    </label>
                                </div>
                            </div>
                            @error('condition')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Product Images -->
                        <div class="mb-4">
                            <label for="images" class="form-label fw-semibold">Product Images</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-images"></i></span>
                                <input type="file" class="form-control @error('images') is-invalid @enderror" 
                                       id="images" name="images[]" multiple accept="image/*">
                            </div>
                            <div class="form-text">Upload up to 5 images (Max 2MB each)</div>
                            @error('images')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Additional Information -->
                        <div class="mb-4">
                            <label for="additional_info" class="form-label fw-semibold">Additional Information</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-info-circle"></i></span>
                                <textarea class="form-control" id="additional_info" name="additional_info" 
                                          rows="3" placeholder="Any additional details about your product">{{ old('additional_info') }}</textarea>
                            </div>
                        </div>

                        <!-- Submit Buttons -->
                        <div class="d-flex gap-2 justify-content-end">
                            <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">
                                <i class="fas fa-times me-1"></i> Cancel
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-1"></i> Create Product
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Tips Card -->
            <div class="card border-0 custom-shadow mt-4">
                <div class="card-body">
                    <h5 class="card-title fw-bold mb-3">
                        <i class="fas fa-lightbulb text-warning me-2"></i>
                        Tips for a Great Listing
                    </h5>
                    <ul class="list-unstyled mb-0">
                        <li class="d-flex align-items-start mb-2">
                            <i class="fas fa-check-circle text-success me-2 mt-1"></i>
                            <span>Use high-quality, clear images from multiple angles</span>
                        </li>
                        <li class="d-flex align-items-start mb-2">
                            <i class="fas fa-check-circle text-success me-2 mt-1"></i>
                            <span>Provide detailed, accurate descriptions</span>
                        </li>
                        <li class="d-flex align-items-start mb-2">
                            <i class="fas fa-check-circle text-success me-2 mt-1"></i>
                            <span>Set a competitive price based on product condition</span>
                        </li>
                        <li class="d-flex align-items-start">
                            <i class="fas fa-check-circle text-success me-2 mt-1"></i>
                            <span>Include all relevant product specifications</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection