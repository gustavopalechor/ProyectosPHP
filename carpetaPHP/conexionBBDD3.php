<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Conexion BBDD</title>
	<style>
		table{
			width: 50%;
			border: 3px dotted #FF0000;
			margin: auto;
		}
	</style>
</head>
<body>
<?php
	require("datosConexion.php");//es la conexion a la base de datos que hemos introducido en otro archivo para poder utilizarlo en otros proyectos

	//$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre); //primero creamos conexion con la base de datos
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

	if(mysqli_connect_errno()){//esta funcion salta cuando falla conexion con la base de datos
		echo "Fallo al conectar con la BBDD";
		exit();
	}
	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");//otra manera de conectarse a la base de datos y si falla nos daría un error mas descriptivo

	mysqli_set_charset($conexion, "utf8"); //para acentos y caracteres latinos
	$consulta="SELECT * FROM articulos WHERE paisOrigen='España'"; // segundo indicamos la consulta

	$resultados=mysqli_query($conexion,$consulta);//tercero enviamos la consulta a la base de datos y crea una lista virtual con los campos

	//$fila=mysqli_fetch_row($resultados);//con esto recorre la lista virtual linea a linea y la guarda en una array.

	while($fila=mysqli_fetch_array($resultados, MYSQL_ASSOC)){//ejecuta la sentencia y verifica que haya registro en forma lineal(como arriba)
		echo "<table><tr><td>";
	echo $fila['seccion'] . "</td><td>";
	echo $fila['nombreArticulo'] . "</td><td>";
	echo $fila['paisOrigen'] . "</td></tr></table>";
	echo "<br>";
	}

	mysqli_close($conexion);
  ?>
</body>
</html>