<?php

include "config.php";

if (isset($_POST)) {
	$id = $_POST['id'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];


	$sql = "UPDATE `contacts` SET `email`='$email',`address`='$address',`phone`='$phone' WHERE id = $id";

	$query = mysqli_query($conn,$sql);
	if ($query) {
		header("Location:index.php");
	}else {
		echo "error";
	}
}



 ?>
