<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - Reset</title>
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
        
        .forgot-card {
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
            background: #fff3e0;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
        }
        
        .icon-wrapper i {
            font-size: 36px;
            color: #ff9800;
        }
        
        .icon-wrapper.success {
            background: #e8f5e9;
        }
        
        .icon-wrapper.success i {
            color: #4caf50;
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
            line-height: 1.5;
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
        
        .btn-reset {
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
        
        .btn-reset:hover {
            background: #1976d2;
        }
        
        .btn-back {
            width: 100%;
            padding: 14px;
            background: white;
            color: #2196f3;
            border: 1px solid #2196f3;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            margin-top: 12px;
            cursor: pointer;
            transition: all 0.2s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }
        
        .btn-back:hover {
            background: #f5f5f5;
        }
        
        .info-box {
            background: #e3f2fd;
            border-left: 4px solid #2196f3;
            padding: 16px;
            border-radius: 8px;
            margin-top: 24px;
            font-size: 14px;
            color: #1565c0;
        }
        
        .info-box i {
            margin-right: 8px;
        }
        
        .help-links {
            text-align: center;
            margin-top: 24px;
            font-size: 14px;
            color: #666;
        }
        
        .help-links a {
            color: #2196f3;
            text-decoration: none;
            font-weight: 500;
        }
        
        .help-links a:hover {
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
        
        .success-message {
            background: #e8f5e9;
            border-left: 4px solid #4caf50;
            padding: 16px;
            border-radius: 8px;
            margin-bottom: 24px;
            font-size: 14px;
            color: #2e7d32;
        }
        
        .success-message i {
            margin-right: 8px;
        }
        
        .hidden {
            display: none;
        }
        
        .spinner {
            display: inline-block;
            width: 16px;
            height: 16px;
            border: 2px solid rgba(255,255,255,.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spin 0.6s linear infinite;
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <div class="forgot-card">
        <!-- Initial Form View -->
        <div id="initialView">
            <div class="icon-wrapper">
                <i class="bi bi-key"></i>
            </div>
            
            <h1>Forgot Password?</h1>
            <p class="subtitle">No worries! Enter your email address and we'll send you a link to reset your password.</p>
            
            <form id="forgotForm">
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
                </div>
                
                <button type="submit" class="btn-reset" id="submitBtn">
                    <span id="btnText">Send Reset Link</span>
                    <span id="btnSpinner" class="spinner hidden"></span>
                </button>
                
                <button type="button" class="btn-back" onclick="window.history.back()">
                    <i class="bi bi-arrow-left"></i>
                    Back to Sign In
                </button>
            </form>
            
            <div class="info-box">
                <i class="bi bi-info-circle"></i>
                <strong>Tip:</strong> Make sure to check your spam folder if you don't see the email in your inbox.
            </div>
            
            <div class="help-links">
                Still having trouble? <a href="#">Contact Support</a>
            </div>
        </div>
        
        <!-- Success View -->
        <div id="successView" class="hidden">
            <div class="icon-wrapper success">
                <i class="bi bi-check-circle"></i>
            </div>
            
            <h1>Check Your Email</h1>
            <p class="subtitle">We've sent a password reset link to <strong id="sentEmail"></strong></p>
            
            <div class="success-message">
                <i class="bi bi-envelope-check"></i>
                The link will expire in 24 hours for security reasons.
            </div>
            
            <div class="info-box">
                <i class="bi bi-info-circle"></i>
                Click the link in the email to create a new password. If you don't see the email, check your spam folder.
            </div>
            
            <button type="button" class="btn-reset" onclick="location.reload()">
                Resend Email
            </button>
            
            <button type="button" class="btn-back" onclick="window.history.back()">
                <i class="bi bi-arrow-left"></i>
                Back to Sign In
            </button>
            
            <div class="help-links">
                Didn't receive the email? <a href="#">Contact Support</a>
            </div>
        </div>
    </div>
    
    <button class="help-btn">
        <i class="bi bi-question-lg"></i>
    </button>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const form = document.getElementById('forgotForm');
        const emailInput = document.getElementById('email');
        const submitBtn = document.getElementById('submitBtn');
        const btnText = document.getElementById('btnText');
        const btnSpinner = document.getElementById('btnSpinner');
        const initialView = document.getElementById('initialView');
        const successView = document.getElementById('successView');
        const sentEmail = document.getElementById('sentEmail');
        
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const email = emailInput.value;
            
            // Basic email validation
            if (!email || !email.includes('@')) {
                alert('Please enter a valid email address');
                return;
            }
            
            // Show loading state
            submitBtn.disabled = true;
            btnText.classList.add('hidden');
            btnSpinner.classList.remove('hidden');
            
            // Simulate API call
            setTimeout(function() {
                // Hide loading state
                submitBtn.disabled = false;
                btnText.classList.remove('hidden');
                btnSpinner.classList.add('hidden');
                
                // Show success view
                sentEmail.textContent = email;
                initialView.classList.add('hidden');
                successView.classList.remove('hidden');
            }, 1500);
        });
    </script>
</body>
</html>