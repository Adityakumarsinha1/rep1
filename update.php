<?php

session_start();
if (isset($_SESSION['email'])) {

include('dbcon.php');
$q =  "SELECT * FROM `users`";

$query = mysqli_query($connect,$q);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pcss.css">
    <link rel="stylesheet" href="css/home.css">
    <title>Details</title>
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="left">
                <!-- <img src="noodles.jpg" alt="network error" height="100px" width="100px"> -->
                <li type="none" ><strong>The company</strong></li>
            </div>
            <div class="mid">
                <li type="none"><a href="homel.php">Home</a> </li>
                <li type="none"><a href="show.php">View data</a> </li>
                <li type="none"><a href="update.php"> Edit data</a></li>
                <li type="none"><a href="logout.php"> Log-out</a></li>
            </div>
            <table>
                <tr>
                    <th>S.No</th>
                    <th>Username</th>
                    <th>Phone-no</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>update</th>
                    <th>delete</th>
                </tr>
                <?php
                    include('dbcon.php');

                    $q =  "SELECT * FROM `users`";
                    $query = mysqli_query($connect,$q);
                    while($res = mysqli_fetch_array($query))
                    {
                ?>
                <tr>
                    <td><?php  echo $res['id'];  ?></td>
                    <td><?php  echo $res['username'];  ?></td>
                    <td><?php  echo $res['phoneno'];  ?></td>
                    <td><?php  echo $res['email'];  ?></td>
                    <td><?php  echo $res['password'];  ?></td>
                    <td><button class="update"><a href="change.php?id=<?php  echo $res['id'];  ?>">Update</a></button></td>
                    <td><button class="delete"><a href="delete.php?id=<?php  echo $res['id'];  ?>">Delete</a></button></td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </header>
    </div>
</body>
</html>


<?php
    }
    else{
        // header("location:login.php");
        echo "<h1> Session logged out.</h1>";
    }
    ?>