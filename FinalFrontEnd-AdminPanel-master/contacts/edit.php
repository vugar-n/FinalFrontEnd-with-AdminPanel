<?php

include "config.php";

if (!isset($_GET["id"])) {
	header("Location:index.php");
}
$id = $_GET["id"];

$sql = "SELECT `email`, `address`, `phone` FROM `contacts` WHERE id=$id";

$query = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($query);

 ?>

 <!doctype html>
 <html>
     <head>
         <meta charset="utf-8">
         <meta name="description" content="">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>Untitled</title>
         <link rel="stylesheet" href="css/style.css">
     </head>
     <body>
         <form action="update.php" method="post">

         	<input type="text" name="email" placeholder="Email" value="<?= $row['email']?>"><br>
         	<input type="text" name="address" placeholder="Address" value="<?= $row['address']?>"><br>
         	<input type="hidden" name="id" value="<?= $id ?>">
         	<input type="number" name="phone" placeholder="Phone" value="<?= $row['phone']?>"><br>
         	<input type="submit" name="submit" value="Update">
         </form>



         <script src="js/main.js"></script>
     </body>
 </html>
