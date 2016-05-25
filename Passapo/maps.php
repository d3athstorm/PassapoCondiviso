<!doctype html>
<html>
	<head>
		<title></title>
		<link href="index.css" rel="stylesheet">
		<script src="http://maps.googleapis.com/maps/api/js"></script>
		<script>
			var myCenter=new google.maps.LatLng(45.4582682,9.1516000);
			var marker;
			
			function initialize() {
			  var mapProp = {
			    center:myCenter,
			    zoom:17,
			    mapTypeId:google.maps.MapTypeId.ROADMAP
			  };
			  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
			  
			  var marker=new google.maps.Marker({
				  position:myCenter,
				  animation:google.maps.Animation.BOUNCE
				  });

				marker.setMap(map);
				var infowindow = new google.maps.InfoWindow({
					  content:"Passapò Milano"
					  });

					infowindow.open(map,marker);
			}
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
	</head>
	<body>
		<div id="logo" style="position:absolute;top:5%;width:100%;">
			<img alt="" src="img/Passapo-logo-grigio-300x300.png">
			<div id="testata" style="position:relative;top:5%;width:100%">
				<img alt="" src="img/immagine-testata-passapo.jpg">
				<div id="pippo" style="position:relative;top:20%;">
					<nav>
						<ul class="topnav" style="z-index: 0;">
						  <li><a href="index.php">Home</a></li>
						  <li class="parent"><a href="">Galleria</a>
						      <ul class="child">
						        <li><a href="galleria.php?categoria=cerimonia">Cerimonia</a></li>
						        <li><a href="galleria.php?categoria=autinv">Autunno-Inverno</a></li>
						        <li><a href="galleria.php?categoria=primest">Primavera-Estate</a></li>
						      </ul>
						  </li>
						  <li class="parent"><a href="">Catalogo</a>
						      <ul class="child">
						        <li><a href="catalogo.php?categoria=cerimonia">Cerimonia</a></li>
						        <li><a href="catalogo.php?categoria=autinv">Autunno-Inverno</a></li>
						        <li><a href="catalogo.php?categoria=primest">Primavera-Estate</a></li>
						      </ul>
						  </li>
						  <li><a href="contatti.php">Contatti</a></li>
						  <li><a href="maps.php">Dove Siamo</a></li>
						  <li class="icon">
						    <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
						  </li>
						</ul>
					</nav>
				</div>
					<div id="indirizzo" style="float:left;position:relative;top:100px;width:50%;z-index:1;">
						<p>
							Lo Showroom lo puoi trovare in:<br>
						</p>
						<p class="ind">
							<font>
								Via Garian 51, Milano(MI)
							</font>
						</p>
					</div>
					<div id="googleMap" style="float:right;position:relative;width:50%;height:800px;z-index:1;">	
					</div>
			</div>
		</div>
		<script>
		function myFunction() {
		    document.getElementsByClassName("topnav")[0].classList.toggle("responsive");
		}
		</script>
	</body>
</html>

<?php

?>
