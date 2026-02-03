<?php
session_start();

$message = "";
$message_type = "";

if (isset($_POST['register'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Basic Validation logic
    if ($password !== $confirm_password) {
        $message = "Passwords do not match!";
        $message_type = "error";
    } else {
        // In a real app, you would hash the password and save to a database here:
        // $hashed = password_hash($password, PASSWORD_DEFAULT);
        
        $message = "Registration successful! You can now login.";
        $message_type = "success";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        :root {
            --primary-red: #e63946;
            --dark-red: #a82a33;
            --success-green: #2a9d8f;
            --glass: rgba(255, 255, 255, 0.95);
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #e63946 0%, #1d3557 100%);
            min-height: 100vh;
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
        }

        .container {
            background: var(--glass);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
            width: 90%;
            max-width: 450px;
            margin: 40px 0;
            text-align: center;
        }

        h2 { color: var(--primary-red); margin-bottom: 10px; font-size: 1.8rem; }
        p { color: #666; margin-bottom: 25px; }

        input {
            width: 100%;
            padding: 14px;
            margin-bottom: 15px;
            border: 2px solid #eee;
            border-radius: 10px;
            box-sizing: border-box;
            font-size: 1rem;
            transition: 0.3s;
        }

        input:focus { border-color: var(--primary-red); outline: none; }

        .register-btn {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 10px;
            background: var(--primary-red);
            color: white;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 10px;
        }

        .register-btn:hover { background: var(--dark-red); transform: translateY(-2px); }

        .login-link {
            display: inline-block;
            margin-top: 20px;
            color: #555;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .login-link b { color: var(--primary-red); }
        .login-link:hover b { text-decoration: underline; }

        .msg {
            padding: 12px;
            border-radius: 8px;
            font-size: 0.9rem;
            margin-bottom: 20px;
            border-left: 4px solid;
        }
        .error { background: #fff0f1; color: var(--primary-red); border-color: var(--primary-red); }
        .success { background: #e6fcf5; color: var(--success-green); border-color: var(--success-green); }
    </style>
</head>
<body>

    <header>GLOBAL HEALTH EARLY WARNING HUB</header>

    <div class="container">
        <h2>REGISTER</h2>
        <p>Create your account to get started.</p>

        <?php if($message): ?>
            <div class="msg <?php echo $message_type; ?>">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>

        <form method="post" action="">
            <input type="text" name="fullname" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="password" name="password" placeholder="Create Password" required>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
            
            <button type="submit" name="register" class="register-btn">Create Account</button>
        </form>

        <a href="Login_Page.php" class="login-link">Already have an account? <b>Login here</b></a>
    </div>

</body>
</html>
</body>
</html>