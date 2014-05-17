<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/base.css">
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=true">

</script>

<script>
function initialize(){
	var myCenter=new google.maps.LatLng(50.9925,4.5555);

	var mapProp = {
  		center:myCenter,
  		zoom:15,
  		mapTypeId:google.maps.MapTypeId.ROADMAP
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
<div id="googleMap"></div>

</body>
</html>