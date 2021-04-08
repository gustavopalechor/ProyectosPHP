<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pagina de busqueda y resultado en el mismo archivo</title>
	<?php
	function ejecuta_consulta($labusqueda){

	
	require("datosConexion.php");
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

	if(mysqli_connect_errno()){
		echo "Fallo al conectar con la BBDD";
		exit();
	}
	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "utf8"); 
	$consulta="SELECT * FROM articulos WHERE nombreArticulo LIKE '%$labusqueda%'";

	$resultados=mysqli_query($conexion,$consulta);

	while($fila=mysqli_fetch_array($resultados, MYSQL_ASSOC)){
		echo "<table><tr><td>";
	echo $fila['seccion'] . "</td><td>";
	echo $fila['nombreArticulo'] . "</td><td>";
	echo $fila['paisOrigen'] . "</td></tr></table>";
	echo "<br>";
	}

	mysqli_close($conexion);
}
  ?>
</head>
<body>
	<?php 
	$miBusqueda=$_GET["buscar"];

	$mipag=$_SERVER["PHP_SELF"];

	if($miBusqueda!=NULL){
		ejecuta_consulta($miBusqueda);
	}else{
		echo ("<form action='". $mipag ."' method='get'>
		 <label>Buscar: <input type='text' name='buscar'></label>
		<input type='submit' name='enviando' value='dale'>
		</form>");
	}



	?>
</body>
</html>