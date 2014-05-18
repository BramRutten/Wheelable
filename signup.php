<?php
require_once('classes/user.class.php');
session_start();

if(isset($_SESSION['hash'])){
    header('Location: base.php');
}else{
if (!empty($_POST)) {
    if ($_POST['password'] == $_POST['repeated_password']) {

       
        $u = new user();

        $u->name = $_POST['name'];
        $u->email = $_POST['email'];
        $u->password = $_POST['password'];
        $u->type = $_POST['type'];
        $u->signup();
                

    }else{
        $alert ="Passwords didn't match.";
    }    
}else{
    $alert = "Please fill in the fields.";
}
}
?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Wheelable.</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>

<div class="container">
    <div class="login-container">
        <div id="output"></div>
            <div class="avatar"></div>
                <form action="" method="POST">
                    <div class="form-box">
                        <input class="high-border" name="name" type="text" placeholder="username">
                        <input class="low-border lowType" name="email" type="text" placeholder="email">
                    </div>
                </br>
                    <div class="form-box">
                        <input class="high-border" type="password" name="password" placeholder="password">
                        <input class="low-border" type="password" name="repeated_password" placeholder="repeat password">
                    </div>
                        </br>
                        <div class="form-box">
                            <div class="btn-group little-text" data-input="type" data-toggle="buttons-radio">
                                <button type="button" value="0" class="typeBtn btn btn-default activeClass" data-input="button">wheelchair user</button>
                                <button type="button" value="1" class="typeBtn btn btn-default" data-input="button">companion</button>
                            </div>
                            <input type="hidden" name="type" class="userType" value="0" />
                        </dive>
                        <button class="btn btn-info btn-block login"  type="submit">Sign up</button>
                    </div>
                    
                </form> 
            <p class="center">or</p>
            <a href="index.php"><button class="btn btn-info btn-block login">Login</button></a>   
            </div>
        </div>
    </div>
</div>

<script src="js/signup.js"></script>       
        

	
</body>
</html>