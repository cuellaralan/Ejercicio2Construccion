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

			if (isset($_POST['Materiales']))
			 {
			 	

			 	$largo=$_POST['Largo'];
				$ancho=$_POST['Ancho'];

				$area = $largo*$ancho;

				$bolsasCemento = 2*$area;
				$bolsasCal= 3*$area;

				echo "<br>";
				echo"Se necesitaran: <br>";
				echo"<H1>"."$bolsasCemento"." bolsas de cemento y "."$bolsasCal"." bolsas de cal"."<H1>";
			 }

			 if(isset($_POST['Circulo']))
			 {
			 	$radio = $_POST['Radio'];

			 	$area = M_PI*($radio*$radio) ;
			 	$alambre=$area*3;

			 	echo "<br>";
			 	echo "Se necesitaran: <br>";
			 	echo "<H1>"."$alambre"." metros de alambre"."<H1>";
			 	


			 }


	 	?>

	 	</form>
	 </div>

	</body>
</html>


