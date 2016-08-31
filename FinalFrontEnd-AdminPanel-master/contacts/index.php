<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Untitled</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css" media="screen" title="no title" charset="utf-8">
    <style media="screen">
    ul {
        padding-top: 20px;
    }

    a {
        font-size: 18px;
        font-weight: 700;
        text-decoration: none !important;
    }

    a:hover {
        text-decoration: none !important;
    }
    input[name='logout']{
      padding: 5px 10px;
    }
        .col-lg-7 {
            margin-top: 40px;
        }

        th,
        td {
            padding: 10px !important;
        }
        tr a[name="delete"]{
          font-size: 14px;
          padding: 8px 15px;
          color: white;
        }
        tr a[name="edit"]{
          font-size: 14px;
          padding: 8px 20px;
          color: white;
        }
    </style>
</head>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <ul class="nav nav-tabs">
        <li><a href="../admin.php">Home</a></li>
        <li><a href="../team">Team</a></li>
        <li><a href="#">Prices</a></li>
        <li><a href="#">Clients</a></li>
        <li class="active"><a href="#">Contacts</a></li>
        <li class="pull-right">
          <form action="logout.php" method="post">
            <input class="btn btn-danger" type="submit" name="logout" value="Log Out">
        </form>
      </li>
      </ul>

    </div>
  </div>
</div>
<div class="col-lg-7 col-lg-offset-3">

    <body>
        <table class="table table-striped text-left">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>EMAIL</th>
                    <th>ADDRESS</th>
                    <th>PHONE</th>
                </tr>
            </thead>
            <tbody>
                <?php
            include "config.php";

            $sql = "SELECT * FROM `contacts`";
            $query = mysqli_query($conn, $sql);

            if ($query) {

              while($row = mysqli_fetch_assoc($query)){
                echo "<tr>";

                echo"<td>".$row['id']."</td>";
                echo"<td>".$row['email']."</td>";
                echo"<td>".$row['address']."</td>";
                echo"<td>".$row['phone']."</td>";
                echo"<td><a class=\"btn btn-primary\" name=\"edit\" href='edit.php?id=".$row['id']."'>EDIT</a></td>";

                echo "</tr>";
              }
            }
           ?>
            </tbody>
        </table>
        <!-- <a name="addNewTeamMember" class="btn btn-success" href="add.php">Add a new team member</a> -->
</div>

<script src="js/main.js"></script>
</body>

</html>
