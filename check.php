<?php
session_start();

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  if (!empty($email) && !empty($pass)) {
    if ($email == 'admin' && $pass == 'admin') {
      $_SESSION['adminAccess'] = true;
      header('location:admin.php');
    }else {
      $_SESSION['error'] = 'Invalid login or password';
      header('location:daxilol.php');
    }
  }else {
    $_SESSION['error'] = 'Fill the form !';
    header('location:daxilol.php');
  }
}else {
  header('location:daxilol.php');
}
 ?>
