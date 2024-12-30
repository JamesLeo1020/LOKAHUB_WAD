<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loka.Hub - Modern Marketplace</title>
    <style>
        /* Modern Variables */
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

        /* Modern Reset & Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', 'Segoe UI', sans-serif;
            background-color: var(--pure-white);
            color: var(--text-dark);
            line-height: 1.6;
        }

        /* Modern Header */
        header {
            background-color: var(--pure-white);
            padding: 1.5rem 5%;
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
            font-size: 2rem;
            font-weight: 700;
            color: var(--text-dark);
            text-decoration: none;
        }

        .logo span {
            color: var(--deep-pastel-blue);
        }

        /* Modern Hero Section */
        .hero {
            margin-top: 80px;
            padding: 6rem 5%;
            background: linear-gradient(135deg, var(--light-pastel-blue), var(--light-pastel-orange));
            min-height: 90vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .hero-content {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .hero-text {
            padding-right: 2rem;
        }

        .hero-text h1 {
            font-size: 3.5rem;
            line-height: 1.2;
            margin-bottom: 1.5rem;
            color: var(--text-dark);
        }

        .hero-text p {
            font-size: 1.2rem;
            color: var(--text-gray);
            margin-bottom: 2rem;
        }

        .hero-image {
            position: relative;
            height: 500px;
            background: url('https://source.unsplash.com/featured/?marketplace') no-repeat center/cover;
            border-radius: 30px;
            box-shadow: 20px 20px 60px rgba(0, 0, 0, 0.1);
        }

        /* Modern Buttons */
        .button-group {
            display: flex;
            gap: 1rem;
        }

        .btn {
            padding: 1rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 1rem;
        }

        .btn-primary {
            background-color: var(--deep-pastel-blue);
            color: var(--pure-white);
        }

        .btn-secondary {
            background-color: var(--deep-pastel-orange);
            color: var(--pure-white);
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* Modern Features Section */
        .features {
            padding: 6rem 5%;
            background-color: var(--pure-white);
        }

        .features-content {
            max-width: 1400px;
            margin: 0 auto;
        }

        .section-title {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: var(--text-dark);
            margin-bottom: 1rem;
        }

        .section-title p {
            color: var(--text-gray);
            font-size: 1.1rem;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .feature-card {
            background: var(--pure-white);
            padding: 2rem;
            border-radius: 20px;
            transition: all 0.3s ease;
            border: 1px solid var(--light-pastel-blue);
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            background: linear-gradient(135deg, var(--light-pastel-blue), var(--pure-white));
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            margin-bottom: 1.5rem;
        }

        .feature-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--text-dark);
        }

        .feature-card p {
            color: var(--text-gray);
        }

        /* Modern Footer */
        footer {
            background-color: var(--light-pastel-blue);
            padding: 3rem 5%;
            margin-top: 4rem;
        }

        .footer-content {
            max-width: 1400px;
            margin: 0 auto;
            text-align: center;
        }

        footer p {
            color: var(--text-dark);
        }

        footer a {
            color: var(--deep-pastel-blue);
            text-decoration: none;
            font-weight: 500;
        }

        /* Modern Responsive Design */
        @media (max-width: 968px) {
            .hero-content {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .hero-text {
                padding-right: 0;
            }

            .button-group {
                justify-content: center;
            }

            .hero-image {
                height: 400px;
            }

            .hero-text h1 {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 768px) {
            .features-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="header-content">
            <a href="/" class="logo">Loka.<span>Hub</span></a>
        </div>
    </header>

    <section class="hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Discover Sustainable Shopping</h1>
                <p>Join our modern marketplace where quality meets sustainability. Find unique pre-loved items and make a positive impact on the environment.</p>
                <div class="button-group">
                    <a href="/login" class="btn btn-primary">Login</a>
                    <a href="/register" class="btn btn-secondary">Sign Up</a>
                </div>
            </div>
            <div class="hero-image"></div>
        </div>
    </section>

    <section class="features">
        <div class="features-content">
            <div class="section-title">
                <h2>Why Choose Loka.Hub</h2>
                <p>Experience the future of second-hand shopping</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <img src="https://img.icons8.com/color/96/recycle.png" alt="Eco-friendly" class="feature-icon">
                    <h3>Eco-Conscious Choice</h3>
                    <p>Support sustainability through mindful shopping and reduce environmental impact with every purchase.</p>
                </div>
                <div class="feature-card">
                    <img src="https://img.icons8.com/color/96/low-price.png" alt="Affordable" class="feature-icon">
                    <h3>Smart Value</h3>
                    <p>Access quality items at incredible prices, making sustainable choices more affordable than ever.</p>
                </div>
                <div class="feature-card">
                    <img src="https://img.icons8.com/color/96/user-group-man-woman.png" alt="Community" class="feature-icon">
                    <h3>Community-Driven</h3>
                    <p>Join a thriving community of conscious consumers and sellers who share your values.</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Loka.Hub. All rights reserved. <a href="#contact">Contact Us</a></p>
        </div>
    </footer>
</body>
</html>