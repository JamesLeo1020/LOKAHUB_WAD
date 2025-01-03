<!DOCTYPE html>

<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loka Hub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
        }
        .feature-card {
            transition: transform 0.3s;
        }
        .feature-card:hover {
            transform: translateY(-5px);
        }
        .custom-shadow {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        /* Sticky footer styles */
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        main {
            flex: 1 0 auto;
        }
        footer {
            flex-shrink: 0;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white custom-shadow sticky-top">
        <div class="container">
            <a class="navbar-brand text-primary" href="{{ route('home') }}">
                <i class="fas fa-store me-2"></i>Loka Hub
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="{{ route('products.index') }}">
                            <i class="fas fa-shopping-bag me-1"></i>Products
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="{{ route('about') }}">
                            <i class="fas fa-info-circle me-1"></i>About Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="{{ route('contact') }}">
                            <i class="fas fa-envelope me-1"></i>Contact
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-shrink-0">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-light py-4 mt-auto">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Loka Hub</h5>
                    <p>Your trusted marketplace for the Telkom University community.</p>
                </div>
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('products.index') }}" class="text-light">Products</a></li>
                        <li><a href="{{ route('about') }}" class="text-light">About Us</a></li>
                        <li><a href="{{ route('contact') }}" class="text-light">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Connect With Us</h5>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-light"><i class="fab fa-facebook fa-lg"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-twitter fa-lg"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-instagram fa-lg"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
=======
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loka.Hub</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Base Styles -->
    <style>
        :root {
            --pastel-blue: #B8E2F2;
            --light-pastel-blue: #E3F2F9;
            --pastel-orange: #FFD8B8;
            --light-pastel-orange: #FFE8D6;
            --deep-pastel-blue: #89CFF0;
            --deep-pastel-orange: #FFB347;
            --text-dark: #2A2A2A;
            --text-gray: #666666;
            --pure-white: #FFFFFF;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, var(--light-pastel-blue), var(--light-pastel-orange));
            min-height: 100vh;
            color: var(--text-dark);
            line-height: 1.6;
        }

        /* Header Styles */
        .main-header {
            background-color: var(--pure-white);
            padding: 1rem 5%;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .header-content {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--text-dark);
            text-decoration: none;
        }

        .logo span {
            color: var(--deep-pastel-blue);
        }

        /* Main Content */
        .main-content {
            margin-top: 80px;
            min-height: calc(100vh - 160px);
            padding: 2rem 5%;
        }

        /* Footer Styles */
        .main-footer {
            background-color: var(--light-pastel-blue);
            padding: 1.5rem 5%;
            text-align: center;
        }

        .footer-content {
            max-width: 1400px;
            margin: 0 auto;
            color: var(--text-dark);
        }

        .footer-content a {
            color: var(--deep-pastel-blue);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .footer-content a:hover {
            color: var(--deep-pastel-orange);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .main-header {
                padding: 1rem;
            }

            .logo {
                font-size: 1.5rem;
            }

            .main-content {
                padding: 1rem;
            }
        }
    </style>

    <!-- Additional page-specific styles -->
    @stack('styles')
</head>
<body>
    <header class="main-header">
        <div class="header-content">
            <a href="/" class="logo">Loka.<span>Hub</span></a>
        </div>
    </header>

    <main class="main-content">
        @yield('content')
    </main>

    <footer class="main-footer">
        <div class="footer-content">
            <p>&copy; 2024 Loka.Hub. All rights reserved. <a href="#contact">Contact Us</a></p>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Base functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Add smooth scroll behavior
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        });
    </script>

    <!-- Additional page-specific scripts -->
    @stack('scripts')
</body>
</html>