<!DOCTYPE html>
<html>
<head>
	<title>Insertar informacion en BBDD con formularios</title>
</head>
<body>
<?php
	require("datosConexion.php");
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

	if(mysqli_connect_errno()){
		echo "Fallo al conectar con la BBDD";
		exit();
	}
	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "utf8"); 
	$consulta="INSERT INTO articulos (seccion, nombreArticulo) VALUES ('DEPORTES', 'RAQUETA BADMINTON')";

	$resultados=mysqli_query($conexion,$consulta);

	mysqli_close($conexion);

  ?>
</body>
</html>