<?php
session_start();
error_reporting(0);
include 'userregdb.php';
if (strlen($_SESSION['username'] == 0)) {
    header('location:logout.php');
} else {
    include './database_connect.php';

    if (isset($_POST['applicid'])) {

        $apid = $_POST['apid'];

        $s = "SELECT * from appid WHERE ApplicationID = '$apid'";
        $query_run = mysqli_query($con, $s);
        if (mysqli_num_rows($query_run) > 0) {
            $_SESSION['apid'] = $apid;
            header("location:update-application.php?app_id=$apid");
        } else {
            echo '<script type=text/javascript> alert("Invalid Application ID") </script>';
        }
    }
?>

    <html>

    <head>
        <link rel="stylesheet" href="./assets/css/applid.css">
    </head>

    <body>
        <center>
            <h2>Enter Application to Update Birth Certificate</h2><br>
            <form method="post">
                <label>Application Id</label>&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="number" name="apid" id="apid" placeholder="Enter Application Id" required /><br /><br />
                <button type="submit" name="applicid" class="btn">Submit</button>
            </form>
        </center>
    </body>

    </html>
<?php } ?>