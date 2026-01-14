<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'BRMS')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            padding: 40px 20px;
        }
        .auth-card {
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
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
        }
        .icon-wrapper i { font-size: 36px; }
        h1 { font-size: 28px; font-weight: 600; text-align: center; margin-bottom: 8px; }
        .subtitle { text-align: center; color: #666; margin-bottom: 32px; font-size: 15px; }
        .form-label { font-size: 14px; font-weight: 500; margin-bottom: 8px; }
        .form-control {
            padding: 12px 16px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 15px;
        }
        .form-control:focus { border-color: #2196f3; box-shadow: 0 0 0 3px rgba(33, 150, 243, 0.1); }
        .btn-primary-custom {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            margin-top: 24px;
            cursor: pointer;
        }
        .btn-secondary-custom {
            width: 100%;
            padding: 14px;
            border: 1px solid #2196f3;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            margin-top: 12px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            text-decoration: none;
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
        .help-btn:hover { background: #333; }
        .alert { border-radius: 8px; margin-bottom: 20px; }
        .divider {
            display: flex;
            align-items: center;
            margin: 24px 0;
            color: #999;
            font-size: 14px;
        }
        .divider::before, .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #ddd;
        }
        .divider span { padding: 0 16px; }
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
            text-decoration: none;
            color: #333;
        }
        .social-btn:hover { background: #f8f9fa; border-color: #aaa; }
        .social-btn img, .social-btn svg { width: 20px; height: 20px; }
        .social-btn.facebook { background: #1877F2; color: white; border-color: #1877F2; }
        .social-btn.microsoft { background: #00A4EF; color: white; border-color: #00A4EF; }
        .text-center-link { text-align: center; margin-top: 24px; font-size: 14px; color: #666; }
        .text-center-link a { color: #2196f3; text-decoration: none; font-weight: 500; }
        .text-center-link a:hover { text-decoration: underline; }
        .invalid-feedback { font-size: 13px; display: block; }
        .form-text { font-size: 13px; color: #6c757d; }
    </style>
</head>
<body>
    <div class="auth-card">
        @yield('content')
    </div>
    <button class="help-btn"><i class="bi bi-question-lg"></i></button>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>

