<?php
session_start();
if ($_SESSION['adminAccess']) {
  ?>
    <style media="screen">
    img{
      padding-top: 40px;
    }
        ul {
            padding-top: 20px;
        }

        a {
            font-size: 18px;
            color: black;
            font-weight: 700;
            text-decoration: none !important;
        }

        a:hover {
            text-decoration: none !important;
        }
        input[name='logout']{
          padding: 5px 10px;
        }
    </style>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="team/">Team</a></li>
            <li><a href="#">Prices</a></li>
            <li><a href="#">Clients</a></li>
            <li><a href="contacts/">Contacts</a></li>
            <li class="pull-right">
              <form action="logout.php" method="post">
                <input class="btn btn-danger" type="submit" name="logout" value="Log Out">
            </form>
          </li>
          </ul>
          <div class="col-lg-12">
            <img class="img-responsive center-block" src="assets/img/user.png" alt="user" />
          </div>
        </div>
      </div>
    </div>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    <?php
}else {
  header('location:daxilol.php');
}
 ?>
