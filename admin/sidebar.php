<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet" />
<!-- CSS Files -->
<link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="./assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="./assets/img/logo-small.png">
            </div>
            <!-- <p>CT</p> -->
        </a>
        <a href="#" class="simple-text logo-normal">
            admin 1
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

            <li>
                <a href="./user.php">
                    <i class="nc-icon nc-single-02"></i>
                    <p>User Profile</p>
                </a>
            </li>
        </ul>
        <script>
            var a = document.querySelectorAll(".nav a");
            for (var i = 0, length = a.length; i < length; i++) {
                a[i].onclick = function() {
                    this.parentNode.classList.add('active');
                };
            }
        </script>
    </div>
</div>