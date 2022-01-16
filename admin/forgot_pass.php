<?php
session_start();
error_reporting(0);
include 'admindb_connect.php'; ?>
<!doctype html>
<html>

<head>
    <title>Forgot Password</title>
    <link rel="stylesheet" href="./assets/css/forgot_pass.css">
    <link rel="icon" href="images/favicon.png" size="32*32" type="image/x-icon">
</head>

<body>
    <div class="forgot-password">
        <h1>Recover forgot password</h1>
        <form action="#" method="post">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter your Username" required>
            <p>Choose a Password</p>
            <input type="password" name="passwords" placeholder="Choose a Password" required>
            <p>New Password</p>
            <input type="password" name="cpassword" placeholder="Retype your  new Password" required>
            <button class="button1" name="reset" type="submit">Reset Password</button>
        </form>
    </div>
    <?php include 'forgotpass.php'; ?>
    <p style="position:fixed; right:550px; top:660px; padding:10px"><a href="login_form.php">Login Using Credentials?</a></p>
</body>

</html>