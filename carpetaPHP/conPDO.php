<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 

	try{
	$base= new PDO('mysql:host=localhost; dbname=pruebas','root', '');//primer argumento direccion del servidor(host) junto al nombre de la base de datos, despues el usuario y por ultimo la contraseña
	echo 'Conexion OK';
	}catch(Exception $e){

		die('Error: ' . $e->GetMessage()); 
		/* Si salta la excion, crea el objeto $e y dentro de las llaves matamos el proceso indandole el mensaje con el metodo del objeto $e GetMessage() */

	}


	?>


</body>
</html>