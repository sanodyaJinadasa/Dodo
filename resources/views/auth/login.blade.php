{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .floating-shapes {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }

        .shape {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        .shape:nth-child(1) {
            width: 80px;
            height: 80px;
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }

        .shape:nth-child(2) {
            width: 120px;
            height: 120px;
            top: 20%;
            right: 10%;
            animation-delay: 2s;
        }

        .shape:nth-child(3) {
            width: 60px;
            height: 60px;
            bottom: 20%;
            left: 20%;
            animation-delay: 4s;
        }

        .shape:nth-child(4) {
            width: 100px;
            height: 100px;
            bottom: 10%;
            right: 20%;
            animation-delay: 1s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }

        .login-container {
            position: relative;
            z-index: 2;
            width: 100%;
            max-width: 450px;
            padding: 20px;
        }

        .login-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 25px 45px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
            transform: translateY(20px);
            animation: slideUp 0.8s ease-out forwards;
        }

        @keyframes slideUp {
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .login-header {
            text-align: center;
            margin-bottom: 35px;
        }

        .login-title {
            font-size: 2.5rem;
            font-weight: 700;
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 10px;
            animation: titleGlow 2s ease-in-out infinite alternate;
        }

        @keyframes titleGlow {
            from { filter: brightness(1); }
            to { filter: brightness(1.2); }
        }

        .login-subtitle {
            color: #666;
            font-size: 1rem;
        }

        .form-group {
            margin-bottom: 25px;
            position: relative;
        }

        .form-label {
            position: absolute;
            top: 15px;
            left: 20px;
            color: #999;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            pointer-events: none;
            background: transparent;
        }

        .form-input {
            width: 100%;
            padding: 18px 20px 18px 20px;
            border: 2px solid #e1e5e9;
            border-radius: 15px;
            font-size: 1rem;
            background: rgba(255, 255, 255, 0.8);
            transition: all 0.3s ease;
            outline: none;
        }

        .form-input:focus {
            border-color: #667eea;
            background: rgba(255, 255, 255, 1);
            box-shadow: 0 0 20px rgba(102, 126, 234, 0.2);
            transform: translateY(-2px);
        }

        .form-input:focus + .form-label,
        .form-input:not(:placeholder-shown) + .form-label {
            top: -10px;
            left: 15px;
            font-size: 0.8rem;
            color: #667eea;
            background: white;
            padding: 0 8px;
            border-radius: 10px;
        }

        .checkbox-container {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
            gap: 12px;
        }

        .custom-checkbox {
            position: relative;
            width: 20px;
            height: 20px;
        }

        .custom-checkbox input {
            opacity: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }

        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            width: 20px;
            height: 20px;
            background: #e1e5e9;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .custom-checkbox input:checked + .checkmark {
            background: linear-gradient(135deg, #667eea, #764ba2);
            transform: scale(1.1);
        }

        .checkmark::after {
            content: "";
            position: absolute;
            left: 7px;
            top: 3px;
            width: 6px;
            height: 10px;
            border: solid white;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .custom-checkbox input:checked + .checkmark::after {
            opacity: 1;
        }

        .checkbox-label {
            color: #666;
            font-size: 0.9rem;
            cursor: pointer;
        }

        .form-actions {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .login-btn {
            width: 100%;
            padding: 18px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border: none;
            border-radius: 15px;
            color: white;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .login-btn::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s ease;
        }

        .login-btn:hover::before {
            left: 100%;
        }

        .login-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(102, 126, 234, 0.4);
        }

        .login-btn:active {
            transform: translateY(-1px);
        }

        .forgot-password {
            text-align: center;
            color: #667eea;
            text-decoration: none;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            position: relative;
        }

        .forgot-password::after {
            content: "";
            position: absolute;
            bottom: -2px;
            left: 50%;
            width: 0;
            height: 2px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .forgot-password:hover::after {
            width: 100%;
        }

        .forgot-password:hover {
            color: #764ba2;
        }

        .error-message {
            color: #e74c3c;
            font-size: 0.85rem;
            margin-top: 8px;
            padding: 8px 12px;
            background: rgba(231, 76, 60, 0.1);
            border-radius: 8px;
            border-left: 3px solid #e74c3c;
            animation: errorShake 0.5s ease-in-out;
        }

        @keyframes errorShake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            75% { transform: translateX(5px); }
        }

        @media (max-width: 768px) {
            .login-card {
                margin: 20px;
                padding: 30px 25px;
            }

            .login-title {
                font-size: 2rem;
            }
        }

        .pulse-animation {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
    </style>
</head>
<body>
    <div class="floating-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <h1 class="login-title">Admin Login</h1>
                <p class="login-subtitle">Sign in to your account</p>
            </div>

            <form method="POST" action="{{ route('login') }}" id="loginForm">
                @csrf

                <div class="form-group">
                    <input
                        id="email"
                        type="email"
                        class="form-input"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autocomplete="email"
                        autofocus
                        placeholder=" "
                    >
                    <label for="email" class="form-label">Email Address</label>
                    @error('email')
                        <div class="error-message">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <input
                        id="password"
                        type="password"
                        class="form-input"
                        name="password"
                        required
                        autocomplete="current-password"
                        placeholder=" "
                    >
                    <label for="password" class="form-label">Password</label>
                    @error('password')
                        <div class="error-message">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>

                <div class="checkbox-container">
                    <div class="custom-checkbox">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <span class="checkmark"></span>
                    </div>
                    <label class="checkbox-label" for="remember">Remember Me</label>
                </div>

                <div class="form-actions">
                    <button type="submit" class="login-btn pulse-animation">
                        Sign In
                    </button>

                    @if (Route::has('password.request'))
                        <a class="forgot-password" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>

    <script>
        // Add interactive effects
        document.addEventListener('DOMContentLoaded', function() {
            const loginBtn = document.querySelector('.login-btn');
            const formInputs = document.querySelectorAll('.form-input');

            // Remove pulse animation after initial load
            setTimeout(() => {
                loginBtn.classList.remove('pulse-animation');
            }, 4000);

            // Add focus effects to inputs
            formInputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.style.transform = 'scale(1.02)';
                });

                input.addEventListener('blur', function() {
                    this.parentElement.style.transform = 'scale(1)';
                });
            });

            // Add loading state to button
            const form = document.getElementById('loginForm');
            form.addEventListener('submit', function() {
                loginBtn.innerHTML = `
                    <div style="display: flex; align-items: center; justify-content: center; gap: 10px;">
                        <div style="width: 20px; height: 20px; border: 2px solid #fff; border-top: 2px solid transparent; border-radius: 50%; animation: spin 1s linear infinite;"></div>
                        Signing In...
                    </div>
                `;
                loginBtn.disabled = true;
            });
        });

        // Add spin animation for loading
        const style = document.createElement('style');
        style.textContent = `
            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>
