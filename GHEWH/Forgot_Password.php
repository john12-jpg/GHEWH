<?php
session_start();

$message = "";
$message_type = "";

if (isset($_POST['reset_request'])) {
    $email = $_POST['email'];

    // Mock Up
    if ($email === "choro@gmail.com") {
        $message = "A reset link has been sent to your email!";
        $message_type = "success";
    } else {
        $message = "Email not found in our records.";
        $message_type = "error";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password | Choro Secure</title>
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
        }

        .container {
            background: var(--glass);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
            width: 90%;
            max-width: 400px;
            margin-top: 60px;
            text-align: center;
        }

        h2 { color: var(--primary-red); margin-bottom: 10px; }
        p { color: #555; font-size: 0.9rem; margin-bottom: 25px; }

        input[type="email"] {
            width: 100%;
            padding: 14px;
            margin-bottom: 20px;
            border: 2px solid #eee;
            border-radius: 10px;
            box-sizing: border-box;
            font-size: 1rem;
        }

        input:focus { border-color: var(--primary-red); outline: none; }

        .btn-group { display: flex; flex-direction: column; gap: 10px; }

        button {
            padding: 14px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-weight: 600;
            font-size: 1rem;
            transition: 0.3s;
        }

        .reset-btn { background: var(--primary-red); color: white; }
        .reset-btn:hover { background: var(--dark-red); transform: translateY(-2px); }

        .back-btn { background: transparent; color: #666; font-size: 0.9rem; text-decoration: none; margin-top: 15px; display: inline-block; }
        .back-btn:hover { color: var(--primary-red); }

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
        <h2>Forgot Password?</h2>
        <p>No worries! Enter your email and we'll send you a link to reset your password.</p>

        <?php if($message): ?>
            <div class="msg <?php echo $message_type; ?>">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>

        <form method="post" action="">
            <input type="email" name="email" placeholder="Enter your email" required>
            
            <div class="btn-group">
                <button type="submit" name="reset_request" class="reset-btn">Send Reset Link</button>
            </div>
        </form>

        <a href="Login_Page.php" class="back-btn">← Back to Login</a>
    </div>

</body>
</html>