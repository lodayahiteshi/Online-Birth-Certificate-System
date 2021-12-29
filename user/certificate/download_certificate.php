<!-- <?php
        // include 'database_connect.php';
        include '../database_connect.php';

        if (isset($_GET['app_id'])) {
            $apid = $_GET['app_id'];
            $id = "SELECT userID from appid where ApplicationID=$apid";
            $query = "SELECT * from info_of_child ch, appid ap, place_of_birth pob, fathers_info finfo, mothers_info minfo, permanent_addr peraddr, informants_info inf where ch.id=$id and ap.id=$id and pob.id=$id and finfo.id=$id and minfo.id=$id and peraddr.id=$id and inf.id=$id";

            $result = mysqli_query($con, $query);
            // $result= mysqli_query($con,$sql);
        }



        ?> -->
<html>

<head>
    <title>Download Certificate</title>
    <link rel="stylesheet" href="./download_certificate.css">
</head>

<body>
    <?php
    include '../database_connect.php';
    if (isset($_GET['app_id'])) {
        $apid = $_GET['app_id'];
        // echo $apid;
        $idd = "SELECT userID FROM appid WHERE ApplicationID=$apid";
        $result1 = mysqli_query($con, $idd);
        if ($result1) {
            if ($row1 = mysqli_fetch_assoc($result1)) {
                // echo "query 1 success \n " . $row1['userID'];
                $id = $row1['userID'];

                $query = "SELECT * FROM info_of_child ch, appid ap, place_of_birth pob, fathers_info finfo, mothers_info minfo, permanent_addr peraddr, informants_info inf WHERE ch.id=$id AND ap.userID=$id AND pob.id=$id AND finfo.id=$id AND minfo.id=$id AND peraddr.id=$id AND inf.id=$id";
                // echo $query . "<br />";
                $result = mysqli_query($con, $query);
                // echo $result;

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($row["status"] == "Verified") {
    ?>
                            <div class="container">
                                <p style="margin-left:15px;">Certificate Number: <?php echo $row['ApplicationID'] ?></p>
                                <hr>
                                <div class="content">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Emblem_of_India.svg/220px-Emblem_of_India.svg.png" alt="emblem of india" width="150px" height="120px" style="float:left">
                                    <img src="https://english.cdn.zeenews.com/sites/default/files/2021/08/03/956836-lakshadweep-15.jpg" alt="grampanchayat" width="200px" height="120px" style="float:right">
                                    <h2>Government of India<br>
                                        Health Department<br>
                                        <?php echo $row['village_town'] ?> </h2>
                                    <hr>
                                </div>
                                <div class="inside-content" style="width:100%">
                                    <h2>Birth Certificate</h2>
                                    <p>(Issued under section 12/17 of the Registration of Births and Deaths Act, 1969 and Rule 8/13 of the <?php echo $row['pstate'] ?> Registration of Births and Deaths Rules,2000.)</p>
                                    <p>This is to certify that the following information has been taken from the original record of birth which is the register for <?php echo $row['village_town'] ?>of <?php echo $row['pstate'] ?></p><br />
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>Name of Child: <?php echo $row['firstname'] . " " . $row['midname'] . " " . $row['lastname'] ?></td>
                                                <td>Sex: <?php echo $row['gender'] ?></td>
                                                </tryle=>
                                                <!-- <tr></tr> -->
                                            <tr>
                                                <td>Date of Birth: <?php echo $row['dob'] ?></td>
                                                <td>Place of Birth: <?php echo $row['house_no'] . ", " . $row['bldg_no_name'] . ", " . $row['street_lane'] . ", " . $row['village_town'] . ", " . $row['district'] . ", " . $row['pstate'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Name of Mother: <?php echo $row['mfname'] . " " . $row['mmidname'] . " " . $row['mlname'] ?></td>
                                                <td>Name of Father: <?php echo $row['fname'] . " " . $row['fmname'] . " " . $row['flname'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Address of parents at time of birth of the child: <br /><?php echo $row['perhouse'] . ", " . $row['perbldg'] . ", " . $row['perstreet'] . ", " . $row['pervillage'] . ", " . $row['perdistr'] . ", " . $row['perstate'] ?></td>
                                                <td>Permanent Address of Parents: <?php echo $row['perhouse'] . ", " . $row['perbldg'] . ", " . $row['perstreet'] . ", " . $row['pervillage'] . ", " . $row['perdistr'] . ", " . $row['perstate'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Registration Number: <?php echo $row['ApplicationID'] ?></td>
                                                <td>Date of Registration: <?php echo $row['reportdate'] ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">Remarks (if any): <?php echo $row['Remark'] ?></td>

                                            </tr>
                                        <tbody>
                                    </table>
                                    <table>
                                        <tr>
                                            <td>Date of Issue of Certificate: <?php echo $row['print_date'] ?></td>
                                            <td>
                                                <img src="seal.jpg" width="150px" height="90px" alt="seal">
                                                <!-- <hr> -->
                                            </td>
                                            <!-- <td colspan="2"></td> -->
                                            <td><img src="sign.jpeg" width="150px" height="80px" alt="signature"><br><br>
                                                Signature of the Issuing Authority</td>
                                        </tr>
                                    </table>
                                    <!-- <h2 style="margin-top:60%;margin-right:13%;"><img src="seal.jpg" width="150px" height="90px" alt="seal"></h2> -->
                                    <hr>
                                    <p style="background-color:lightgray;text-align:right;">Ensure Registration of every Birth and Death</p>
                                </div>
        <?php } else {
                            // echo "<script>alert('Your Application is:  , $row['status']')</script>";
                            echo '<script type="text/javascript">
                            alert("Your Application is  ' . $row['status'] . '");
                            window.location.replace("applid.php");
                            </script>';
                            // header("Location:./user-dash.php");
                        }
                    }
                } else {
                    echo "Error";
                }
            }
        }
    } ?>
</body>

</html>