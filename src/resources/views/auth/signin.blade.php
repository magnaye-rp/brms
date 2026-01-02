<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Back - Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body {
            background: linear-gradient(135deg, #ffffff 0%, #dcdcdc 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        }
        
        .signin-card {
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
        }
        
        .social-btn:hover {
            background: #f8f9fa;
            border-color: #aaa;
        }
        
        .social-btn.github {
            background: #24292e;
            color: white;
            border-color: #24292e;
        }
        
        .social-btn.github:hover {
            background: #1a1f23;
        }
        
        .social-btn img {
            width: 20px;
            height: 20px;
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
        
        .forgot-link {
            display: block;
            text-align: right;
            color: #2196f3;
            font-size: 14px;
            margin-top: 8px;
            text-decoration: none;
        }
        
        .forgot-link:hover {
            text-decoration: underline;
        }
        
        .btn-signin {
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
        
        .btn-signin:hover {
            background: #1976d2;
        }
        
        .signup-text {
            text-align: center;
            margin-top: 24px;
            color: #666;
            font-size: 14px;
        }
        
        .signup-text a {
            color: #2196f3;
            text-decoration: none;
            font-weight: 500;
        }
        
        .signup-text a:hover {
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
    </style>
</head>
<body>
    <div class="signin-card">
        <div class="icon-wrapper">
            <i class="bi bi-calendar-check"></i>
        </div>
        
        <h1>Welcome Back</h1>
        <p class="subtitle">Sign in to access your bookings</p>
        
        <button class="social-btn">
            <svg width="20" height="20" viewBox="0 0 24 24">
                <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
            </svg>
            Continue with Google
        </button>
        
        <button class="social-btn github">
            <i class="bi bi-github"></i>
            Continue with GitHub
        </button>
        
        <button class="social-btn">
            <svg width="20" height="20" viewBox="0 0 24 24">
                <path fill="#F25022" d="M1 1h10v10H1z"/>
                <path fill="#00A4EF" d="M13 1h10v10H13z"/>
                <path fill="#7FBA00" d="M1 13h10v10H1z"/>
                <path fill="#FFB900" d="M13 13h10v10H13z"/>
            </svg>
            Continue with Microsoft
        </button>
        
        <div class="divider">
            <span>Or continue with email</span>
        </div>
        
        <form>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="you@example.com">
            </div>
            
            <div class="mb-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="••••••••">
            </div>
            
            <a href="#" class="forgot-link">Forgot password?</a>
            
            <button type="submit" class="btn-signin">Sign In</button>
        </form>
        
        <p class="signup-text">
            Don't have an account? <a href="#">Sign up</a>
        </p>
        
        <p class="terms-text">
            By continuing, you agree to our <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
        </p>
    </div>
    
    <button class="help-btn">
        <i class="bi bi-question-lg"></i>
    </button>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>