<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php

	$secc= $_GET["secc"];
	$n_art= $_GET["n_art"];
	$pre= $_GET["pre"];
	$fec= $_GET["fec"];
	$p_ori= $_GET["p_ori"];
	
	require("datosConexion.php");
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);
	
	

	if(mysqli_connect_errno()){
		echo "Fallo al conectar con la BBDD";
		exit();
	}
	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "utf8");

	$sql="INSERT INTO articulos (seccion, nombreArticulo, PRECIO, FECHA, paisOrigen) VALUES (?,?,?,?,?)";

	$resultado=mysqli_prepare($conexion, $sql);

	$ok=mysqli_stmt_bind_param($resultado, "sssss", $secc, $n_art, $pre, $fec, $p_ori);

	$ok=mysqli_stmt_execute($resultado);

	if ($ok==false) {
		# code...
		echo "Error al ejecutar la consulta";
	}else{
		//$ok=mysqli_stmt_bind_result($resultado, $seccion, $precio, $pais);

		echo "Agregado nuevo registro <br><br>";

		/*while (mysqli_stmt_fetch($resultado)) {
			
			echo $seccion . " " . $precio . " " . $pais . "<br>";

		}*/

		mysqli_stmt_close($resultado);

	}

  ?>


</body>
</html>