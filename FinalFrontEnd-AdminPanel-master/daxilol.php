<?php
 session_start();
 ?>
<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body>
  <section id="daxilol">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-lg-offset-4">
                <div class="col-lg-12 text-center">
                    <img class="img-responsive center-block" src="assets/img/logo.png" alt="no image">
                    <form class="form-group" action="check.php" method="post">
                      <input class="form-control" type="text" name="email" placeholder="Login">
                      <input class="form-control" type="password" name="pass" placeholder="Password">
                      <input class="btn btn-success" type="submit" name="submit" value="Sign in">
                    </form>

            </div>
            <div id="copyr">
              <div class="col-lg-12 text-center">
                  <?php
                            if (isset($_SESSION["error"])) {
                      ?>
                      <div class="alert alert-danger" role="alert">
                          <p><?= $_SESSION['error'] ?></p>
                      </div>
                      <?php
                      unset($_SESSION['error']);
                    }
                   ?>
                </div>
                <div class="clearFix"></div>
            </div>
        </div>
    </div>
    </div>
  </section>

    <script src="assets/js/vendor/bootstrap.min.js"></script>
</body>

</html>

</html>
