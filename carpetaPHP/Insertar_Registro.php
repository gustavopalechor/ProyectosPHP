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
	$consulta="INSERT INTO articulos (seccion, nombreArticulo, PRECIO, FECHA, paisOrigen) VALUES ('$sec', '$nom', '$pre', '$fec', '$por')";

	$resultados=mysqli_query($conexion,$consulta);

	if ($resultados==false) {
		echo "Error en la consulta";
	}else{
		echo "Registro guardado";
		echo "<br><br>";

		echo "<table><tr><td class='nombre'>Seccion &nbsp</td><td>$sec</td></tr>";
		echo "<tr><td class='nombre'>Nombre &nbsp</td><td>$nom</td></tr>";
		echo "<tr><td class='nombre'>Precio &nbsp</td><td>$pre</td></tr>";
		echo "<tr><td class='nombre'>Fecha &nbsp</td><td>$fec</td></tr>";
		echo "<tr><td class='nombre'>Pais de origen &nbsp</td><td>$por</td></tr></table>";
	}

	mysqli_close($conexion);

  ?>

</body>
</html>