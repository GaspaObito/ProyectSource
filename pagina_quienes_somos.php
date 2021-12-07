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

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Raleway:500,600&display=swap" rel="stylesheet">

    <!-- MATERIALIZE. CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      
    <!-- CSS Estilos -->
    <link rel="stylesheet" href="css/estilos_pagina_quienes_somos.css">

    <title>inicio | profession</title>

</head>
<body>

<?php

include_once 'plantillas/navbar.php' 

?>

<!-- Carrucel -->

<div class="container">
        <div class="row">
            <div class="col s12">
                <h1 class="center-align titulo">Express Outsourcing</h1>

                <div class="carousel center-align">
                    <div class="carousel-item">
                        <h2 class="subtitulo">Orígen</h2>
                        <div class="linea-division"></div>
                        <p class="sabor">GLASEADOS</p>
                        <img src="img/dona-01.jpg" alt="">
                    </div>

                    <div class="carousel-item">
                        <h2 class="subtitulo">Propósito</h2>
                        <div class="linea-division"></div>
                        <p class="sabor">chocolate</p>
                        <img src="img/pastel-01.jpg" alt="">
                    </div>

                    <div class="carousel-item">
                        <h2 class="subtitulo">Metodología</h2>
                        <div class="linea-division"></div>
                        <p class="sabor">cereza</p>
                        <img src="img/muffins-01.jpg" alt="">
                    </div>

                    <div class="carousel-item">
                        <h2 class="subtitulo">Fundadores</h2>
                        <div class="linea-division"></div>
                        <p class="sabor">avellanas</p>
                        <img src="img/muffins-02.jpg" alt="">
                    </div>

                    <div class="carousel-item">
                        <h2 class="subtitulo">Vision & Mision</h2>
                        <div class="linea-division"></div>
                        <p class="sabor">vainilla</p>
                        <img src="img/muffins-03.jpg" alt="">
                    </div>

                    <div class="carousel-item">
                        <h2 class="subtitulo">Organización</h2>
                        <div class="linea-division"></div>
                        <p class="sabor">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et alias assumenda amet quo magnam, dolores consectetur nisi magni nostrum es
                                         unde eos sapiente accusantium corrupti voluptates quam ipsam deleniti atque.
                                         unde eos sapiente accusantium corrupti voluptates quam ipsam deleniti atque.
                                         unde eos sapiente accusantium corrupti voluptates quam ipsam deleniti atque.
                                         unde eos sapiente accusantium corrupti voluptates quam ipsam deleniti atque.
                                         unde eos sapiente accusantium corrupti voluptates quam ipsam deleniti atque.
                                         unde eos sapiente accusantium corrupti voluptates quam ipsam deleniti atque.
                                         unde eos sapiente accusantium corrupti voluptates quam ipsam deleniti atque.
                                         unde eos sapiente accusantium corrupti voluptates quam ipsam deleniti atque.
                                        </p>
                        <img src="img/pastel-02.jpg" alt="">
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php
        include_once "plantillas/footer.php";
    ?>

<!--MATERIALIZE JS JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<!-- JS Main -->
<script src="js/carrucel_main.js"></script>

<!-- boostrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>