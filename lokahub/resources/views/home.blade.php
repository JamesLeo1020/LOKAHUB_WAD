@extends('layouts.app')

@section('content')
    <div class="bg-primary text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="display-4 fw-bold mb-4">Welcome to LokaHub</h1>
                    <p class="lead mb-4">Your one-stop platform for safe and easy buying and selling among the Telkom University community.</p>
                    <a class="btn btn-light btn-lg px-4" href="{{ route('products.index') }}">
                        <i class="fas fa-shopping-cart me-2"></i>Explore Products
                    </a>
                </div>
                <div class="col-md-6">
            <img src="https://www.boostmyshop.com/wp-content/uploads/2023/08/1692775286596.jpg" alt="Marketplace illustration" class="img-fluid rounded shadow" width="300" height="200">
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <h2 class="text-center mb-5 fw-bold">Our Features</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 feature-card custom-shadow border-0">
                    <div class="card-body text-center p-4">
                        <i class="fas fa-shield-alt text-primary fa-3x mb-3"></i>
                        <h5 class="card-title fw-bold">Secure Transactions</h5>
                        <p class="card-text text-muted">We ensure that all transactions are safe and secure, giving you peace of mind while buying and selling.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 feature-card custom-shadow border-0">
                    <div class="card-body text-center p-4">
                        <i class="fas fa-mobile-alt text-primary fa-3x mb-3"></i>
                        <h5 class="card-title fw-bold">User-Friendly Interface</h5>
                        <p class="card-text text-muted">Our platform is designed to be intuitive and easy to navigate, making your experience seamless.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 feature-card custom-shadow border-0">
                    <div class="card-body text-center p-4">
                        <i class="fas fa-users text-primary fa-3x mb-3"></i>
                        <h5 class="card-title fw-bold">Community Driven</h5>
                        <p class="card-text text-muted">Join a vibrant community of students and local sellers, fostering connections and opportunities.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center py-5">
            <h2 class="fw-bold mb-5">How It Works</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="p-4 bg-white rounded custom-shadow">
                        <div class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fas fa-user-plus fa-2x"></i>
                        </div>
                        <h5 class="fw-bold">1. Sign Up</h5>
                        <p class="text-muted">Create an account to start buying and selling.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 bg-white rounded custom-shadow">
                        <div class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fas fa-search fa-2x"></i>
                        </div>
                        <h5 class="fw-bold">2. Browse Products</h5>
                        <p class="text-muted">Explore a wide range of products available in your community.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 bg-white rounded custom-shadow">
                        <div class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fas fa-handshake fa-2x"></i>
                        </div>
                        <h5 class="fw-bold">3. Make Transactions</h5>
                        <p class="text-muted">Enjoy secure transactions and connect with other users.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center py-5">
            <h2 class="fw-bold mb-4">Ready to Get Started?</h2>
            <p class="text-muted mb-4">Join Loka Hub and start your buying and selling journey today!</p>
            <a class="btn btn-primary btn-lg px-5" href="{{ route('products.index') }}">
                <i class="fas fa-rocket me-2"></i>Start Exploring
            </a>
        </div>
    </div>
@endsection