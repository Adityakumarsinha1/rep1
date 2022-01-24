<?php
include('dbcon.php');



if(isset($_POST['submit']))
{
$username=$_POST['username'];
$phoneno=$_POST['phoneno'];
$email=$_POST['email'];
$password=$_POST['password'];
$q =  "INSERT INTO `users`(`username`, `phoneno`, `email`, `password`) VALUES ('$username','$phoneno','$email','$password')";

$query = mysqli_query($connect,$q);
// echo "registration sucessful";
header("location:reglog.php");
}
else{
    echo "registration failed";
}

?>
