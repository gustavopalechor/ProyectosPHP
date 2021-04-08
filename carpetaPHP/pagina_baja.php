<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php

	

	require("datosConexion.php");
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);
	$usuario= mysqli_real_escape_string($conexion, $_GET["usu"]);
	$contra= mysqli_real_escape_string($conexion, $_GET["contra"]);
	

	if(mysqli_connect_errno()){
		echo "Fallo al conectar con la BBDD";
		exit();
	}
	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "utf8");

	$consulta="DELETE FROM USUARIOS WHERE USUARIO='$usuario' AND CONTRASEÑA='$contra'";
	echo "$consulta <br><br>";
	
	mysqli_query($conexion,$consulta);

	if(mysqli_affected_rows($conexion)>0){//si se ha realizado algun cambio en las tablas la funcion devuelve mas de 0
		echo "Baja procesada";
	}else{
		echo "No se ha encontrado la informacion";
	}

	
	mysqli_close($conexion);
  ?>


</body>
</html>