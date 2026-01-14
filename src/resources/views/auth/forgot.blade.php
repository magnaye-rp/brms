@extends('auth.layout')

@section('title', 'Forgot Password - Reset')

@section('content')
<div class="icon-wrapper" id="iconWrapper" style="background: #fff3e0;">
    <i class="bi bi-key" style="color: #ff9800;"></i>
</div>

<h1>Forgot Password?</h1>
<p class="subtitle">No worries! Enter your email address and we'll send you a link to reset your password.</p>

@if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<form id="forgotForm" method="POST" action="{{ route('password.email') }}">
    @csrf
    
    <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" 
               id="email" name="email" placeholder="you@example.com" value="{{ old('email') }}" required>
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @else
            <div class="form-text">Enter your registered email address</div>
        @enderror
    </div>
    
    <button type="submit" class="btn-primary-custom" style="background: #2196f3; color: white;">
        Send Reset Link
    </button>
    
    <a href="{{ route('login') }}" class="btn-secondary-custom" style="color: #2196f3;">
        <i class="bi bi-arrow-left"></i>
        Back to Sign In
    </a>
</form>

<div class="mt-3 p-3 rounded" style="background: #e3f2fd; border-left: 4px solid #2196f3; font-size: 14px; color: #1565c0;">
    <i class="bi bi-info-circle me-2"></i>
    <strong>Tip:</strong> Check your spam folder if you don't see the email.
</div>
@endsection

