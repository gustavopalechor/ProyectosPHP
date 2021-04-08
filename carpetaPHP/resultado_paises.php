<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php

	$pais= $_GET["buscar"];

	require("datosConexion.php");
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);
	
	

	if(mysqli_connect_errno()){
		echo "Fallo al conectar con la BBDD";
		exit();
	}
	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "utf8");

	$sql="SELECT seccion, PRECIO, paisOrigen FROM articulos WHERE paisOrigen=?";

	$resultado=mysqli_prepare($conexion, $sql);

	$ok=mysqli_stmt_bind_param($resultado, "s", $pais);

	$ok=mysqli_stmt_execute($resultado);

	if ($ok==false) {
		# code...
		echo "Error al ejecutar la consulta";
	}else{
		$ok=mysqli_stmt_bind_result($resultado, $seccion, $precio, $pais);

		echo "Artículos encontrados: <br><br>";

		while (mysqli_stmt_fetch($resultado)) {
			
			echo $seccion . " " . $precio . " " . $pais . "<br>";

		}

		mysqli_stmt_close($resultado);

	}

  ?>


</body>
</html>