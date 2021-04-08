<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Objetos 2</title>
</head>
<body>
	<?php

	include("vehiculos.php");

	$mazda=new Coche();

	$pegaso=new Camion();

	/*$mazda->ruedas=7; daría fallo por que las ruedas estan encapsuladas()private*/

	//echo "El Mazda tiene " . $mazda->ruedas . " ruedas <br>"; //no funcionaria por que las ruedas estan encapsuladas, solo con los metodos getter y setters

	//echo "El Pegaso tiene " . $pegaso->ruedas . " ruedas <br>";

	
	echo "El Mazda tiene " . $mazda->get_ruedas(). " ruedas<br>";
	echo "El pegaso tiene " . $pegaso->get_ruedas() . "ruedas<br>";

	echo "El Mazda tiene " . $mazda->get_motor(). " cm3<br>";
	echo "El pegaso tiene " . $pegaso->get_motor() . "cm3<br>";
	/*$pegaso->frenar();
	$pegaso->arrancar();*/







	?>

</body>
</html>