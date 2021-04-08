<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php

	$usuario= $_POST["usu"];
	$contrasenia= $_POST["contra"];
	
	//$pass_cifrado=password_hash($contrasenia, PASSWORD_DEFAULT); //Encriptamos con esta funcion, el primer parametro es el valor a encriptar y el segundo PASSWORD_DEFAULT es lo mejor ya que no especificamos como se realiza la "sal".
	
	$pass_cifrado=password_hash($contrasenia, PASSWORD_DEFAULT, array("cost"=>12));//con esto le indicamos el coste de crear el cifrado, es decir cuanto mas alto, mas seguro pero gasta mas recursos

	try{

		$base=new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');
		
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$base->exec("SET CHARACTER SET utf8");		
		
		
		$sql="INSERT INTO USUARIOS (USUARIO, PASSWORD) VALUES (:usu, :contra)";
		
		$resultado=$base->prepare($sql);		
		
		
		$resultado->execute(array(":usu"=>$usuario, ":contra"=>$pass_cifrado));		
		
		
		echo "Registro insertado";
		
		$resultado->closeCursor();

	}catch(Exception $e){			
		
		
		echo "Línea del error: " . $e->getLine(). " " . $e->getMessage();
		
	}
?>
</body>
</html>