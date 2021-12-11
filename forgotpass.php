<?php
include 'database_connect.php';
if(isset($_POST['reset']))
{
    
$username = $_POST['username'];
$passwords = $_POST['passwords'];
$cpassword = $_POST['cpassword'];

if($passwords==$cpassword)
{
    $q = "SELECT * from usertable where uname = '$username'";

$query_run = mysqli_query($con, $q);

if(mysqli_num_rows($query_run)==0){
    echo'<script type="text/javascript"> alert("Username does not exists......Enter correct Username!!") </script>';
}
else
{
    $chng = "UPDATE usertable set passwords = '$passwords' where  uname = '$username'";
    $query_run = mysqli_query($con, $chng);
    if($query_run){
        echo '<script type="text/javascript"> alert("Password changed successfully......Go to Login") </script>';
        //header('location:login_form.php');
    }
        else{
            echo'<script type="text/javascript"> alert("Error1") </script>';
        }
} 
}
else{
        echo'<script type="text/javascript"> alert("Error") </script>';
}

}


?>

