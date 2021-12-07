<!DOCTYPE html>
<html lang="en">
<head>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" 
    crossorigin="anonymous">
    
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
	
    <link rel="stylesheet" href="css/estilos_sitio_web.css">


    <title>ExpressOutsourcing | Sitio-Web</title>

</head>
<body>
<!-- As a heading BARRA DE ENCABEZADO-->
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Express-Outsorcing</span>
  </div>
</nav>

<!--PORTAFOLIO-->

<div class="contenedor">
		<header>
			<div class="logo">
				<h1>Asesorías y consultorías</h1>
				<p>¿ En qué quieres instruirte hoy ?</p>
			</div>
			<form action="">
				<input type="text" class="barra-busqueda" id="barra-busqueda" placeholder="Buscar">
			</form>
			<div class="categorias" id="categorias">
				<a href="#" class="activo">Todos</a>
				<a href="#">Psicologia</a>
				<a href="#">Tecnologia</a>
				<a href="#">Productos naturales</a>
				<a href="#">Deportes</a>
			</div>
		</header>
         
		<section class="grid" id="grid">
             
			<div class="item" 
				 data-categoria="psicologia"
				 data-etiquetas="familia recursos humanos infancia mente pensamiento"
				 data-descripcion="1.- La salud mental es una prioridad , la cual debe cuidarse y preservarse siempre.."			
			>
			
				<div class="item-contenido">
					<img src="imagenes/IMG_P6.png" alt="">
					<button>Visitar</button>
				</div>
			</div>
            
			<div class="item"
				 data-categoria="tecnologia"
				 data-etiquetas="computador navegación sistemas software hadware redes "
				 data-descripcion="2.- Lorem ipsum dolor sit amet consectetur."
			>
				<div class="item-contenido">
					<img src="imagenes/tecnologia/img_tec_13.jpeg" alt="">
				</div>
			</div>
          
			<div class="item"
				 data-categoria="productos naturales"
				 data-etiquetas="alimentación dieta saludable comida vegetales"
				 data-descripcion="3.- Lorem ipsum dolor sit amet consectetur."
			>
				<div class="item-contenido">
					<img src="imagenes/productos_naturales/img_product_nat_7.png" alt="">
				</div>
			</div>
         
			<div class="item"
				 data-categoria="deportes"
				 data-etiquetas="ejercicio esfuerzo deporte mujer deportista ejercitar entrenamiento"
				 data-descripcion="4.- Lorem ipsum dolor sit amet consectetur."
			>
				<div class="item-contenido">
					<img src="imagenes/deporte/img_depor_7.jpg" alt="">
				</div>
			</div>

			<div class="item"
				 data-categoria="psicologia"
				 data-etiquetas="familia mente drogas drogadiccion depresion consumo vicio caso"
				 data-descripcion="5.- Lorem ipsum dolor sit amet consectetur."
			>
				<div class="item-contenido">
					<img src="imagenes/psicologia/img_psico_9.jpg" alt="">
				</div>
			</div>

			<div class="item"
				 data-categoria="psicologia"
				 data-etiquetas="ansiedad bipolaridad miedos publico emociones problema expresion"
				 data-descripcion="6.- Lorem ipsum dolor sit amet consectetur."
			>
				<div class="item-contenido">
					<img src="imagenes/psicologia/img_psico_3.png" alt="">
				</div>
			</div>

			<div class="item"
				 data-categoria="productos naturales"
				 data-etiquetas="mujer mascara cosmeticos crema facial"
				 data-descripcion="7.- Lorem ipsum dolor sit amet consectetur."
			>
				<div class="item-contenido">
					<img src="imagenes/productos_naturales/img_product_nat_5.jpg" alt="">
				</div>
			</div>

			<div class="item" 
				 data-categoria="tecnologia"
				 data-etiquetas="red social facebook apps aplicaciones celular movil relaciones"
				 data-descripcion="8.- Lorem ipsum dolor sit amet consectetur."
			>
				<div class="item-contenido">
					<img src="imagenes/tecnologia/img_tec_6.jpg" alt="">
				</div>
			</div>

			<div class="item"
				 data-categoria="deportes"
				 data-etiquetas="box boxeo gimnasio ejercitarse fuerza pelea hombre"
				 data-descripcion="9.- Lorem ipsum dolor sit amet consectetur.
				 	"
			>
				<div class="item-contenido">
					<img src="imagenes/deporte/img_depor_1.jpg" alt="">
				</div>
			</div>
		</section>
<!-- ******************************************* -->
		<section class="overlay" id="overlay">
			<div class="contenedor-img">
				<button id="btn-cerrar-popup"><i class="fas fa-times"></i></button>
				<img src="" alt="">
			</div>
			<p class="descripcion"></p>
		</section>

		<footer class="contenedor">
			<div class="redes-sociales">
				<div class="contenedor-icono">
					<a href="https://icons.getbootstrap.com/" target="_blank" class="twitter">
                    <i class="fa fa-whatsapp"></i>
					</a>
				</div>
				<div class="contenedor-icono">
					<a href="https://icons.getbootstrap.com/" target="_blank" class="facebook">
                    <i class="fab fa-facebook-f"></i>
					</a>
				</div>
				<div class="contenedor-icono">
					<a href="https://icons.getbootstrap.com/" target="_blank" class="instagram">
                    <i class="fab fa-instagram"></i>
					</a>
				</div>
			</div>
			<div class="text-center" class="creado-por">
				<a href="pagina_principal.php">Express-Outsorcing</a>
			</div>
		</footer>
	</div>

	<script src="https://unpkg.com/web-animations-js@2.3.2/web-animations.min.js"></script>
	<script src="https://unpkg.com/muuri@0.8.0/dist/muuri.min.js"></script>
	
    <script src="js/main.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
crossorigin="anonymous"></script>
</body>
</html>