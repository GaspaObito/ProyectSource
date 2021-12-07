<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Buscador en Tiempo Real con AJAX</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<!-- ESTILOS -->
		<link href="css/estilos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		<!-- SCRIPTS


        
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		<!-- SCRIPTS JS-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
Nairo Hernandez Viancha8:23
</head>
	<body>
		<header>
			<div class="alert alert-danger">
			<h2>CONSULTA CON AJAX</h2>
			</div>
		</header>
		<section>
			<input type="text" name="busqueda" id="busqueda" placeholder="Buscar un nombre...">
			<input type="submit" name="boton" id="Buscar" value="Buscar Datos">
		</section>
		<section id="tabla_resultado">
		<!-- -->
		</section>
        <script src="peticion.js"></script>
	</body>
</html>