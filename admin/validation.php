<?php
include 'admindb_connect.php';

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $passwords = $_POST['passwords'];

    $s = "SELECT * from adminreg WHERE aname = '$username' AND passwords = '$passwords'";
    $query_run = mysqli_query($con, $s);
    if (mysqli_num_rows($query_run) > 0) {
        foreach ($query_run as $r) {
            $_SESSION['username1'] = $r['aname'];
        }
        $_SESSION['login'] = $_POST['username'];
        echo "<script type='text/javascript'> document.location ='./index.php'; </script>";
    } else {
        echo '<script type=text/javascript> alert("Invalid details") </script>';
    }
}
