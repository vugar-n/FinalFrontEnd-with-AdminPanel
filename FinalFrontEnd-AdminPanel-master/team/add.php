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
		<input type="text" name="photo" placeholder="photo"><br>
		<input type="text" name="name" placeholder="name"><br>
		<input type="number" name="pos" placeholder="pos"><br>
		<input type="submit" name="submit" value="add">
	</form>

	<?php
		if (isset($_POST['submit'])) {
			@$photo = $_POST['photo'];
			@$name = $_POST['name'];
			@$pos = $_POST['pos'];

			$sql = "INSERT INTO `team`(`photo`, `name`, `pos`) VALUES ('$photo','$name','$pos')";
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
