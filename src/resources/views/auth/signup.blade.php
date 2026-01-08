<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account - Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            padding: 40px 20px;
        }
        
        .signup-card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            max-width: 420px;
            width: 100%;
            padding: 48px 40px;
        }
        
        .icon-wrapper {
            width: 80px;
            height: 80px;
            background: #e3f2fd;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
        }
        
        .icon-wrapper i {
            font-size: 36px;
            color: #2196f3;
        }
        
        h1 {
            font-size: 28px;
            font-weight: 600;
            text-align: center;
            margin-bottom: 8px;
            color: #1a1a1a;
        }
        
        .subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 32px;
            font-size: 15px;
        }
        
        .social-btn {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            font-size: 15px;
            font-weight: 500;
            margin-bottom: 12px;
            transition: all 0.2s;
            cursor: pointer;
            text-decoration: none;
            color: #333;
        }
        
        .social-btn:hover {
            background: #f8f9fa;
            border-color: #aaa;
        }
        
        .social-btn.google:hover {
            border-color: #4285F4;
        }
        
        .social-btn.facebook {
            background: #1877F2;
            color: white;
            border-color: #1877F2;
        }
        
        .social-btn.facebook:hover {
            background: #166fe5;
        }
        
        .social-btn.microsoft {
            background: #00A4EF;
            color: white;
            border-color: #00A4EF;
        }
        
        .social-btn.microsoft:hover {
            background: #0093d9;
        }
        
        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 24px 0;
            color: #999;
            font-size: 14px;
        }
        
        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #ddd;
        }
        
        .divider span {
            padding: 0 16px;
        }
        
        .form-label {
            font-size: 14px;
            font-weight: 500;
            color: #333;
            margin-bottom: 8px;
        }
        
        .form-control {
            padding: 12px 16px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 15px;
        }
        
        .form-control:focus {
            border-color: #2196f3;
            box-shadow: 0 0 0 3px rgba(33, 150, 243, 0.1);
        }
        
        .form-control.is-invalid {
            border-color: #f44336;
        }
        
        .password-strength {
            margin-top: 8px;
            font-size: 12px;
        }
        
        .strength-bar {
            height: 4px;
            background: #e0e0e0;
            border-radius: 2px;
            margin-top: 8px;
            overflow: hidden;
        }
        
        .strength-fill {
            height: 100%;
            width: 0%;
            transition: all 0.3s;
            border-radius: 2px;
        }
        
        .strength-weak { background: #f44336; width: 33%; }
        .strength-medium { background: #ff9800; width: 66%; }
        .strength-strong { background: #4caf50; width: 100%; }
        
        .form-check {
            margin-top: 16px;
            font-size: 14px;
        }
        
        .form-check-label {
            color: #666;
        }
        
        .form-check-label a {
            color: #2196f3;
            text-decoration: none;
        }
        
        .form-check-label a:hover {
            text-decoration: underline;
        }
        
        .btn-signup {
            width: 100%;
            padding: 14px;
            background: #2196f3;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            margin-top: 24px;
            cursor: pointer;
            transition: background 0.2s;
        }
        
        .btn-signup:hover {
            background: #1976d2;
        }
        
        .btn-signup:disabled {
            background: #ccc;
            cursor: not-allowed;
        }
        
        .signin-text {
            text-align: center;
            margin-top: 24px;
            color: #666;
            font-size: 14px;
        }
        
        .signin-text a {
            color: #2196f3;
            text-decoration: none;
            font-weight: 500;
        }
        
        .signin-text a:hover {
            text-decoration: underline;
        }
        
        .terms-text {
            text-align: center;
            margin-top: 24px;
            color: #999;
            font-size: 12px;
        }
        
        .terms-text a {
            color: #2196f3;
            text-decoration: none;
        }
        
        .terms-text a:hover {
            text-decoration: underline;
        }
        
        .help-btn {
            position: fixed;
            bottom: 24px;
            right: 24px;
            width: 48px;
            height: 48px;
            background: #1a1a1a;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            border: none;
        }
        
        .help-btn:hover {
            background: #333;
        }
        
        .name-group {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }
        
        .alert {
            border-radius: 8px;
            margin-bottom: 20px;
        }
        
        .invalid-feedback {
            font-size: 13px;
            display: block;
        }
    </style>
</head>
<body>
    <div class="signup-card">
        <div class="icon-wrapper">
            <i class="bi bi-calendar-check"></i>
        </div>
        
        <h1>Create Account</h1>
        <p class="subtitle">Start managing your bookings today</p>
        
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        <!-- OAuth Buttons -->
        <a href="{{ route('auth.google') }}" class="social-btn google">
            <svg width="20" height="20" viewBox="0 0 24 24">
                <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
            </svg>
            Continue with Google
        </a>
        
        <a href="{{ route('auth.facebook') }}" class="social-btn facebook">
            <i class="bi bi-facebook"></i>
            Continue with Facebook
        </a>
        
        <a href="{{ route('auth.microsoft') }}" class="social-btn microsoft">
            <svg width="20" height="20" viewBox="0 0 24 24">
                <path fill="#F25022" d="M1 1h10v10H1z"/>
                <path fill="#00A4EF" d="M13 1h10v10H13z"/>
                <path fill="#7FBA00" d="M1 13h10v10H1z"/>
                <path fill="#FFB900" d="M13 13h10v10H13z"/>
            </svg>
            Continue with Microsoft
        </a>
        
        <div class="divider">
            <span>Or sign up with email</span>
        </div>
        
        <form id="signupForm" method="POST" action="{{ route('register.post') }}">
            @csrf
            
            <div class="name-group mb-3">
                <div>
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" 
                           id="first_name" name="first_name" value="{{ old('first_name') }}" required>
                    @error('first_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @endif
                </div>
                <div>
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" class="form-control @error('last_name') is-invalid @enderror" 
                           id="last_name" name="last_name" value="{{ old('last_name') }}" required>
                    @error('last_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @endif
                </div>
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" 
                       id="email" name="email" value="{{ old('email') }}" placeholder="you@example.com" required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @endif
            </div>
            
            <div class="mb-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" 
                       id="password" name="password" placeholder="••••••••" required minlength="8">
                <div class="strength-bar">
                    <div class="strength-fill" id="strengthBar"></div>
                </div>
                <div class="password-strength" id="strengthText"></div>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @endif
            </div>
            
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="••••••••" required>
            </div>
            
            <div class="form-check">
                <input class="form-check-input @error('terms') is-invalid @endif" 
                       type="checkbox" id="terms" name="terms" required>
                <label class="form-check-label" for="terms">
                    I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
                </label>
                @error('terms')
                    <div class="invalid-feedback">{{ $message }}</div>
                @endif
            </div>
            
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="newsletter" name="newsletter" value="1">
                <label class="form-check-label" for="newsletter">
                    Send me updates and promotional offers
                </label>
            </div>
            
            <button type="submit" class="btn-signup">Create Account</button>
        </form>
        
        <p class="signin-text">
            Already have an account? <a href="{{ route('login') }}">Sign in</a>
        </p>
    </div>
    
    <button class="help-btn">
        <i class="bi bi-question-lg"></i>
    </button>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const passwordInput = document.getElementById('password');
        const strengthBar = document.getElementById('strengthBar');
        const strengthText = document.getElementById('strengthText');
        const confirmPasswordInput = document.getElementById('password_confirmation');
        const form = document.getElementById('signupForm');
        
        // Password strength checker
        passwordInput.addEventListener('input', function() {
            const password = this.value;
            let strength = 0;
            
            if (password.length >= 8) strength++;
            if (password.match(/[a-z]/) && password.match(/[A-Z]/)) strength++;
            if (password.match(/[0-9]/)) strength++;
            if (password.match(/[^a-zA-Z0-9]/)) strength++;
            
            strengthBar.className = 'strength-fill';
            
            if (password.length === 0) {
                strengthText.textContent = '';
            } else if (strength <= 1) {
                strengthBar.classList.add('strength-weak');
                strengthText.textContent = 'Weak password';
                strengthText.style.color = '#f44336';
            } else if (strength <= 3) {
                strengthBar.classList.add('strength-medium');
                strengthText.textContent = 'Medium strength';
                strengthText.style.color = '#ff9800';
            } else {
                strengthBar.classList.add('strength-strong');
                strengthText.textContent = 'Strong password';
                strengthText.style.color = '#4caf50';
            }
        });
        
        // Form validation
        form.addEventListener('submit', function(e) {
            const password = passwordInput.value;
            const confirmPassword = confirmPasswordInput.value;
            const terms = document.getElementById('terms');
            
            if (password !== confirmPassword) {
                e.preventDefault();
                alert('Passwords do not match!');
                return;
            }
            
            if (password.length < 8) {
                e.preventDefault();
                alert('Password must be at least 8 characters long');
                return;
            }
            
            if (!terms.checked) {
                e.preventDefault();
                alert('You must agree to the terms and conditions');
                return;
            }
        });
    </script>
</body>
</html>
