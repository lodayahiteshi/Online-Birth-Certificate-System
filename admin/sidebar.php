<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet" />
<!-- CSS Files -->
<link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="./assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
<div class="sidebar" data-color="white" data-active-color="danger" id="sidebar-collapse">
    <div class="logo">
        <a href="./index.php" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="./assets/img/logo-small.png">
            </div>
        </a>
        <!-- It allows us to identify the client that is accessing the web-application -->
        <a href="./index.php" class="simple-text logo-normal">
            <?php echo $_SESSION['username1'] ?>
        </a>
    </div>
    <div class="sidebar-wrapper" id="myDIV">
        <ul class="nav">
            <li class="active">
                <a href="./index.php">
                    <i class="nc-icon nc-bank"></i>
                    <p>Home</p>
                </a>
            </li>
            <li>
                <a href="./all-applications.php">
                    <i class="nc-icon nc-paper"></i>
                    <p>All Applications</p>
                </a>
            </li>
            <li>
                <a href="./view-new-applications.php">
                    <i class="nc-icon nc-simple-add"></i>
                    <p>New Applications</p>
                </a>
            </li>
            <li>
                <a href="./view-verified-applications.php">
                    <i class="nc-icon nc-check-2"></i>
                    <p>Verified Applications</p>
                </a>
            </li>
            <li>
                <a href="./view-rejected-applications.php">
                    <i class="nc-icon nc-simple-remove"></i>
                    <p>Rejected Applications</p>
                </a>
            </li>
            <li>
                <a href="./search-between.php">
                    <i class="nc-icon nc-zoom-split"></i>
                    <p>Search Between Dates</p>
                </a>
            </li>

        </ul>
    </div>
</div>