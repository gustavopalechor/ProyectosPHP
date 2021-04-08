<!DOCTYPE html>
<html>
<head>
	<title>Excepciones</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
	try{
	$base= new PDO('mysql:host=localhost; dbname=pruebas','root', '');
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$base->exec("SET CHARACTER SET utf8"); //para indicar que utilizaremos juego de caracteres utf8

	$sql="SELECT nombreArticulo, seccion, PRECIO, paisOrigen FROM articulos WHERE nombreArticulo = ?";

	$resultado=$base->prepare($sql);

	$resultado->execute(array("Destornillador"));

	while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {
		
		echo "Nombre Articulo: " . $registro['nombreArticulo'] .  " Seccion: " . $registro['seccion'] . " Precio: " . $registro['PRECIO'] . " Pais de origen: " . $registro['paisOrigen'] . "<br>";
	}

	$resultado->closeCursor();

	
	}catch(Exception $e){

		die('Error: ' . $e->GetMessage()); 
		

	}
	finally {
		$base=null;
	}
	



	?>

</body>
</html>