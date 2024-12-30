@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <!-- About Section -->
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <h1 class="fw-bold mb-4 text-dark">Welcome to Loka Hub</h1>
                <p class="lead mb-4 text-muted">We are dedicated to providing a safe and easy platform for buying and selling among the Telkom University community.</p>
                <p class="text-muted">Our mission is to connect students and local sellers, fostering a vibrant marketplace where everyone can benefit from secure and convenient transactions.</p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('images/logo.png') }}" alt="About Us" class="img-fluid rounded shadow-lg" style="max-width: 400px;">
            </div>
        </div>

        <!-- Vision, Values, and Community -->
        <div class="row g-4 py-5 text-center">
            <div class="col-md-4">
                <div class="card border-0 shadow-lg rounded-4">
                    <div class="card-body">
                        <i class="fas fa-bullseye text-primary fa-3x mb-3"></i>
                        <h5 class="fw-bold">Our Vision</h5>
                        <p class="text-muted">To become the leading marketplace platform for university communities across Indonesia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-lg rounded-4">
                    <div class="card-body">
                        <i class="fas fa-heart text-primary fa-3x mb-3"></i>
                        <h5 class="fw-bold">Our Values</h5>
                        <p class="text-muted">Trust, Security, Community, and Innovation drive everything we do.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-lg rounded-4">
                    <div class="card-body">
                        <i class="fas fa-users text-primary fa-3x mb-3"></i>
                        <h5 class="fw-bold">Our Community</h5>
                        <p class="text-muted">A thriving ecosystem of students and sellers working together.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Meet Our Team Section -->
        <div class="py-5">
            <h2 class="fw-bold mb-4 text-center text-dark">Meet Our Team</h2>
            <div class="d-flex overflow-auto gap-4">
                <!-- Developer 1 - James Hestu Satria -->
                <div class="card text-center shadow-lg rounded-4" style="min-width: 270px; transition: transform 0.3s ease;">
                    <img src="{{ asset('images/developers/james.jpg') }}" alt="James Hestu Satria" class="card-img-top" style="height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">James Hestu Satria</h5>
                        <p class="card-text text-muted">Lead Developer</p>
                    </div>
                </div>

                <!-- Developer 2 - Azhara Rahma Effendi -->
                <div class="card text-center shadow-lg rounded-4" style="min-width: 270px; transition: transform 0.3s ease;">
                    <img src="{{ asset('images/developers/azhara.jpg') }}" alt="Azhara Rahma Effendi" class="card-img-top" style="height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Azhara Rahma Effendi</h5>
                        <p class="card-text text-muted">Frontend Developer</p>
                    </div>
                </div>

                <!-- Developer 3 - Alfonsus Raditya D.Y -->
                <div class="card text-center shadow-lg rounded-4" style="min-width: 270px; transition: transform 0.3s ease;">
                    <img src="{{ asset('images/developers/alfonsus.jpg') }}" alt="Alfonsus Raditya D.Y" class="card-img-top" style="height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Alfonsus Raditya D.Y</h5>
                        <p class="card-text text-muted">Backend Developer</p>
                    </div>
                </div>

                <!-- Developer 4 - Arif Lukman Hakim -->
                <div class="card text-center shadow-lg rounded-4" style="min-width: 270px; transition: transform 0.3s ease;">
                    <img src="{{ asset('images/developers/arif.jpg') }}" alt="Arif Lukman Hakim" class="card-img-top" style="height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Arif Lukman Hakim</h5>
                        <p class="card-text text-muted">UI/UX Designer</p>
                    </div>
                </div>

                <!-- Developer 5 - M. Atthariq Nugeraha -->
                <div class="card text-center shadow-lg rounded-4" style="min-width: 270px; transition: transform 0.3s ease;">
                    <img src="{{ asset('images/developers/atthariq.jpg') }}" alt="M. Atthariq Nugeraha" class="card-img-top" style="height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">M. Atthariq Nugeraha</h5>
                        <p class="card-text text-muted">Full Stack Developer</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Why Choose Us Section -->
        <div class="py-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{ asset('images/LOGO UNIVERSITAS TELKOM.png') }}" alt="About Us" style="max-width: 250px; margin-left: 150px; margin-top: -50px;">
                </div>
                <div class="col-md-6">
                    <h2 class="fw-bold mb-4 text-dark">Why Choose Loka Hub?</h2>
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
                    <div class="d-flex mb-3">
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

@push('styles')
    <style>
        /* Hover effect for developer cards */
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        /* For smooth horizontal scrolling */
        .d-flex {
            scroll-behavior: smooth;
        }
    </style>
@endpush
