<?php
class Coche{

		protected $ruedas;
		var $color;
		protected $motor;

		function Coche(){		//metodo constructor
			
			$this->ruedas=4; //Encapsulamiento

			$this->color="";

			$this->motor=1600;

		}

		function get_ruedas(){
			return $this->ruedas;
		}

		function get_motor(){
			return $this->motor;
		}


		function arrancando(){

			echo "Estoy arrancando <br>";

		}
		function girar(){

			echo "Estoy girando <br>";

		}
		function frenar(){

			echo "Estoy frenando <br>";

		}
		function set_color($color, $nombre_coche){
			$this->color=$color;

			echo "El color de coche " . $nombre_coche. " es: ".  $this->color ."<br>";
		}
	}

	/**********************************************************************/

	class Camion extends Coche{

		function Camion(){		//metodo constructor
			$this->ruedas=8;

			$this->color="gris";

			$this->motor=2600;

		}
		function establece_color($color, $nombre_camion){
			$this->color=$color;

			echo "El color del camion " . $nombre_camion. " es: ".  $this->color ."<br>";
		}

		function arrancar(){
			parent::arrancando();
			echo "Camión arrancado <br>";
		}

		
		
	}






  ?>