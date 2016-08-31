<?php
include "config.php";

 ?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="add.php" method="post">
		<input type="text" name="email" placeholder="Email"><br>
		<input type="text" name="address" placeholder="Address"><br>
		<input type="text" name="phone" placeholder="Phone"><br>
		<input type="submit" name="submit" value="add">
	</form>

	<?php
		if (isset($_POST['submit'])) {
			@$email = $_POST['email'];
			@$address = $_POST['address'];
			@$phone = $_POST['phone'];

			$sql = "INSERT INTO `contacts`(`email`, `address`, `phone`) VALUES ('$email','$address','$phone')";
			$query = mysqli_query($conn, $sql);

			if ($query) {
				header("Location:index.php");
			}else{
				echo "eror var";
			}


		}
	 ?>
</body>
</html>
