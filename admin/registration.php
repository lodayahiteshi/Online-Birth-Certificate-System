<?php
include 'admindb_connect.php';

if (isset($_POST['sign'])) {

    $username = $_POST['username'];
    $passwords = $_POST['passwords'];
    $cpassword = $_POST['cpassword'];

    if ($passwords == $cpassword) {
        $q = "SELECT * from adminreg where aname = '$username'";

        $query_run = mysqli_query($con, $q);

        if (mysqli_num_rows($query_run) > 0) {
            echo '<script type="text/javascript"> alert("Username already exists......Try another Username!!") </script>';
        } else {
            $reg = "INSERT into adminreg(aname,passwords) values ('$username','$passwords')";
            $query_run = mysqli_query($con, $reg);
            if ($query_run) {
                echo '<script type="text/javascript"> alert("User Registered..You can now Login") </script>';
                header('location:login_form.php');
            } else {
                echo '<script type="text/javascript"> alert("Error") </script>';
            }
        }
    } else {
        echo '<script type="text/javascript"> alert("Error") </script>';
    }
}
