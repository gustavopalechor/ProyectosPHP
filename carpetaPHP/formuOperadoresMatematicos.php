<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario con Operadores</title>
	
</head>
<body>
	<p>&nbsp;</p>

	<form name="form1" method="post" action="">
		<p>
			<label for="num1"></label>
			<input type="text" name="num1" id="num1">
			<label for="num2"></label>
			<input type="text" name="num2" id="num2">
			<label for="operacion"></label>
			<select name="operacion" id="operacion">
				<option>Suma</option>
				<option>Resta</option>
				<option>Multiplicación</option>
				<option>División</option>
				<option>Modulo</option>
				<option>Incremento</option>
				<option>Decremento</option>
			</select>

		</p>
		<p>
			<input type="submit" name="button" id="button" value="enviar" onclick="prueba">
		</p>
	</form>
		<p>&nbsp;</p>

	<?php
		include("calculadora.php");
		if (isset($_POST["button"])) {
				$numero1=$_POST["num1"];
				$numero2=$_POST["num2"];
				$operacion=$_POST["operacion"];

				calcular($operacion);
			}
		
	?>

</body>
</html>