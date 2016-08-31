<?php

include "config.php";

if (!isset($_GET["id"])) {
	header("Location:index.php");
}
$id = $_GET["id"];

$sql = "SELECT `photo`, `name`, `pos` FROM `team` WHERE id=$id";

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
         <link rel="author" href="humans.txt">
     </head>
     <body>
         <form class="form-group" action="update.php" method="post">

         	<input class="form-control" type="text" name="photo" placeholder="Photo" value="<?= $row['photo']?>"><br>
         	<input type="text" name="name" placeholder="Name" value="<?= $row['name']?>"><br>
         	<input type="hidden" name="id" value="<?= $id ?>">
         	<input type="number" name="pos" placeholder="Position" value="<?= $row['pos']?>"><br>
         	<input type="submit" name="submit" value="Update">
         </form>



         <script src="js/main.js"></script>
     </body>
 </html>
