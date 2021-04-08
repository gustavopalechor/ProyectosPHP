<style>
			.resultado{
				color: red;
				font-weight: bold;
				font-size: 32px;

			}

	</style>
<?php 
			
			function calcular($calculo){

				if (!strcmp("Suma", $calculo)) {
					
					global $numero2;
					global $numero1;

					$resultado=$numero1+$numero2;
					echo "<p class='resultado'>El resultado es: $resultado</p>";
				}

				if (!strcmp("Resta", $calculo)) {
					global $numero2;
					global $numero1;
					$resultado=$numero1-$numero2;
					echo "<p class='resultado'>El resultado es: $resultado</p>";
				}

				if (!strcmp("Multiplicación", $calculo)) {
					global $numero2;
					global $numero1;
					$resultado=$numero1*$numero2;
					echo "<p class='resultado'>El resultado es: $resultado</p>";
				}

				if (!strcmp("División", $calculo)) {
					global $numero2;
					global $numero1;
					$resultado=$numero1/$numero2;
					echo "<p class='resultado'>El resultado es: $resultado</p>";
				}

				if (!strcmp("Modulo", $calculo)) {
					global $numero2;
					global $numero1;
					$resultado=$numero1%$numero2;
					echo "<p class='resultado'>El resultado es: $resultado</p>";
				}

				if (!strcmp("Incremento", $calculo)) {
					global $numero1;
					$numero1++;
					echo "<p class='resultado'>El resultado es: $numero1 </p>";
				}

				if (!strcmp("Decremento", $calculo)) {
					global $numero1;

					$numero1--;
					echo "<p class='resultado'>El resultado es: $numero1 </p>";
				}
			}

		 ?>