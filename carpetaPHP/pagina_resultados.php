<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php

	$busqueda=$_GET["buscar"];//almacena en la variable busqueda lo que le pasamos por get


	require("datosConexion.php");
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

	if(mysqli_connect_errno()){//esta funcion salta cuando falla conexion con la base de datos
		echo "Fallo al conectar con la BBDD";
		exit();
	}
	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");//otra manera de conectarse a la base de datos y si falla nos daría un error mas descriptivo

	mysqli_set_charset($conexion, "utf8"); //para acentos y caracteres latinos
	$consulta="SELECT * FROM articulos WHERE nombreArticulo LIKE '%$busqueda%'"; // segundo indicamos la consulta

	$resultados=mysqli_query($conexion,$consulta);//tercero enviamos la consulta a la base de datos y crea una lista virtual con los campos

	//$fila=mysqli_fetch_row($resultados);//con esto recorre la lista virtual linea a linea y la guarda en una array.

	while($fila=mysqli_fetch_array($resultados, MYSQL_ASSOC)){//ejecuta la sentencia y verifica que haya registro en forma lineal(como arriba)
		//echo "<table><tr><td>";

	echo "<form action='actualizar.php' method='get'>";
	echo "<label>Seccion: &nbsp</label><input type='text' name='seccion' value='". $fila['seccion']. "'><br>";
	echo "<label>Nombre: &nbsp</label><input type='text' name='n_art' value='". $fila['nombreArticulo']. "'><br>";
	echo "<label>paisOrigen: &nbsp</label><input type='text' name='p_orig' value='". $fila['paisOrigen']. "'><br>";
	echo "<label>Precio: &nbsp</label><input type='text' name='precio' value='". $fila['PRECIO']. "'><br>";
	echo "<label>Fecha: &nbsp</label><input type='text' name='fecha' value='". $fila['FECHA']. "'><br>";

	echo "<input type='submit' name='enviando' value='Actualizar'>";

	echo "</form>";
	
	echo "<br>";
	}

	mysqli_close($conexion);
  ?>


</body>
</html>