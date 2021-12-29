<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/admin-dashboard.jpg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title> Admin Dashboard </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/a07eba2ffc.js" crossorigin="anonymous"></script>
</head>

<body class="">
  <div class="wrapper ">
    <?php include "sidebar.php" ?>
    <div class="main-panel">
      <!-- Navbar -->
      <?php include 'navbar.php'; ?>
      <!-- End Navbar -->
      <div class="content">
        <br />
        <br />
        <br />
        <br />
        <br />
        <div class="row">

          <?php
          include './database_connect.php';

          $sql = "SELECT userID from appID where status='Pending'";
          $result = mysqli_query($con, $sql);
          if ($result) {
            $totalnewapp = mysqli_num_rows($result);
          }
          ?>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <img src="./assets/img/new-application.jpg "></img>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers"><br />
                      <p class="card-category">New Applications</p>
                      <p class="card-title"><?php echo htmlentities($totalnewapp); ?> </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <a href="view-new-applications.php" style="text-decoration:none;">
                    <i class="fas fa-eye"></i>
                    View Now
                  </a>
                </div>
              </div>
            </div>
          </div>

          <?php

          $sql = "SELECT userID from appID where status='Verified'";
          $result = mysqli_query($con, $sql);
          if ($result) {
            $totalverapp = mysqli_num_rows($result);
          }
          ?>

          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <img type="image/svg" src="./assets/img/verified.png" width=156px height=124px></img>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers"><br />
                      <p class="card-category">Verified Applications</p>
                      <p class="card-title"><?php echo htmlentities($totalverapp); ?>
                      <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <a href="view-verified-applications.php" style="text-decoration:none;">
                    <i class="fas fa-eye"></i>
                    View Now
                  </a>
                </div>
              </div>
            </div>
          </div>

          <?php
          $sql = "SELECT userID from appID where status='Rejected'";
          $result = mysqli_query($con, $sql);
          if ($result) {
            $totalrejapp = mysqli_num_rows($result);
          }
          ?>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <img src="./assets/img/reject.png" height=124px></img>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers"><br />
                      <p class="card-category">Rejected Applications</p>
                      <p class="card-title"><?php echo htmlentities($totalrejapp); ?> </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <a href="view-rejected-applications.php" style="text-decoration:none;">
                    <i class="fas fa-eye"></i>
                    View Now
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />

        <?php include "footer.php" ?>
      </div>
    </div>

    <!--   Core JS Files   -->
    <script src="./assets/js/core/jquery.min.js"></script>
    <script src="./assets/js/core/popper.min.js"></script>
    <script src="./assets/js/core/bootstrap.min.js"></script>
    <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="./assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="./assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="./assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
</body>

</html>