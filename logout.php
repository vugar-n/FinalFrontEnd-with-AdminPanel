<?php
session_start();
if (isset($_POST['logout'])) {
  header('location:daxilol.php');
  $_SESSION['adminAccess'] = false;
}
 ?>
