<?php
include "config.php";

$id = $_GET['id'];


$sql = "DELETE FROM `team` WHERE id=$id";

$query = mysqli_query($conn, $sql);

if ($query) {
	header("Location:index.php");
}else{
	echo "error";
}

 ?>
