<!doctype html>
<html>
	<head>
		<title>Passapò Milano</title>
		<link href="index.css" rel="stylesheet">
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
				<div id="indirizzo" style="float:left;position:relative;top:100px;width:100%;margin-bottom:50px;z-index:-1;">
					<p>
						Per ordini o informazioni:<br>
					</p>
					<p class="ind">
						<font>
							Mail: <a href="mailto:passapomilano@gmail.com">passapomilano@gmail.com</a><br>
							Telefono: +39.335.8010339
						</font>
					</p>
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