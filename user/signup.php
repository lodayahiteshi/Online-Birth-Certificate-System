<?php
session_start();
error_reporting(0);
include 'userregdb.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <title> Signup page </title>
    <link rel="stylesheet" href="./assets/css/signup.css">
    <link rel="icon" href="images/favicon.png" size="32*32" type="image/x-icon">
</head>

<body>
    <div class="sign-up-form">
        <!-- <img src="images/user-Icon.png"> -->
        <h1>Sign Up Now</h1>
        <form action='#' method="post">
            <input type="text" name="username" class="input-box" placeholder="Username" required />
            <input type="password" name="passwords" class="input-box" placeholder="Password" required />
            <input type="password" name="cpassword" class="input-box" placeholder="Confirm Password" required />
            <p><span><input type="checkbox" required></span> agree to the terms of services </p>
            <button input type="submit" name="sign" class="signup-btn">Sign Up </button>
            <hr>
            <p> Already have an account ? <a href="login_form.php"> Login </a></p>
        </form>
    </div>
    <?php include 'registration.php'; ?>
</body>

</html>