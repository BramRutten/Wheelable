<?php
require_once('classes/user.class.php');
session_start();

if(isset($_SESSION['hash'])){
    header('Location: base.php');
}else{

    if (isset($_POST['email'])) {
        
        $u = new user();

        try{

            $u->login($_POST['email'], $_POST['password']);   

        } catch (Exception $e){

            $alert = $e->getMessage();
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
	
</head>
<body>

	<div class="container">
	<div class="login-container">
            <div id="output"></div>
            <div class="avatar"></div>
            <div class="form-box">
                <form action="" method="POST">
                    <input class="high-border" name="email" type="text" placeholder="email">
                    <input class="low-border" type="password" name="password" placeholder="password">
                    <button class="btn btn-info btn-block login" type="submit">Login</button>
                </form> 

                <p class="center">or</p>
                <a href="signup.php"><button class="btn btn-info btn-block login">Sign up</button></a>
               
            </div>
        </div>
       
        
</div>
	
</body>
</html>