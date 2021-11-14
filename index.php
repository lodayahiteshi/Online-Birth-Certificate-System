<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Home</title>
    <link rel="icon" href="assets/img/avatars/main.svg" type=" image/x-icon " />
    <link rel="manifest " href="manifest.json " />
    <link rel="stylesheet " href="assets/bootstrap/css/bootstrap.min.css " />
    <link rel="stylesheet " href="assets/fonts/simple-line-icons.min.css " />
    <link rel="stylesheet " href="assets/css/vanilla-zoom.min.css " />
    <link rel="stylesheet " href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css " />
    <link rel="stylesheet " href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i " />
    <script src="https://kit.fontawesome.com/a07eba2ffc.js " crossorigin="anonymous "></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>


<body>

    <?php include "navbar.php" ?>

    <main class="page landing-page">
        <section class="clean-block clean-hero" style="color: rgba(9, 162, 255, 0.7)">
            <div class="text">
                <h2>Online Birth Certificate System</h2>
                <p>
                    This is an online portal for generating Birth Certificate.Avoid those long queues and get certificate online through mail.
                </p>
                <button class="btn btn-outline-light btn-lg" type="button" onclick="window.location.href = '#learn-more'">
                    Learn More
                </button>
            </div>
        </section>
        <section class="clean-block clean-info dark" id="learn-more">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Getting Started</h2>
                    <p>
                        There are two panels namely:
                        <br /> USER panel <br /> ADMIN panel.
                    </p>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img class="img-thumbnail" src="assets/img/scenery/user.jpg " />
                    </div>
                    <div class="col-md-6">
                        <h3>USER PANEL</h3>
                        <div class="getting-started-info">
                            <p>
                                If you wish to generate a birth - certicate, or regenerate a lost certificate or do necessary changes /modifications in the certificate, Login through the User Panel.
                            </p>
                        </div>
                        <button class="btn btn-outline-primary btn-lg" type="button" onclick="window.location.href = 'login.html';">
                            Login Now
                        </button>
                    </div>
                    <div class="col-md-6">
                        <h3>ADMIN PANEL</h3>
                        <div class="getting-started-info">
                            <p>
                                If you are a government administrator, the you can view all the applications, the verified applications and the rejected applications.You must Login through the Admin Panel to manage the system.
                            </p>
                        </div>
                        <button class="btn btn-outline-primary btn-lg" type="button ">Login Now</button>
                    </div>
                    <div class="col-md-6">
                        <img class="img-thumbnail" src="assets/img/scenery/admin.png " />
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include "footer.php" ?>
</body>

</html>