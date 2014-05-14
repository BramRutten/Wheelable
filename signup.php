<?php

if (isset($_POST)) {
    //Save to db
}else{
    $alert = "Please fill in the fields.";
}

?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Wheelable.</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="theme.css">
</head>
<body>

<div class="container">
	<div class="login-container">
        <div id="output"></div>
            <div class="avatar"></div>
                <form action="" method="POST">
                    <div class="form-box">
                        <input class="high-border" name="user" type="text" placeholder="username">
                        <input class="low-border" name="email" type="text" placeholder="email">
                    </div>
                </br>
                    <div class="form-box">
                        <input class="high-border" type="password" placeholder="password">
                        <input class="low-border" type="password" placeholder="repeat password">
                    </div>
                        </br>
                        <div class="form-box">
                            <div class="btn-group little-text">
                                <button type="button" class="btn btn-default">wheelchair user</button>
                                <button type="button" class="btn btn-default">companion</button>
                            </div>
                        </dive>
                        <button class="btn btn-info btn-block login" type="submit">Sign up</button>
                    </div>
                    
                </form> 
            <p class="center">or</p>
            <a href="index.php"><button class="btn btn-info btn-block login">Login</button></a>   
            </div>
        </div>
    </div>
</div>
<script src="js/login.js"></script>        
        

	
</body>
</html>