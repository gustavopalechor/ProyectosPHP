<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Constantes</title>
</head>
<body>
	<?php 
		define("AUTOR", "Gustavo", true);

		echo "El autor es : " . autor . "<br>"; //con true ignora mayusculas
		echo "Linea: " . __LINE__; //Constantes predefinidas en PHP

	 ?>

</body>
</html>