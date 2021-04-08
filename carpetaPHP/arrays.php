<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>arrays</title>
</head>
<body>

	<?php  
	$semana[]="Lunes";
	$semana[]="Martes";
	$semana[]="Miercoles";
	$semana[]="Jueves";

	/*$semana=array("Lunes", "Martes","Miercoles","Jueves");
	echo $semana[1];*/
	$datos = array("Nombre" => "Juan", "Apellido"=>"Gónzalez", "Edad" =>"21" );
	//$datos = "pepe";

	//identificar un array
	if(is_array($datos)){
	echo $datos["Apellido"];
	}else echo "No es array";
	echo "<br>";

	//Array asociativo recorrerlo
	foreach ($datos as $clave => $valor) {
		echo "$clave le corresponde $valor <br>";
	}

	//Array normal
	for ($i=0; $i < count($semana) ; $i++) { 
		# code...
		echo $semana[$i] ."<br>";
	}

	$semana[]="viernes";

	for ($i=0; $i < count($semana) ; $i++) { 
		# code...
		echo $semana[$i] ."<br>";
	}

	//agregar campo a array asociativo

	$datos["País"]="España";
	foreach ($datos as $clave => $valor) {
		echo "$clave le corresponde $valor <br>";
	}


	//ordenar arrays
	sort($semana);
	for ($i=0; $i < count($semana) ; $i++) { 
		# code...
		echo $semana[$i] ."<br>";
	}

	?>

</body>
</html>