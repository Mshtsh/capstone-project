<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
      <link rel="icon" type="image/png" href="../media/logo-colored.png">
      <link rel="stylesheet" href="../css/stylesheet.css">

      <title>Admin Login | San Francisco De Sales</title>
    
    </head>

    <body>
        <?php include "../includes/nav.php" ?>

        <section class="bg-img py-5 mt-5">
            <br><br><br>
            <div class="container">
                <div class="row mt-5 mb-5">
                    <div class="col-lg-6 my-auto">
                        <img src="../media/logo-white.png" alt="Description_of_the_image" class="mx-auto d-block mb-2" width="80px" height="auto">
                        <h4 class="fw-med text-white text-center">San Francisco De Sales</h4>
                        <h1 class="display-1 fw-bold text-capitalize text-center text-white">Admin Side</h1>
                    </div>
                    <div class="col-lg-6 p-3">
                        <div class="form-body p-4">
                            <form class="p-md-5">
                                <div class="form-floating mb-4 fw-reg">
                                  <input type="email" class="form-control" id="floatingInput" placeholder="">
                                  <label for="floatingInput" class="text-secondary">username</label>
                                </div>
                                <div class="form-floating mb-4 fw-reg">
                                  <input type="password" class="form-control" id="floatingPassword" placeholder="">
                                  <label for="floatingPassword" class="text-secondary">password</label>
                                </div>
                                <div class="checkbox mb-4">
                                  <label class="fw-reg">
                                    <input type="checkbox" value="remember-me"> Remember me
                                  </label>
                                </div>
                                <a class="w-100 btn btn-lg btn-success mb-3" type="submit" href="dashboard.php">Log In</a>
                                <hr class="my-4">
                                <p class="fw-reg text-muted">Don't have an account? <a href="#!" class="text-success">Create One</a></p>
                              </form>
                        </div>
                    </div>
                  </div>
              </div>
              <br><br><br>
        </section>

        <?php include "../includes/footer.php" ?>
    </body>
</html>