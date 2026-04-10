<?php
session_start();

$googleLoginUrl = null;

require_once __DIR__ . '/config/env.php';
load_env_file(__DIR__ . '/.env');

$hasGoogleCredentials = (bool) env('GOOGLE_CLIENT_ID') && (bool) env('GOOGLE_CLIENT_SECRET');
$hasComposerAutoload = file_exists(__DIR__ . '/vendor/autoload.php');

if ($hasGoogleCredentials && $hasComposerAutoload) {
    require_once __DIR__ . '/google-config.php';
    $googleLoginUrl = $client->createAuthUrl();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page | NGO Portal</title>
    <style>
        body {
            margin: 0;
            font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f3f4f6;
            color: #111827;
        }

        .split-layout {
            display: flex;
            min-height: 100vh;
        }

        .image-half {
            flex: 1;
            background: url('2.jpg') center/cover no-repeat;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .image-half::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(to bottom, rgba(37, 99, 235, 0.4), rgba(17, 24, 39, 0.8));
        }

        .image-text {
            position: relative;
            z-index: 1;
            color: #ffffff;
            text-align: center;
            padding: 40px;
        }

        .image-text h1 {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.5);
        }

        .image-text p {
            font-size: 20px;
            opacity: 0.9;
        }

        .form-half {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #ffffff;
            padding: 40px;
        }

        .loginbox {
            width: 100%;
            max-width: 400px;
            animation: fadeIn 0.4s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .loginbox h2 {
            margin-bottom: 30px;
            color: #111827;
            font-size: 28px;
            font-weight: 700;
            margin-top: 0;
        }

        .input-box {
            margin: 20px 0;
            text-align: left;
        }

        .input-box input {
            width: 100%;
            padding: 14px 15px;
            border-radius: 6px;
            border: 1px solid #d1d5db;
            background: #f9fafb;
            color: #111827;
            outline: none;
            box-sizing: border-box;
            transition: 0.2s;
            font-size: 15px;
        }

        .input-box input:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
            background: #ffffff;
        }

        .btn {
            margin-top: 10px;
            padding: 14px;
            width: 100%;
            border-radius: 6px;
            border: none;
            background: #2563eb;
            color: white;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.2s;
            box-shadow: 0 4px 6px -1px rgba(37, 99, 235, 0.2);
        }

        .btn:hover {
            background: #1d4ed8;
            transform: translateY(-1px);
        }

        .google-btn {
            margin-top: 20px;
            padding: 14px;
            width: 100%;
            border-radius: 6px;
            border: 1px solid #d1d5db;
            background: #ffffff;
            color: #374151;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 12px;
            transition: 0.2s;
            box-sizing: border-box;
        }

        .google-btn:hover {
            background: #f9fafb;
        }

        .google-btn:disabled {
            cursor: not-allowed;
            opacity: 0.65;
        }

        .forgot {
            font-size: 14px;
            margin-top: 15px;
            text-align: right;
        }

        .forgot a {
            color: #2563eb;
            text-decoration: none;
            font-weight: 500;
        }

        .forgot a:hover {
            text-decoration: underline;
        }

        hr {
            border: 0;
            height: 1px;
            background: #e5e7eb;
            margin: 30px 0;
        }

        .register-link {
            text-align: center;
            color: #6b7280;
            font-size: 15px;
            margin-top: 25px;
        }

        .register-link a {
            color: #2563eb;
            text-decoration: none;
            font-weight: 600;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        .message {
            padding: 10px 12px;
            border-radius: 6px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .message.error {
            background-color: #fee2e2;
            border: 1px solid #ef4444;
            color: #b91c1c;
        }

        .message.success {
            background-color: #dcfce7;
            border: 1px solid #22c55e;
            color: #166534;
        }

        @media (max-width: 768px) {
            .split-layout {
                flex-direction: column;
            }

            .image-half {
                min-height: 30vh;
            }
        }
    </style>
</head>
<body>
<div class="split-layout">
    <div class="image-half">
        <div class="image-text">
            <h1>Welcome Back</h1>
            <p>Every login helps us orchestrate more impact across communities.</p>
        </div>
    </div>

    <div class="form-half">
        <div class="loginbox">
            <h2>Sign in to your account</h2>

            <?php if (isset($_GET['error']) && $_GET['error'] === 'not_registered'): ?>
            <div class="message error">
                <b>Access Denied:</b> This Google account is not registered in our database. Please sign up first!
            </div>
            <?php endif; ?>

            <?php if (isset($_GET['error']) && $_GET['error'] === 'invalid_credentials'): ?>
            <div class="message error">
                Invalid email or password. Please try again.
            </div>
            <?php endif; ?>

            <?php if (isset($_GET['error']) && $_GET['error'] === 'missing_fields'): ?>
            <div class="message error">
                Please enter both email and password.
            </div>
            <?php endif; ?>

            <?php if (isset($_GET['msg']) && $_GET['msg'] === 'registered'): ?>
            <div class="message success">
                Registration successful. You can log in now.
            </div>
            <?php endif; ?>

            <form action="login_process.php" method="POST" id="login-form" onsubmit="return showLoginPopup();">
                <div class="input-box">
                    <input type="email" name="email" placeholder="Email address" required>
                </div>

                <div class="input-box">
                    <input type="password" name="password" placeholder="Password" required>
                </div>

                <div class="forgot">
                    <a href="forgot_password.html">Forgot password?</a>
                </div>

                <button class="btn" type="submit">Sign In</button>
            </form>

            <hr>

            <?php if ($googleLoginUrl !== null): ?>
            <a href="<?php echo htmlspecialchars($googleLoginUrl); ?>" style="text-decoration: none;">
                <button class="google-btn" type="button">
                    <img src="Google-g-icon.png" alt="Google Logo" style="width: 20px;">
                    Continue with Google
                </button>
            </a>
            <?php else: ?>
            <button class="google-btn" type="button" disabled title="Google login is not configured yet">
                <img src="Google-g-icon.png" alt="Google Logo" style="width: 20px;">
                Google sign-in unavailable
            </button>
            <?php endif; ?>

            <div class="register-link">
                Don't have an account? <a href="signup.html">Register here</a>
            </div>
            <div class="register-link" style="margin-top: 10px;">
                &#8592; <a href="index.php">Back to Home</a>
            </div>
        </div>
    </div>
</div>
<script>
function showLoginPopup() {
    alert("You successfully logined.");
    return true;
}
</script>
</body>
</html>
