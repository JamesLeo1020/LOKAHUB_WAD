@extends('layouts.app')

@section('content')
<div class="login-container">
    <div class="login-box">
        <div class="login-header">
            <h2>Welcome to <span class="brand-text">Loka.<span>Hub</span></span></h2>
            <p>Login to continue your sustainable shopping journey</p>
        </div>

        <!-- Menampilkan pesan sukses jika ada -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Menampilkan pesan error jika ada -->
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="login-form">
            @csrf
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" id="email" name="email" required value="{{ old('email') }}" class="{{ $errors->has('email') ? 'is-invalid' : '' }}">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required class="{{ $errors->has('password') ? 'is-invalid' : '' }}">
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="login-btn">Login</button>

            <div class="form-footer">
                <p>Don't have an account? <a href="{{ route('register') }}">Sign Up</a></p>
            </div>
        </form>
    </div>
</div>
@endsection

@push('styles')
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

    body {
        background: linear-gradient(135deg, var(--light-pastel-blue), var(--light-pastel-orange));
        min-height: 100vh;
        font-family: 'Inter', 'Segoe UI', sans-serif;
    }

    .login-container {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 2rem;
    }

    .login-box {
        background: var(--pure-white);
        padding: 3rem;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 400px;
    }

    .login-header {
        text-align: center;
        margin-bottom: 2rem;
    }

    .login-header h2 {
        font-size: 1.8rem;
        color: var(--text-dark);
        margin-bottom: 0.5rem;
    }

    .brand-text {
        font-weight: 700;
    }

    .brand-text span {
        color: var(--deep-pastel-blue);
    }

    .login-header p {
        color: var(--text-gray);
        font-size: 0.95rem;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        color: var(--text-dark);
        font-size: 0.9rem;
        font-weight: 500;
    }

    .form-group input {
        width: 100%;
        padding: 0.8rem 1rem;
        border: 1px solid var(--light-pastel-blue);
        border-radius: 10px;
        font-size: 1rem;
        transition: all 0.3s ease;
    }

    .form-group input:focus {
        outline: none;
        border-color: var(--deep-pastel-blue);
        box-shadow: 0 0 0 3px rgba(184, 226, 242, 0.3);
    }

    .login-btn {
        width: 100%;
        padding: 1rem;
        background-color: var(--deep-pastel-blue);
        color: var(--pure-white);
        border: none;
        border-radius: 50px;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-bottom: 1.5rem;
    }

    .login-btn:hover {
        background-color: var(--pastel-blue);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .form-footer {
        text-align: center;
        color: var(--text-gray);
        font-size: 0.9rem;
    }

    .form-footer a {
        color: var(--deep-pastel-blue);
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
    }

    .form-footer a:hover {
        color: var(--deep-pastel-orange);
    }

    /* Error states */
    .is-invalid {
        border-color: #ff6b6b !important;
    }

    .invalid-feedback {
        color: #ff6b6b;
        font-size: 0.8rem;
        margin-top: 0.25rem;
    }

    @media (max-width: 480px) {
        .login-box {
            padding: 2rem;
        }

        .login-header h2 {
            font-size: 1.5rem;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    // Form validation enhancement
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('.login-form');
        const inputs = form.querySelectorAll('input');

        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
            });

            input.addEventListener('blur', function() {
                if (!this.value) {
                    this.parentElement.classList.remove('focused');
                }
            });
        });
    });
</script>
@endpush
