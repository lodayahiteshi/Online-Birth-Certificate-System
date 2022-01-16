<?php
session_start();
error_reporting(0);
include 'userregdb.php';
?>

<!doctype html>
<html>

<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="./assets/css/login.css">
    <link rel="icon" href="images/favicon.png" size="32*32" type="image/x-icon">
</head>

<body>

    <div class="login-form">

        <h1>Login</h1>
        <form action="#" method="post">
            <p>UserName</p>
            <input type="text" name="username" placeholder="Enter your Username" required>
            <p>Password</p>
            <input type="password" name="passwords" placeholder="Enter your Password" required>
            <button type="submit" name="login" class="button1">Login</button>
        </form>
    </div>
    <?php include 'validation.php'; ?>
    <p style="position:fixed; right:750px; top:580px; padding:5px"><a href="signup.php">Don't have account? SignUp</a></p>
    <p style="position:fixed; right:570px; top:580px; padding:5px"><a href="forgot_pass.php">Forgot Password?</a></p>
</body>

</html>