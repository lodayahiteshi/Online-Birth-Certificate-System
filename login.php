<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <title>Login</title>
  <link rel="icon" href="assets/img/avatars/main.svg" type=" image/x-icon " />
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
  <link rel="manifest" href="manifest.json" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
  <link rel="stylesheet" href="assets/css/vanilla-zoom.min.css" />
</head>

<body>
  <?php include "navbar.php" ?>

  <main class="page login-page">
    <section class="clean-block clean-form dark">
      <div class="container">
        <div class="block-heading">
          <h2 class="text-info">Log In</h2>
        </div>
        <form>
          <div class="mb-3">
            <label class="form-label" for="email">Email</label><input class="form-control item" type="email" id="email" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="password">Password</label><input class="form-control" type="password" id="password" />
          </div>
          <div class="mb-3">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="checkbox" /><label class="form-check-label" for="checkbox">Remember me</label>
            </div>
          </div>
          <button class="btn btn-primary" type="submit">Log In</button>
        </form>
      </div>
    </section>
  </main>
  <!-- Start: Footer Dark -->
  <?php include 'footer.php'; ?>

</html>