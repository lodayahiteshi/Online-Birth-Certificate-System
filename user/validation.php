<?php
include 'userregdb.php';
// session_start();
if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $passwords = $_POST['passwords'];

    $s = "SELECT * from usertable WHERE uname = '$username' AND passwords = '$passwords'";
    $query_run = mysqli_query($con, $s);
    if (mysqli_num_rows($query_run) > 0) {
        foreach ($query_run as $r) {
            $_SESSION['username'] = $r['uname'];
            // echo $_SESSION['username'];
        }
        $_SESSION['login'] = $_POST['username'];
        // $_SESSION['username'] = $username;
        echo "<script type='text/javascript'> document.location ='./index.php'; </script>";
        // header('location:user/index.php');
    } else {
        echo '<script type=text/javascript> alert("Invalid details") </script>';
    }
}
