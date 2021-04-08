<!DOCTYPE html>
<html>
<head>
	<title>Insertar registros</title>
	<style>
		.nombre{
			font-weight: bold;
		}

	</style>
</head>
<body>
<?php

	$sec=$_GET["seccion"];
	$nom=$_GET["n_art"];
	$pre=$_GET["precio"];
	$fec=$_GET["fecha"];
	$por=$_GET["p_orig"];
	require("datosConexion.php");
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

	if(mysqli_connect_errno()){
		echo "Fallo al conectar con la BBDD";
		exit();
	}
	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "utf8"); 
	$consulta="DELETE FROM articulos WHERE nombreArticulo='$nom'";

	$resultados=mysqli_query($conexion,$consulta);

	if ($resultados==false) {
		echo "Error en la consulta";
	}else{
		echo "Registro eliminado";
		
	}

	mysqli_close($conexion);

  ?>

</body>
</html>