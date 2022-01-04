<?php include 'database_connect.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <title> Signup page </title>
    <link rel="stylesheet" href="user/assets/css/signup.css">
    <link rel="icon" href="https://img.icons8.com/windows/64/000000/user.png"/>" size="32*32" type="image/x-icon">
</head>

<body>
    <div class="sign-up-form">
        <!-- <img src="images/user-Icon.png"> -->
        <h1>Sign Up Now</h1>
        <form action='#' method="post">
            <input type="text" name="username" class="input-box" placeholder="Username" required />
            <input type="password" name="passwords" class="input-box" placeholder="Password" required />
            <input type="password" name="cpassword" class="input-box" placeholder="Confirm Password" required />
            <p><span><input type="checkbox"></span> agree to the terms of services </p>
            <button input type="submit" name="sign" class="signup-btn">Sign Up </button>
            <hr>
            <button input type="button" class="gsign-btn">Sign up with Google </button>
            <p> Do you have an account ? <a href="login_form.php"> Login </a></p>
        </form>
    </div>
    <?php include 'registration.php'; ?>
</body>

</html>