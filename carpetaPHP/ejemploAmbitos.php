<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejemplo ambitos</title>
</head>
<body>
	<?php
	$nombre="Juan";


	function dameNombre(){
		global $nombre; //variable global y podremos utilizarla dentro de la funcion
		$nombre="el nombre es " . $nombre;

	}


	dameNombre();


	echo $nombre;



	?>



</body>
</html>