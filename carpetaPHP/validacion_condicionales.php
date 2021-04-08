<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>

<?php
	if (isset($_POST["enviando"])) {

			$contra=$_POST["contra_usuario"];
			$nombre=$_POST["nombre_usuario"];
					/*$nombre=$_POST["nombre_usuario"];
					$edad=$_POST["edad_usuario"];
					/*calculo($edad);*/

					/*$resultado= $nombre=="Juan" && $contra=="1234" ? "Puedes acceder" : "No puedes acceder";*/
					/*$resultado = $contra<18 ? "Menor de edad" : ($contra>40 ? ($contra>65 ? "Viejito" : "Maduro") : "joven");

					echo $resultado;*/

					switch ($nombre) {
						case $nombre=="Juan" && $contra=="1234":
							# code...
						echo "Hola Juan";
							break;
						case $nombre=="Maria" && $contra=="1234":
							# code...
						echo "Hola Maria";
							break;
						case $nombre=="Pedro" && $contra=="1234":
							# code...
						echo "Usuario Pedro";
							break;
						
						default:
							# code...
						echo "Usuario no autorizado";
							break;
					}


				}
	/*function calculo($edad){		con una funcion
		
		if ($edad > 0 && $edad < 18) {
			echo "<p class='no_validado'> No valido</p>";
		}
		else if($edad >=18 && $edad<=100){
			echo "<p class='validado'> Valido </p>";

		}
		else{
			echo "<p class='no_validado'> Edad no valida</p>";
		}



	}*/
	
?>