@extends('auth.layout')

@section('title', 'Create Account - Sign Up')

@section('content')
<div class="icon-wrapper" style="background: #e3f2fd;">
    <i class="bi bi-calendar-check" style="color: #2196f3;"></i>
</div>

<h1>Create Account</h1>
<p class="subtitle">Start managing your bookings today</p>

@if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
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
    
    <div class="mb-3">
        <div class="row g-2">
            <div class="col-6">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" class="form-control @error('first_name') is-invalid @enderror" 
                       id="first_name" name="first_name" value="{{ old('first_name') }}" required>
                @error('first_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @endif
            </div>
            <div class="col-6">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" class="form-control @error('last_name') is-invalid @enderror" 
                       id="last_name" name="last_name" value="{{ old('last_name') }}" required>
                @error('last_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @endif
            </div>
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
        <div class="strength-bar mt-2" style="height: 4px; background: #e0e0e0; border-radius: 2px; overflow: hidden;">
            <div class="strength-fill" id="strengthBar" style="height: 100%; width: 0%; transition: all 0.3s;"></div>
        </div>
        <div class="password-strength" id="strengthText" style="font-size: 12px; margin-top: 4px;"></div>
        @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
        @endif
    </div>
    
    <div class="mb-3">
        <label for="password_confirmation" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="••••••••" required>
    </div>
    
    <div class="form-check mb-2">
        <input class="form-check-input @error('terms') is-invalid @endif" 
               type="checkbox" id="terms" name="terms" required>
        <label class="form-check-label" for="terms" style="font-size: 14px; color: #666;">
            I agree to the <a href="#">Terms</a> and <a href="#">Privacy Policy</a>
        </label>
        @error('terms')
            <div class="invalid-feedback">{{ $message }}</div>
        @endif
    </div>
    
    <button type="submit" class="btn-primary-custom" style="background: #2196f3; color: white;">Create Account</button>
</form>

<p class="text-center-link">
    Already have an account? <a href="{{ route('login') }}">Sign in</a>
</p>
@endsection

@section('scripts')
<script>
const passwordInput = document.getElementById('password');
const strengthBar = document.getElementById('strengthBar');
const strengthText = document.getElementById('strengthText');
const form = document.getElementById('signupForm');

passwordInput.addEventListener('input', function() {
    const password = this.value;
    let strength = 0;
    
    if (password.length >= 8) strength++;
    if (password.match(/[a-z]/) && password.match(/[A-Z]/)) strength++;
    if (password.match(/[0-9]/)) strength++;
    if (password.match(/[^a-zA-Z0-9]/)) strength++;
    
    strengthBar.style.width = '0%';
    strengthBar.style.background = '';
    
    if (password.length === 0) {
        strengthText.textContent = '';
    } else if (strength <= 1) {
        strengthBar.style.width = '33%';
        strengthBar.style.background = '#f44336';
        strengthText.textContent = 'Weak password';
        strengthText.style.color = '#f44336';
    } else if (strength <= 3) {
        strengthBar.style.width = '66%';
        strengthBar.style.background = '#ff9800';
        strengthText.textContent = 'Medium strength';
        strengthText.style.color = '#ff9800';
    } else {
        strengthBar.style.width = '100%';
        strengthBar.style.background = '#4caf50';
        strengthText.textContent = 'Strong password';
        strengthText.style.color = '#4caf50';
    }
});
</script>
@endsection

