<?php
require __DIR__ . '/config/db.php';
?>
<?php
session_start();
require_once 'google-config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>login_page </title>
    <style>
        body {
            margin: 0;
            font-family:italic;
            background: teal;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .loginbox {
            background: #001F3F;
            backdrop-filter: blur(10px);
            padding: 40px;
            border-radius: 20px;
            text-align: center;
            width: 350px;
        }

        .login-box h2 {
            margin-bottom: 20px;
            color: #fff;
        }

        .input-box {
            margin: 10px 0;
        }

        .input-box input {
            width: 100%;
            padding: 10px;
            border-radius: 20px;
            border: none;
            outline: none;
        }

        .btn {
            margin-top: 15px;
            padding: 10px;
            width: 100%;
            border-radius: 20px;
            border: none;
            background: #003366;
            color: white;
            cursor: pointer;
        }

        .google-btn {
            margin-top: 10px;
            padding: 10px;
            width: 100%;
            border-radius: 20px;
            border: none;
            background: #FFD700;
            color: black;
            cursor: pointer;
        }

        .forgot {
            font-size: 12px;
            color: white;
            margin-top: 10px;
        }
    </style>
</head>

<body>

<div class="loginbox">
    <h2 style="color:#FFD700;">Login Avvandi ayya</h2>

    <form action="login-process.php" method="POST">
        <div class="input-box">
            <input type="email" name="email" placeholder="Email" required>
        </div>

        <div class="input-box">
            <input type="password" name="password" placeholder="Password" required>
        </div>

        <button class="btn" type="submit">Login</button>
    </form>

    <div class="forgot">
       <a href="forgot_password.html">Forgot Password?</a>
    </div>

    <hr style="margin:15px 0;">

   
    <a href="<?php echo htmlspecialchars($client->createAuthUrl()); ?>">
        <button class="google-btn"><b>Login with Google</b></button>
    </a>
    <p style="color:white">Already have an account? <a href="signup.html"><b style="color:#FFD700">Sign Up</b></a></p>
</div>

</body>
</html>