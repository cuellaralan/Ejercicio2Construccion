<!DOCTYPE html>
<html>
	<head>
		<title>Resultado de materiales: </title>
		<meta charse="utf-8">
		<link rel="stylesheet" type="text/css" href="./estilo.css">
		<link rel="stylesheet" type="text/css" href="./animacion.css">
	</head>
	<body>

	<div class="CajaUno animated bounceInDown">
		<form >

		<?php 

			

			if(isset($_POST['Rectangulo']))
			{

				$largo=$_POST['Largo'];
				$ancho=$_POST['Ancho'];

				$alambre = (($largo*2)+($ancho*2))*3;
				echo "<br>";
				echo"se necesitaran: ";
				echo "<H1>"."$alambre"."mts de alambre"."<H1>";
			}


	 	?>

	 	</form>
	 </div>

	</body>
</html>


