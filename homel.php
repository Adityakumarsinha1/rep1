<?php
session_start();
if (isset($_SESSION['email'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pcss.css">
    <link rel="stylesheet" href="css/home.css">
    <title>Home</title>
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="left">
                <li type="none" ><strong>The company</strong></li>
            </div>
            <div class="mid">
                <li type="none"><a href="homel.html">Home</a> </li>
                <li type="none"><a href="show.php">View data</a> </li>
                <li type="none"><a href="update.php"> Edit data</a></li>
                <li type="none"><a href="logout.php"> Log-out</a></li>
            </div>
        </header>
        <div class="loggedin">
            <h1>Logged in sucessfully !</h1>
            <h2>Go to view to view the data of the database .</h2>
            <h2>Go to update/delete to alter table data .</h2>
            <h2>And click on the log-out button to log out .</h2>
        </div>
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