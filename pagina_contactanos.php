<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <!-- iconos -->
   <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' 
    rel='stylesheet'>
    <!-- boostrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
   <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Raleway:500,600&display=swap" rel="stylesheet">
  
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>

    <link rel="stylesheet" href="css/estilos_pag_contactanos.css">

    <title>Contactanos!ExpressOutsourcing</title>

  </head>
<body>

<?php

include_once 'plantillas/navbar.php' 

?>
<hr>
<br>
<br>


    <!-- MULTIPLE COLLAPSE -->
<center> 
 <p>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="true" aria-controls="multiCollapseExample1">Franquicias y Alianzas</a>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="true" aria-controls="multiCollapseExample2">CEO Inf</button>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="true" aria-controls="multiCollapseExample1 multiCollapseExample2">Express-Outsourcing</button>
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
        FUNPSA.
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body">
       <P> Diego Alejandro Suesca Chavez CEO /
        Brayan Moises Patiño Cuenca SCRUM MASTER/
        Jhon Deibi Pulgarin Perez ADMIN 1/
        Jose Miguel Alvarez Fagua ADMIN 2.
        </P>
      </div>
    </div>
  </div>
</div>
</center> 

<!--PIE DE PAGINA-->
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
				<a href="pagina_principal.php" class="link">Express-Outsourcing</a>
			</div>
		</footer>

     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>        
</body>
</html>