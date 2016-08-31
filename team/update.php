<?php

include "config.php";

if (isset($_POST)) {
	$id = $_POST['id'];
	$photo = $_POST['photo'];
	$name = $_POST['name'];
	$pos = $_POST['pos'];


	$sql = "UPDATE `team` SET `photo`='$photo',`name`='$name',`pos`='$pos' WHERE id = $id";

	$query = mysqli_query($conn,$sql);
	if ($query) {
		header("Location:index.php");
	}else {
		echo "error";
	}
}



 ?>
