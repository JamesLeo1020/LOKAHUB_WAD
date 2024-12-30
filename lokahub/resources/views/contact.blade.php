@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 custom-shadow">
                    <div class="card-body p-5">
                        <h1 class="text-center fw-bold mb-2">Contact Us</h1>
                        <p class="text-center text-muted mb-5">We'd love to hear from you! Send us a message.</p>
                        
                        <form action="#" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="name" class="form-label fw-semibold">Name</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    <input type="text" class="form-control" name="name" id="name" required>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="email" class="form-label fw-semibold">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="message" class="form-label fw-semibold">Message</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-comment"></i></span>
                                    <textarea class="form-control" name="message" id="message" rows="5" required></textarea>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg px-5">
                                    <i class="fas fa-paper-plane me-2"></i>Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row mt-5 g-4">
                    <div class="col-md-4">
                        <div class="text-center">
                            <i class="fas fa-map-marker-alt text-primary fa-2x mb-3"></i>
                            <h5 class="fw-bold">Address</h5>
                            <p class="text-muted">Telkom University Campus</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <i class="fas fa-phone text-primary fa-2x mb-3"></i>
                            <h5 class="fw-bold">Phone</h5>
                            <p class="text-muted">+62 123 456 789</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <i class="fas fa-envelope text-primary fa-2x mb-3"></i>
                            <h5 class="fw-bold">Email</h5>
                            <p class="text-muted">contact@lokahub.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection