<!doctype html>
<html>
	<head>
		<title>Passap� Milano</title>
		<meta name="author" content="Moro Stefano - stefanomoro23@gmail.com">
		<link href="index.css" rel="stylesheet">
	</head>
	<body>
		<div id="logo" style="position:absolute;top:5%;width:100%;">
			<img alt="" src="img/Passapo-logo-grigio-300x300.png">
			<div id="testata" style="position:relative;top:5%;width:100%">
				<img alt="" src="img/immagine-testata-passapo.jpg">
				<div id="pippo" style="position:relative;top:20%;">
					<nav>
						<ul class="topnav">
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
					<div id="presentation" style="position:relative;top:50px;width:100%;z-index:-2;">
						<img alt="" src="img/Passapo-logo-grigio-150x150.png"><br><br>
						<p class="text"><font>
							La nostra azienda � specializzata nel settore accessori per<br>
							bambini. Produciamo cerchietti, coroncine, cinturine, borsettine,<br>
							mollettine. La lavorazione artigianale, ed i preziosi materiali sono le<br>
							principali caratteristiche, capaci di trasformare un semplice cerchietto<br>
							in una vera e propria opera d�arte.<br><br><br><br>
							Our company specializes in accessories for children. We produce<br>
							headbands, tiaras, belts, purses, hairclips. The handmade<br>
							workmanship and the precious materials are the main features, that<br>
							enable us to transform a simple headband into a real work of art.<br><br><br><br><br>
							+39 335 8010339<br>
							passapomilano@gmail.com / info@passapo.com<br>
							www.passapo.com<br>
							facebook.com/passapomilano<br><br><br>
							<b>PHOTOGRAPHER</b>/ Ruggero Farina. <b>DESIGNER</b>/ Francesca Giudici. <b>MODEL</b>/ Carolina.
						</font></p>
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