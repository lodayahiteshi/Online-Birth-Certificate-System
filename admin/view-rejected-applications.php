<?php
session_start();
error_reporting(0);
include 'admindb_connect.php';
if (strlen($_SESSION['username1'] == 0)) {
    header('location:logout.php');
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
        <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Rejected Applications</title>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport" />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet" />
        <!-- CSS Files -->
        <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="./assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
        <!-- Bootstrap Data Tables -->
        <link rel="stylesheet" href="http://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
        <!-- Data table -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

        <script src="https://kit.fontawesome.com/a07eba2ffc.js" crossorigin="anonymous"></script>
        <!-- Styling Bootstrap Table -->
        <style>
            table.dataTable thead .sorting,
            table.dataTable thead .sorting_asc,
            table.dataTable thead .sorting_desc {
                background-image: none;
            }
        </style>
    </head>

    <body class="">
        <div class="wrapper">
            <ul class="nav">
                <li class="active">
                </li>
            </ul>
            <?php include "sidebar.php" ?> <div class="main-panel">
                <!-- Navbar -->
                <?php include "navbar.php"; ?>
                <!-- End Navbar -->
                <div class="content">
                    <div class="row">
                        <div class="col-md-auto">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">View Rejected Applications</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table" id="rejected">
                                            <thead class="text-primary">
                                                <th>ID</th>
                                                <th>Application ID</th>
                                                <th>FullNameOf Child</th>
                                                <th>Gender</th>
                                                <th>BirthDate (yyyy-mm-dd)</th>
                                                <th data-orderable="false">PlaceOfBirth</th>
                                                <th>Father's Name</th>
                                                <th>Mother's Name</th>
                                                <th>Email ID</th>
                                                <th>Aadhar Number</th>
                                                <th>Religion</th>
                                                <th data-orderable="false">PermanantAddress</th>
                                                <th>Informant's Name</th>
                                                <th>Reporting Date</th>
                                                <th>Status</th>
                                                <th>Remark</th>
                                                <th class="text-right" data-orderable="false">View Aadhar Proof</th>
                                                <th class=" text-right" data-orderable="false">View Affidivate</th>
                                            </thead>
                                            <tbody>

                                                <?php
                                                include './database_connect.php';

                                                $query = "SELECT * from info_of_child ch, appid ap, place_of_birth pob, fathers_info finfo, mothers_info minfo, permanent_addr peraddr, informants_info inf where ap.userID=ch.id and ap.userID=pob.id and ap.userID=finfo.id and ap.userID=minfo.id and ap.userID=peraddr.id and ap.userID=inf.id";

                                                $result = mysqli_query($con, $query);
                                                $cnt = 1;

                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    if ($row['status'] == "Rejected") {
                                                ?>
                                                        <tr>
                                                            <td><?php echo $cnt ?></td>
                                                            <td><?php echo $row['ApplicationID'] ?></td>
                                                            <td><?php echo $row['firstname'] . " " . $row['midname'] . " " . $row['lastname'] ?></td>
                                                            <td><?php echo $row['gender'] ?></td>
                                                            <td><?php echo $row['dob'] ?></td>
                                                            <td><?php echo $row['house_no'] . ", " . $row['bldg_no_name'] . ", " . $row['street_lane'] . ", " . $row['village_town'] . ", " . $row['district'] . ", " . $row['pstate'] ?></td>
                                                            <td><?php echo $row['fname'] . " " . $row['fmname'] . " " . $row['flname'] ?></td>
                                                            <td><?php echo $row['mfname'] . " " . $row['mmidname'] . " " . $row['mlname'] ?></td>

                                                            <td><?php echo $row['femail'] . " / " . $row['memail'] ?></td>
                                                            <td><?php echo $row['aadhar'] ?></td>
                                                            <td><?php echo $row['freligion'] ?></td>
                                                            <td><?php echo $row['perhouse'] . ", " . $row['perbldg'] . ", " . $row['perstreet'] . ", " . $row['perlocal'] . ", " . $row['pervillage'] . ", " . $row['perdistr'] . ", " . $row['perstate'] ?></td>
                                                            <td><?php echo $row['inffname'] . " " . $row['infmname'] . " " . $row['inflname'] ?></td>
                                                            <td><?php echo $row['reportdate'] ?></td>
                                                            <td><?php echo $row['status'] ?></td>
                                                            <td><?php echo $row['Remark'] ?></td>
                                                            <td class="text-center"><a href="download.php?aadhar_id=<?php echo $row['userID'] ?>"><i class="fas fa-eye"></i></a></td>
                                                            <td class="text-center"><a href="download.php?aff_id=<?php echo $row['userID'] ?>"><i class="fas fa-eye"></i></a></td>
                                                        </tr>
                                                <?php $cnt = $cnt + 1;
                                                    }
                                                } ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Adding the Bootstrap Data Table -->
                <script>
                    $(document).ready(function() {
                        $('#rejected').dataTable();
                    });
                </script>

                <?php include "footer.php" ?>

            </div>
        </div>
        <!--   Core JS Files   -->
        <script src="./assets/js/core/jquery.min.js"></script>
        <script src="./assets/js/core/popper.min.js"></script>
        <script src="./assets/js/core/bootstrap.min.js"></script>
        <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>

        <!-- Data table -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    </body>

    </html>
<?php } ?>