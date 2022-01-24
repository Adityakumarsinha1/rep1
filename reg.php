<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pcss.css">
    <title>register</title>
</head>
<body>

    <div class="container">
        <header class="header">
            <div class="left">
                <li type="none" ><strong>The company</strong></li>
            </div>
            <div class="mid">
                <li type="none"><a href="home.html">Home</a> </li>
                <li type="none"><a href="login.php">View data</a> </li>
                <li type="none"><a href="login.php"> Edit data</a></li>
            </div>
        </header>
        <div class="box" id="box1">
            <h1>Register</h1>
            <form action="p.php" method="POST">          
            <input id="textbox" type="text" placeholder="Username" name="username">
            <input id="textbox" type="tel" minlength="10" maxlength="10" placeholder="Phone" name="phoneno">
            <input id="textbox" type="email" placeholder="Email" name="email">
            <input id="textbox" type="password" placeholder="password" name="password">
            <button id="button" name="submit">Register</button>
            <h3>Already an user ?&nbsp; login here !</h3>
            <a href="login.php">LOGIN</a>
            </form>
        </div>
