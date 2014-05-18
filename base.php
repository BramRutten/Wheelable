<?php
require_once('classes/user.class.php');
session_start();



$u = new user();
$u->isLoggedIn();

//echo $u->user_id;

?><!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/base.css">
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=true"></script>

<script>
function initialize(){


	var myCenter=new google.maps.LatLng(50.9925,4.5555);



	var mapProp = {
  		center:myCenter,
  		zoom:15,
  		mapTypeId:google.maps.MapTypeId.ROADMAP,
  		disableDefaultUI: true
	};

	var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}

	google.maps.event.addDomListener(window, 'load', initialize);


</script>


</head>

<body>
<h1>
<div id="googleMap"></div>
<div id="UI">
	<div class="topBar">
		<a href="destroy.php"><div class="logoutTopRight">
			<img src="images/exit.png" alt="Quit the application.">
		</div></a>
	</div>
</div>
</body>
</html>