<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso Ingreso UTN FRA</title>

		<!--Estilos-->
		<link rel="stylesheet" type="text/css" href="./estilo.css">
		<link rel="stylesheet" type="text/css" href="./animacion.css">
		<!--final de Estilos-->

		<!--Lógica-Programación-->
		<script type="text/javascript" src="jsFerreteConstruccion.js"></script>
        <!--Final de Lógica-Programación -->
		

		</head>
	<body>
		<div class="CajaUno animated bounceInDown">
			
		
			<form id="FormIngreso" action="./Calcular.php" method="post">

				<input type="text" name="Largo" placeholder="Largo del terreno" id="Largo">
				<input type="text" name="Ancho" placeholder="Ancho del terreno" id="Ancho">
				<input type="text" name="Radio" placeholder="Radio del terreno" id="Radio">
				<br>

				<input type="submit" class ="MiBotonUTN" name="Rectangulo" value="A-Rectangulo de alambre"> </input>
			
				<input type="submit" class="MiBotonUTN" name="Circulo" value="B_ Circulo de alambre"></input>
			
				<input type="submit" class="MiBotonUTN" name="Materiales" value="C- Materiales Contrapiso"></input>
				
			</form>
			
		</div>
		<div class="CajaUno animated bounceInLeft">
			

		</div>

		<div class="CajaEnunciado animated bounceInLeft">
			<h2>Enunciado:</h2>
			
	
				<h3>
					2.	Para el departamento de Construcción:
						<br>A.	 Mostrar la cantidad de alambre a comprar  si se ingresara el largo y el ancho de un terreno rectangular y se debe alambra con tres hilos de alambre.
						<br>B.	Mostrar la cantidad de alambre a comprar  si se ingresara el radio  de un terreno circular y se debe alambra con tres hilos de alambre.
						<br>C.	Para hacer un contrapiso de 1m x 1m se necesitan 2 bolsas de cemento y 3 de cal, debemos mostrar cuantas bolsas se necesitan de cada uno para las medidas del terreno rectangular.



				</h3>
			
		</div>

		<div class="CajaAbajo animated bounceInUp">
			<a  class="MiBotonUTNLinea" onclick="location.href='index.html'" >Men&uacute; ejercicios</a>	
		</div>
	</body>
</html>