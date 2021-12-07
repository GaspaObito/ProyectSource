
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
     <!-- ICONOS -->
     <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' 
    rel='stylesheet'>
  
     <link rel="stylesheet" href="css/estilos_pag_categorias.css">

    <title>categorías y consultorías</title>
</head>
<body>

    <?php
        include_once "plantillas/navbar.php";
    ?>

<!----------------->
<!--INICIO HEADER-->
<!----------------->
<header>        
        <section class="textos-header">
           
            <h1 class="brand"> ¡ Consultas y asesorías confiables ! </h1>

            <h5 class="parrafo_1">
                Aprende y haz de nuestros servicios tu mejor aliado para dar respuesta a tus necesidades con el plus de 
                poderlo recibir desde cualquier lugar del mundo , o bien, donde te sientas comodo.
            </h5>
           
         <section class="img_1">
            <body>
                <img src="imagenes/IMG_P16.png" alt="">
            </body>
         </section>

         <h2 class="brand">Aprendizaje, asesoramiento y respuesta a tu consulta desde cualquier parte...</h2>
       
        </section>

        <section class="img_2">
            <body>
                <img src="imagenes/IMG_P15.png" alt="">
            </body>
         </section>

        <div class="wave" style="height: 100px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-1.97,-11.34 C153.21,73.52 320.82,63.64 502.54,-8.38 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: rgba(24, 26, 25, 0.603);"></path></svg></div>
    
        <!-- Asesorate -->
        <section class="textos-cuerpo">
            <h2 class="text-center-header" class="brand">! Asesorate ¡ </h2>
          <br>
          <br>
          <form class="ButtonAsesorate" action="perfil_usuario/form_registro_usuario.php" class="d-flex">
            <button class="btn btn-outline-light" type="submit">AQUí</button>
          </form>

            <h5 class="parrafo_2" >
                Las asesorías se desarrollan dependiendo en el campo que solicites , son procesos donde tendras un seguimiento
                constante con el profesional o capacitado correspondiente. El objetivo es que al final de la asesoría te lleves
                 una idea completa y concreta de como actuar, defenderte y pensar con base en el asesoramiento que recibiste , 
                 dandole frente a tu necesidad. 
            </h5>

            <section class="textos-header">
            <h2 class="brand">Nunca es tarde para aprender , brindate la oportunidad de tener un aliado capaz de darte soluciones y tranquilidad... </h2>
            </section>

        </section>

        <!-- Consulta -->

        <section class="img_3">
            <body>
                <img src="imagenes/IMG_P17.png" alt="">
            </body>
         </section>
  
        <section class="textos-cuerpo">
            <h2 class="text-center-header" class="brand">! Consulta ¡ </h2>
          <br>
          <br>
          <form class="ButtonConsulta" action="perfil_usuario/form_registro_usuario.php" class="d-flex">
            <button class="btn btn-outline-light" type="submit">AQUÍ</button>
          </form>
          <h5 class="parrafo_3">
               Las consultas se reciben dependiendo del campo en el cual especificaste , el profesional estará en linea, disponible
               y dispuesto para responder lo más pronto posible , favoreciendo tu tiempo y obteniendo una solución concreta, dinámica,
               certíficada y sobre todo , rápida. Cabe resaltar que las consultas tienen un tiempo estimado , mientras llega al profesional
               o capacitado encargado y este hace su estudio de caso , posterior a esto da la respuesta, aunque el proceso asemeja mucho tiempo
               la tecnológia nos da todo para realizarlo lo más pronto posible.   
            </h5>
          
          
        </section>

        <!-- <section class="img_3">
            <body>
                <img src="imagenes/IMG_P12.png" alt="">
            </body>
        </section> -->

  </header>

  
     
 <!----------------->  
 <!--FIN HEADER-->
 <!----------------->
<section>
<?php
include_once "plantillas/footer.php";
?>
</section>

<!-- boostrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>