@extends('layouts.app')

@section('content')
<div class="register-container">
    <div class="register-box">
        <div class="register-header">
            <h2>Join <span class="brand-text">Loka.<span>Hub</span></span></h2>
            <p>Create an account to start your sustainable journey</p>
        </div>
        
        <!-- Tampilkan pesan error jika ada -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form registrasi -->
        <form method="POST" action="{{ route('register') }}" class="register-form">
            @csrf

            <!-- Nama -->
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required class="@error('name') is-invalid @enderror">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required class="@error('email') is-invalid @enderror">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required class="@error('password') is-invalid @enderror">
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="register-btn">Sign Up</button>

            <div class="form-footer">
                <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
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

    .register-container {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 2rem;
    }

    .register-box {
        background: var(--pure-white);
        padding: 3rem;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 400px;
    }

    .register-header {
        text-align: center;
        margin-bottom: 2rem;
    }

    .register-header h2 {
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

    .register-header p {
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

    .register-btn {
        width: 100%;
        padding: 1rem;
        background-color: var(--deep-pastel-orange);
        color: var(--pure-white);
        border: none;
        border-radius: 50px;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-bottom: 1.5rem;
    }

    .register-btn:hover {
        background-color: var(--pastel-orange);
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
        .register-box {
            padding: 2rem;
        }

        .register-header h2 {
            font-size: 1.5rem;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const inputs = document.querySelectorAll('.form-group input');
        inputs.forEach(input => {
            input.addEventListener('focus', () => {
                input.style.borderColor = 'var(--deep-pastel-blue)';
            });
            input.addEventListener('blur', () => {
                input.style.borderColor = 'var(--light-pastel-blue)';
            });
        });
    });
</script>
@endpush
