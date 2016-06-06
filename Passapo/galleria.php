<!doctype html>
<html>
	<head>
		<title></title>
		<link href="index.css" rel="stylesheet">
		<link rel="stylesheet" href="gallery.css">
		<script type="text/javascript" src="onpage.js"></script>
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
				<div id="container">
<!-- 				  <div id="header"><img src="header.jpg" alt="Logo" title="Galleria digitale"> -->
<!-- 				  <h2>Esperimenti digitali. © HTML.it & Alessandro Fulciniti</h2> -->
<!-- 				  </div> -->
				  <div id="gallery">
				    <div id="zoom"><h3 id="titolo">Clicca sulle miniature per vedere gli ingrandimenti.</h3>
				        <img src="img/empty.jpg" id="bigimage" alt="">
				    </div>
				    <div id="minipics">
				      <ul>
							<?php
								$i=0;
								$imgLink=array();
								// percorso della directory da leggere
								$directory = "img/galleria/cerimonia";
								
								// apro la directory
								$open_handle = opendir($directory);
								
								// ciclo while() per scorrere tutto il contenuto
								while($read = readdir($open_handle)) {
								
								// escludo . e ..
								
									if($read != "." && $read != "..") {
									
										$imgLink[$i]=$read;
										echo '<li><a href="' . $directory . '/'. $read .'"><img src="' . $directory . '/'. $read .'" alt="'. $read .'" title=" " height="60" width="60"></a></li>';
										$i++;
									
									}
								}
								
								// chiudiamo la directory
								closedir($open_handle);
								
							?>

				      </ul>
				      <div style="clear:left">&nbsp;</div>
				    </div>
				  </div>
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
