@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <h1 class="fw-bold mb-4">About Loka Hub</h1>
                <p class="lead mb-4">Welcome to Loka Hub! We are dedicated to providing a safe and easy platform for buying and selling among the Telkom University community.</p>
                <p class="text-muted">Our mission is to connect students and local sellers, fostering a vibrant marketplace where everyone can benefit from secure and convenient transactions.</p>
            </div>
            <div class="col-md-6">
                <img src="/api/placeholder/600/400" alt="About Us" class="img-fluid rounded shadow">
            </div>
        </div>

        <div class="row g-4 py-5">
            <div class="col-md-4">
                <div class="card h-100 border-0 custom-shadow">
                    <div class="card-body text-center p-4">
                        <i class="fas fa-bullseye text-primary fa-3x mb-3"></i>
                        <h5 class="fw-bold">Our Vision</h5>
                        <p class="text-muted">To become the leading marketplace platform for university communities across Indonesia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 custom-shadow">
                    <div class="card-body text-center p-4">
                        <i class="fas fa-heart text-primary fa-3x mb-3"></i>
                        <h5 class="fw-bold">Our Values</h5>
                        <p class="text-muted">Trust, Security, Community, and Innovation drive everything we do.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 custom-shadow">
                    <div class="card-body text-center p-4">
                        <i class="fas fa-users text-primary fa-3x mb-3"></i>
                        <h5 class="fw-bold">Our Community</h5>
                        <p class="text-muted">A thriving ecosystem of students and sellers working together.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="/api/placeholder/600/400" alt="Our Team" class="img-fluid rounded shadow">
                </div>
                <div class="col-md-6">
                    <h2 class="fw-bold mb-4">Why Choose Loka Hub?</h2>
                    <div class="d-flex mb-3">
                        <div class="me-3">
                            <i class="fas fa-check-circle text-primary fa-2x"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold">Trusted Platform</h5>
                            <p class="text-muted">We verify all sellers and maintain high security standards.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="me-3">
                            <i class="fas fa-check-circle text-primary fa-2x"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold">Easy to Use</h5>
                            <p class="text-muted">Our platform is designed with simplicity and convenience in mind.</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="me-3">
                            <i class="fas fa-check-circle text-primary fa-2x"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold">Community Focus</h5>
                            <p class="text-muted">Built specifically for the Telkom University community.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection