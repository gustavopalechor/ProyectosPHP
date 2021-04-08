<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 
	include ("conexion.php");

	$id=$_GET["Id"];


	$base->query("DELETE  FROM datos_usuarios WHERE ID='$id'");

	header("location:index.php");


	?>



</body>
</html>