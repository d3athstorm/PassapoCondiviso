<!doctype html>
<html>
	<head>
		<title></title>
		<link href="index.css" rel="stylesheet">
	</head>
	<body width="100%">
		<div id="pippo">
			<nav>
				<ul class="topnav">
				  <li><a href="default.asp">Home</a></li>
				  <li class="parent"><a href="default.asp">Galleria</a>
				      <ul class="child">
				        <li><a href="#">Cerimonia</a></li>
				        <li><a href="#">Autunno-Inverno</a></li>
				        <li><a href="#">Primavera-Estate</a></li>
				      </ul>
				  </li>
				  <li class="parent"><a href="news.asp">Catalogo</a>
				      <ul class="child">
				        <li><a href="#">Cerimonia</a></li>
				        <li><a href="#">Autunno-Inverno</a></li>
				        <li><a href="#">Primavera-Estate</a></li>
				      </ul>
				  </li>
				  <li><a href="contact.asp">Contatti</a></li>
				  <li><a href="about.asp">Dove Siamo</a></li>
				  <li class="icon">
				    <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
				  </li>
				</ul>
			</nav>
		</div>
		<script>
		function myFunction() {
		    document.getElementsByClassName("topnav")[0].classList.toggle("responsive");
		}
		</script>
	</body>
</html>

<?php
	echo "ancora più banane";
	echo "basta troppe banane";
?>