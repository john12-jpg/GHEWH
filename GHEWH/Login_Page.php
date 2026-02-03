<?php
session_start();

// Mock Up
$correct_email = "john@gmail.com";
$correct_password_hash = password_hash("jayshiii!", PASSWORD_DEFAULT);

$error = "";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email === $correct_email && password_verify($password, $correct_password_hash)) {
        $_SESSION['user'] = $email;
        header("Location: index.php");
        exit();
    } else {
        $error = "Invalid credentials. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        :root {
            --primary-red: #e63946;
            --dark-red: #a82a33;
            --light-bg: #f8f9fa;
            --glass: rgba(255, 255, 255, 0.95);
        }

        body {
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background: linear-gradient(135deg, #e63946 0%, #1d3557 100%);
            height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        header {
            width: 100%;
            padding: 20px 0;
            background: rgba(0, 0, 0, 0.25);
            backdrop-filter: blur(10px);
            color: white;
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
            letter-spacing: 2px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }

        .login-container {
            background: var(--glass);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
            width: 90%;
            max-width: 400px;
            margin-top: 60px;
            text-align: center;
        }

        h2 {
            color: var(--primary-red);
            margin-bottom: 25px;
            font-size: 2rem;
        }

        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 14px;
            margin: 10px 0;
            border: 2px solid #eee;
            border-radius: 10px;
            box-sizing: border-box;
            transition: all 0.3s ease;
            font-size: 1rem;
        }

        input:focus {
            border-color: var(--primary-red);
            outline: none;
            box-shadow: 0 0 10px rgba(230, 57, 70, 0.15);
        }

        .forgot-password {
            display: block;
            text-align: right;
            margin: 5px 0 20px 0;
            font-size: 0.85rem;
            color: #666;
            text-decoration: none;
            transition: color 0.3s;
        }

        .forgot-password:hover {
            color: var(--primary-red);
            text-decoration: underline;
        }

        .btn-group {
            display: flex;
            gap: 12px;
        }

        button {
            flex: 1;
            padding: 14px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .login-btn {
            background-color: var(--primary-red);
            color: white;
            box-shadow: 0 4px 10px rgba(230, 57, 70, 0.3);
        }

        .login-btn:hover {
            background-color: var(--dark-red);
            transform: translateY(-2px);
        }

        .register-btn {
            background-color: transparent;
            border: 2px solid var(--primary-red);
            color: var(--primary-red);
        }

        .register-btn:hover {
            background-color: var(--primary-red);
            color: white;
            transform: translateY(-2px);
        }

        .error-msg {
            color: var(--primary-red);
            background: #fff0f1;
            padding: 12px;
            border-radius: 8px;
            font-size: 0.9rem;
            margin-bottom: 20px;
            border-left: 4px solid var(--primary-red);
        }
    </style>
</head>
<body>

    <header>
        GLOBAL HEALTH EARLY WARNING HUB
    </header>

    <div class="login-container">
        <h2>LOGIN OR REGISTER</h2>

        <?php if($error): ?>
            <div class="error-msg"><?php echo $error; ?></div>
        <?php endif; ?>
        
        <form method="post" action="">
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="password" name="password" placeholder="Password" required>
            
            <a href="Forgot_Password.php" class="forgot-password">Forgot your password?</a>
            
            <div class="btn-group">
                <button type="submit" name="login" class="login-btn">Login</button>
                <button type="button" class="register-btn" onclick="location.href='Register.php'">Register</button>
            </div>
        </form>
    </div>

</body>
</html>