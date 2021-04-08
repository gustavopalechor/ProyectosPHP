<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>conexion a BBDD con POO</title>
</head>
<body>
	<?php 
	$conexion= new mysqli("localhost", "root", "", "pruebas");//el alojamiento, usuario, contraseña, basedeDatos

	if ($conexion->connect_errno) {
		echo "Fallo de conexion" . $conexion->connect_errno ;
	}

	//mysqli_set_charset($charset, "utf8");
	$conexion->set_charset("utf8"); // para expecificar el tipo de caracteres


	$sql="SELECT * FROM articulos";

	//$resultados=mysqli_query($conexion, $sql);
	$resultados=$conexion->query($sql); //query es un metodo del objeto

	if ($conexion->errno) {
		die($conexion->error);
	}

	//while ($fila=mysqli_fetch_arrow($resultados, MYSQLI_ASSOC)) {
		# code...
	while ($fila=$resultados->fetch_assoc()) {
		# code...
		echo "<table><tr><td>";
	echo $fila['seccion'] . "</td><td>";
	echo $fila['nombreArticulo'] . "</td><td>";
	echo $fila['paisOrigen'] . "</td></tr></table>";
	echo "<br>";
	}

	//mysqli_close($conexion);

	$conexion->close();
	?>
</body>
</html>