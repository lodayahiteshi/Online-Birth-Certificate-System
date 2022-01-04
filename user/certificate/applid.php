<?php
//  include 'database_connect.php';
include '../database_connect.php';

if (isset($_POST['applicid'])) {

    $apid = $_POST['apid'];

    $s = "SELECT * from appid WHERE ApplicationID = '$apid'";
    $query_run = mysqli_query($con, $s);
    if (mysqli_num_rows($query_run) > 0) {
        $_SESSION['apid'] = $apid;
        header("location:download_certificate.php?app_id=$apid");
    } else {
        echo '<script type=text/javascript> alert("Invalid Application ID") </script>';
    }
}
?>

<html>

<head>
    <link rel="stylesheet" href="./applid.css">
</head>

<body>
    <center>
        <h2>Enter Application to Generate/View Birth Certificate</h2><br>
        <form method="post">
            <label>Application Id</label>&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="number" name="apid" id="apid" placeholder="Enter Application Id" required /><br /><br />
            <button type="submit" name="applicid" class="btn">Submit</button>
        </form>
    </center>
</body>

</html>