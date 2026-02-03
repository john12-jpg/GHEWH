<?php
session_start();

$correct_email = "john@gmail.com";
$correct_password_hash = password_hash("johndgaf!", PASSWORD_DEFAULT);

$error = "";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email === $correct_email && password_verify($password, $correct_password_hash)) {
        $_SESSION['user'] = $email;
        echo "<script>
                alert('Login successful! Welcome, " . $email . "');
                window.location.href = 'index.php';
              </script>";
        exit(); 
    } else {
        $error = "The password must contain at least one special character (e.g., !, @, or #)";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    
    <?php if($error) echo "<p style='color:red;'>$error</p>"; ?>
    
    <form method="post" action="">
        <input type="email" name="email" placeholder="Email" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>