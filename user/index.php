<?php
session_start();
error_reporting(0);
include 'userregdb.php';
if (strlen($_SESSION['username'] == 0)) {
    header('location:logout.php');
} else {
?>
    <!doctype html>
    <html>

    <head>
        <title>User Dashboard</title>
        <link rel="stylesheet" href="./assets/css/user-dash.css">
        <link rel="stylesheet" href="./assets/css/footer.css">
        <link rel="icon" href="./assets/img/avatars/baby-feet.png" size="32*32" type="image/x-icon">

        <style>
            body {
                padding-top: 30px;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <!-- <?php echo $_SESSION['username'] ?> -->
            <h2>Online Birth Certificate Generator</h2>
            <!-- Nav -->
            <nav class="main-nav">
                <img src="./assets/img/scenery/child-vector.jpg" class="logo">
                <ul class="main-menu">
                    <li><a href="#"></a></li>
                    <li><a href="../index.php">HOME</a></li>
                    <li><a href="./states.php">STATES</a></li>
                    <li><a href="./faq.php">FAQs</a></li>
                    <li><a href="./logout.php">LOGOUT</a></li>
                </ul>
            </nav>
        </div>

        <main>
            <div class="grid">
                <div class="grid-item">
                    <div class="card">
                        <img class="img-card" src="https://static.thenounproject.com/png/77651-200.png" alt="birth certificate" />
                        <div class="card-content">
                            <h2 class="card-header">Register New Birth Certificate</h2>
                            <h3 class="card-header">नया जन्म प्रमाण पत्र / नया पंजीकरण</h3>
                            <button class="card-btn" onclick="window.location.href='new-application.php';">New</button>
                        </div>
                    </div>
                </div>

                <div class="grid-item">
                    <div class="card">
                        <img class="img-card" src="https://static.thenounproject.com/png/332808-200.png" alt="birth certificate" />
                        <div class="card-content">
                            <h2 class="card-header">Lost Birth Certificate</h2>
                            <h3 class="card-header">जन्म प्रमाण पत्र खो गया</h3>
                            <button class="card-btn" onclick="window.location.href='razorpay/lost_pay/index_1.php';">Lost Certificate</button>
                        </div>
                    </div>
                </div>

                <div class="grid-item">
                    <div class="card">
                        <img class="img-card" src="https://static.thenounproject.com/png/183159-200.png" alt="birth certificate" />
                        <div class="card-content">
                            <h2 class="card-header">Change / Correction</h2>
                            <h3 class="card-header">परिवर्तन / सुधार जन्म प्रमाण पत्र</h3>
                            <button class="card-btn" onclick="window.location.href='razorpay/update_pay/index.php';">Modifications</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </main>
        <div style="align-items:'center';">
            <button class="btn1" onclick="window.location.href = './certificate/view-applid.php';">View Certificate</button>
            <button class="btn2" onclick="window.location.href = './certificate/applid.php';">Download Certificate</button><br><br><br><br><br>
        </div>
        </main>

        <!----Footer ----->
        <?php include 'footer.php' ?>
    </body>

    </html>
<?php }  ?>