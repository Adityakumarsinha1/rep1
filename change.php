<?php
include('dbcon.php');
if(isset($_POST['submit']))
{
$id=$_GET['id'];
$username=$_POST['username'];
$phoneno=$_POST['phoneno'];
$email=$_POST['email'];
$password=$_POST['password'];
$q =  "UPDATE `users` SET `id`='[$id]',`username`='[$username]',`phoneno`='[$phoneno]',`email`='[$email]',`password`='[$password]' WHERE id=$id";

$query = mysqli_query($connect,$q);
header("location:update.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pcss.css">
    <title>Update</title>
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="left">
                <li type="none" ><strong>The company</strong></li>
            </div>
        </header>
        <div class="box" id="box1">
            <h1>New Values</h1>
            <form  method="POST">          
            <input id="textbox" type="text" placeholder="Username" name="username">
            <input id="textbox" type="tel" minlength="10" maxlength="10" placeholder="Phone" name="phoneno">
            <input id="textbox" type="email" placeholder="Email" name="email">
            <input id="textbox" type="password" placeholder="password" name="password">
            <button id="button" name="submit">Update</button>
            </form>
        </div>
</body>
</html>