<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="media/logo-colored.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        
        <link rel="stylesheet" href="css/stylesheet.css">

        <title>Home | San Francisco De Sales</title>
    </head>

    <body>

    <?php #HEADER ?>
    <header>
      <div>
        <nav class="navbar navbar-expand-lg bg-light navbar-light custom-navbar fixed-top justify-content-center">
        <div class="container">
                <!-- LOGO AND NAME -->
                <a class="navbar-brand" href="index.php">
                  <img src="media/logo-colored.png" alt="SFDSSLogo" style="width:40px;" class="mr-2"> 
                </a>
                <a class="navbar-brand fs-navbar text-secondary" href="index.php">San Francisco De Sales</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <!-- NAVS -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                  <ul class="navbar-nav ms-auto">
                    <!-- HOME -->
                    <li class="nav-item px-3">
                      <a class="nav-link" href="index.php" role="button">Home</a>
                    </li>

                <!-- ACADEMICS -->
                <li class="nav-item dropdown px-3">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Programs</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="pages/prog-kinder-page.php">Kindergarten</a></li>
                      <li><a class="dropdown-item" href="pages/prog-elem-page.php">Grade School</a></li>
                      <li><a class="dropdown-item" href="pages/prog-jhs-page.php">Junior High School</a></li>
                      <li><a class="dropdown-item" href="pages/prog-shs-page.php">Senior High School</a></li>
                    </ul>
                  </li>
                    
                <!-- ABOUT -->
                <li class="nav-item px-3">
                  <a class="nav-link" href="../pages/about.php">About Us</a>
                </li>

                <!-- PRE-ENROLL-->
                  <li class="nav-item px-3">
                    <a class="btn btn-success" type="button" href="pages/enroll-page.php">Enroll now</a>
                  </li>
                </ul>
              </div>
        </nav>
      </div>
    </header>

    <?php #BODY--INCLUDES ?>
    <?php include "includes/body.php" ?>

    <?php #FOOTER ?>
    <footer class="sticky-footer">
      <div class="container">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
          <div class="col mb-3">
            <a class="navbar-brand" href="index.html">
            <img src="media/logo-colored.png" alt="SFDSSLogo" style="width:75px;" class="mr-2"> 
            </a>
            <p class="text-muted mt-auto">San Francisco De Sales © 2023</p>
          </div>
          
          <div class="col mb-3"></div>
          
          <div class="col mb-3">
            <h5 class="fw-med">Academics</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2 fw-reg"><a href="#" class="nav-link p-0 text-muted">Kindergarten</a></li>
                <li class="nav-item mb-2 fw-reg"><a href="#" class="nav-link p-0 text-muted">Grade School</a></li>
                <li class="nav-item mb-2 fw-reg"><a href="#" class="nav-link p-0 text-muted">Junior High School</a></li>
                <li class="nav-item mb-2 fw-reg"><a href="#" class="nav-link p-0 text-muted">Senior High School</a></li>
              </ul>
          </div>
          
          <div class="col mb-3">
            <h5 class="fw-med">Admission</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2 fw-reg"><a href="#" class="nav-link p-0 text-muted">Old Student</a></li>
                <li class="nav-item mb-2 fw-reg"><a href="#" class="nav-link p-0 text-muted">New Student</a></li>
                <li class="nav-item mb-2 fw-reg"><a href="#" class="nav-link p-0 text-muted">Transferees</a></li>
                <li class="nav-item mb-2 fw-reg"><a href="#" class="nav-link p-0 text-muted">Foreign Student</a></li>
              </ul>
          </div>
          
          <div class="col mb-3">
            <h5 class="fw-med">Admin</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2 fw-reg"><a href="admin/login.php" class="nav-link p-0 text-muted">Log In/Register</a></li>
              </ul> <br>
              <h5 class="fw-med">Contact Us</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2 fw-reg"><a href="https://www.facebook.com/SFDSSAdmin" class="nav-link p-0 text-muted">Facebook Page</a></li>
              </ul>
          </div>
        </footer>
      </div>
    </footer>

    <script src="js/script.js"></script>
    </body>
</html>
