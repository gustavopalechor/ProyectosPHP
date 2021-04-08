<!DOCTYPE html>
<html>
<head>
	<title>Strings</title>

	<style>
		.resaltar{
			color: red;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<?php

		$variable1="Casa";
		$variable2="CASA";

		$resultado=strcmp($variable1, $variable2);
		if (!$resultado) {
			echo "No coinciden";
		}
		else{
			echo "coinciden";
		}

		

	?>

</body>
</html>