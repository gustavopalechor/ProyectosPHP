<!DOCTYPE html>
<html>
<head>
	<title>Objetos</title>
</head>
<body>
	
<?php
	class Coche{

		var $ruedas;
		var $color;
		var $motor;

		function coche(){		//metodo constructor
			$this->ruedas=4;

			$this->color="";

			$this->motor=1600;

		}

		function arrancar(){

			echo "Estoy arrancando <br>";

		}
		function girar(){

			echo "Estoy girando <br>";

		}
		function frenar(){

			echo "Estoy frenando <br>";

		}
		function establece_color($color, $nombre_coche){
			$this->color=$color;

			echo "El color de coche " . $nombre_coche. " es: ".  $this->color ."<br>";
		}
	}

	// $renault=new Coche();
	// $mazda=new Coche();
	// $seat=new Coche();
/*
	$mazda->girar();

	

	$renault->establece_color("Rojo", "Renault");*/


?>
</body>
</html>