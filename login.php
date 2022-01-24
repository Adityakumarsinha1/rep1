<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pcss.css">
    <title>login</title>
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
            <h1>Login</h1>
            <form action="validation.php" method="POST">
                    <input id="textbox" placeholder="Registerd Email" type="text" name="email">
                    <input id="textbox" placeholder="Password" type="password" autocomplete="off" name="password">
                    <input id="button" type="submit" value="Log In" />
                    <h3>New here ? &nbsp; Register with us !</h3>
                    <a href="reg.php">REGISTER</a>
            </form>
        </div>



        <!-- <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }
            } -->
</body>
</html>