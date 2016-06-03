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
				        <img src="empty.jpg" id="bigimage" alt="">
				    </div>
				    <div id="minipics">
				      <ul>
							<?php
								$i=0;
								$imgLink=array();
								// percorso della directory da leggere
								$directory = "img/galleria/cerimonia";
								
								// apriamo la directory
								$open_handle = opendir($directory);
								
								// impostiamo un ciclo while() per scorrere tutto il contenuto
								while($read = readdir($open_handle)) {
								
								// escludiamo . e ..
								
									if($read != "." && $read != "..") {
									
									// in questo esempio stampiamo a video i nomi di file e directory
										$imgLink[$i]=$read;
										echo '<li><a href="' . $directory . '/'. $read .'"><img src="' . $directory . '/'. $read .'" alt="'. $read .'" title="'. $read .'" height="42" width="42"></a></li>';
										$i++;
									
									}
								}
								
								// chiudiamo la directory
								closedir($open_handle);
								
							?>				      
<!-- 				        <li><a href="egg.jpg"><img src="egg_small.jpg" alt="uovo" title="Uovo"></a></li> -->
<!-- 				        <li><a href="field.jpg"><img src="field_small.jpg" alt="Campo di grano in una notte d' estate" title="Campo di grano in una notte d' estate"></a></li> -->
<!-- 				        <li><a href="orange.jpg"><img src="orange_small.jpg" alt="Arancia digitale" title="Arancia digitale"></a></li> -->
<!-- 				        <li><a href="forestonWater.jpg"><img src="forestonWater_small.jpg" alt="foresta frullata" title="Foresta frullata"></a></li> -->
<!-- 				        <li><a href="sleep.jpg"><img src="sleep_small.jpg" alt="Come posso dormire con i tuoi occhi nella mente" title="Come posso dormire con i tuoi occhi nella mente"></a></li> -->
<!-- 				        <li><a href="optical.jpg"><img src="optical_small.jpg" alt="Acqua ottica" title="Acqua ottica"></a></li> -->
<!-- 				        <li><a href="ghosts.jpg"><img src="ghosts_small.jpg" alt="Loro ci vedono" title="Loro ci vedono"></a></li> -->
<!-- 				        <li><a href="join.jpg"><img src="join_small.jpg" alt="This is love" title="This is love"></a></li> -->
<!-- 				        <li><a href="hypergrid.jpg"><img src="hypergrid_small.jpg" alt="Iperspazio" title="Iperspazio"></a></li> -->
<!-- 				        <li><a href="macchia.jpg"><img src="macchia_small.jpg" alt="Sono solo parole" title="Sono solo parole"></a></li> -->
<!-- 				        <li><a href="tunnel.jpg"><img src="tunnel_small.jpg" alt="Verso il tunnel" title="Verso il tunnel"></a></li> -->
<!-- 				        <li><a href="sea.jpg"><img src="sea_small.jpg" alt="Mar nero" title="Mar Nero"></a></li> -->

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
