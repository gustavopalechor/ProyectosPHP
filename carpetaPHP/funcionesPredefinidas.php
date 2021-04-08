<!DOCTYPE html>
<html>
<head>
	<title>funciones</title>
</head>
<body>
<?php 
	/*$palabra="JUAN";
	$palabra1="juan";

	echo (strtolower($palabra));
	echo (strtoupper($palabra1));*/

	/*function suma($num1, $num2)
	{
		$resultado=$num1+$num2;

		return $resultado;
	}

	echo (suma(5,7));*/
	function frase_mayuscula($frase, $conversion=true){
		$frase=strtolower($frase);

		if ($conversion==true) {
			$resultado=ucwords($frase);
		}else{
			$resultado=strtoupper($frase);
		}

		return $resultado;
	}

	echo (frase_mayuscula("esto es una prueba"));
 ?>
</body>
</html>