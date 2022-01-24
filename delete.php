<?php
include('dbcon.php');
$id=$_GET['id'];
$q="DELETE FROM `users` WHERE id=$id";
mysqli_query($connect,$q);
header("location:update.php"); 
?>