<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Welcome | E-Birth Certificate portal</title>
    <link rel="icon" href="./assets/img/avatars/main.svg" type=" image/x-icon " />
    <link rel="stylesheet " href="./assets/bootstrap/css/bootstrap.min.css " />
    <link rel="stylesheet " href="./assets/fonts/simple-line-icons.min.css " />
    <link rel="stylesheet " href="./css/vanilla-zoom.min.css " />
    <link rel="stylesheet " href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css " />
    <link rel="stylesheet " href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i " />
    <script src="https://kit.fontawesome.com/a07eba2ffc.js " crossorigin="anonymous "></script>
    <script src="./assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        var counter = 1;
        setInterval(function() {
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if (counter > 4)
                counter = 1;
        }, 5000);
    </script>
</head>
<style>
    .img-slider {
        margin-top: 10px;
        padding-bottom: 10px;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .slider {
        width: 800px;
        height: 500px;
        border-radius: 10px;
        overflow: hidden;
    }

    .slides {
        width: 500%;
        height: 500px;
        display: flex;
    }

    .slides input {
        display: none;
    }

    .slide {
        width: 20%;
        transition: 2s;
    }

    .slide img {
        width: 800px;
        height: 500px;
    }


    .navgate-manual {
        position: absolute;
        width: 800px;
        margin-top: 460px;
        display: flex;
        justify-content: center;
    }

    .manual-btn {
        border: 2px solid black;
        padding: 5px;
        border-radius: 10px;
        cursor: pointer;
        transition: 1s;
    }

    .manual-btn:not(:last-child) {
        margin-right: 40px;
    }

    .manual-btn:hover {
        background: #000;
    }


    #radio1:checked~.first {
        margin-left: 0;
    }

    #radio2:checked~.first {
        margin-left: -20%;
    }

    #radio3:checked~.first {
        margin-left: -40%;
    }

    #radio4:checked~.first {
        margin-left: -60%;
    }

    .navgate-auto {
        position: absolute;
        display: flex;
        width: 800px;
        justify-content: center;
        margin-top: 460px;
    }

    .navgate-auto div {
        border: 2px solid black;
        padding: 5px;
        border-radius: 10px;
        transition: 1s;
    }

    .navgate-auto div:not(:last-child) {
        margin-right: 40px;
    }

    #radio1:checked~.navgate-auto .auto-btn1 {
        background: black;
    }

    #radio2:checked~.navgate-auto .auto-btn2 {
        background: black;
    }

    #radio3:checked~.navgate-auto .auto-btn3 {
        background: black;
    }

    #radio4:checked~.navgate-auto .auto-btn4 {
        background: black;
    }
</style>

<body>
    <!-- Navbar Start -->
    <?php include "navbar.php" ?>
    <!-- Navbar End -->

    <!-- Main Body -->
    <center>
        <main class="img-slider">
            <!-- Image Slider -->
            <div class="slider">
                <div class="slides">
                    <!-- Radio Button-->
                    <input type="radio" name="radbtn" id="radio1">
                    <input type="radio" name="radbtn" id="radio2">
                    <input type="radio" name="radbtn" id="radio3">
                    <input type="radio" name="radbtn" id="radio4">
                    <!-- Slide Image -->
                    <div class="slide first">
                        <img src="./assets/img/scenery/new-born-child.jpeg" alt="birthcertificate">
                    </div>
                    <div class="slide">
                        <img src="./assets/img/scenery/certificate-sample-1.jpg">
                    </div>
                    <div class="slide">
                        <img src="./assets/img/scenery/child-holding-hand.jpeg">
                    </div>
                    <div class="slide">
                        <img src="./assets/img/scenery/certificate-sample-2.jpg">
                    </div>

                    <!-- Automatic nav start -->
                    <div class="navgate-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                    </div>

                    <!-- Manual nav start -->
                    <div class="navgate-manual">
                        <label for="radio1" class="manual-btn"></label>
                        <label for="radio2" class="manual-btn"></label>
                        <label for="radio3" class="manual-btn"></label>
                        <label for="radio4" class="manual-btn"></label>
                    </div>

                </div>
            </div>
        </main>
    </center>

    <!-- Getting Started -->
    <main class="page landing-page">
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
                        <img class="img-thumbnail" src="./assets/img/avatars/user.jpg " />
                    </div>
                    <div class="col-md-6">
                        <h3>USER PANEL</h3>
                        <div class="getting-started-info">
                            <p>
                                If you wish to generate a birth - certicate, or regenerate a lost certificate or do necessary changes /modifications in the certificate, Login through the User Panel.
                            </p>
                        </div>
                        <button class="btn btn-outline-primary btn-lg" type="button" onclick="window.location.href = 'user/index.php';">
                            Login Now
                        </button>
                    </div>
                    <div class="col-md-6">
                        <h3>ADMIN PANEL</h3>
                        <div class="getting-started-info">
                            <p>
                                If you are a government administrator, the you can view all the applications, the verified applications and the rejected applications and also mark applications as verified/ rejected. You must Login through the Admin Panel to manage the system.
                            </p>
                        </div>
                        <button class="btn btn-outline-primary btn-lg" type="button" onclick="window.location.href = 'admin/index.php';">Login Now</button>
                    </div>
                    <div class="col-md-6">
                        <img class="img-thumbnail" src="./assets/img/avatars/admin.png " />
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include "footer.php" ?>
</body>

</html>