<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- BOOSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    <!-- ICONOS -->
     <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' 
    rel='stylesheet'>

    <link rel="stylesheet" href="css/estilos_input_navbar.css">    

    <title>buscador-ExprOut</title>
   
</head>

<body>

    <!--menu-->

    <header>

    <div class="header-content">

        <div class="logo">
            <h1>ExprOut</h1>
        </div>

        <!-- boton volver -->

        <div class="boton_volver">
            <form action="pagina_principal.php">
                <button class="btn btn-outline-dark" type="submit">volver</button>
            </form>
        </div>

    <div class="menu" id="show-menu">

            </div>

            <!-- icono buscar -->

            <div id="ctn-icon-search">
                <i class="fas fa-search" id="icon-search"></i>
            </div>
           
        </div>
    </header>

    <!-- input -->

    <div id="ctn-bars-search">
        <input type="text" id="inputSearch" placeholder="¿Qué deseas buscar?">
    </div>

    <ul id="box-search">

        <!-- busqueda-campos-psicología-->
        <li><a href="pagina_psicología.php"><i class="fas fa-search"></i></a>psicología</li>
        <li><a href="pagina_psicología.php"><i class="fas fa-search"></i>psicosocial</a></li>
        <li><a href="pagina_psicología.php"><i class="fas fa-search"></i>campos psicología</a></li>
        <li><a href="pagina_psicología.php"><i class="fas fa-search"></i>psico</a></li>
        <li><a href="pagina_psicología.php"><i class="fas fa-search"></i>psicología</a></li>
    
        <!-- busqueda-campos-tecnología-->
        <li><a href="pagina_tecnologia.php"><i class="fas fa-search"></i></a>tecnología</li>
        <li><a href="pagina_tecnologia.php"><i class="fas fa-search"></i>campo tecnológico</a></li>
        <li><a href="pagina_tecnologia.php"><i class="fas fa-search"></i>consulta tecnológica</a></li>
        <li><a href="pagina_tecnologia.php"><i class="fas fa-search"></i>asesoría tecnológica</a></li>
        <li><a href="pagina_tecnologia.php"><i class="fas fa-search"></i>sistemas y tecnología</a></li>
    
        <!-- busqueda-campos-productos naturales-->
        <li><a href="index.html"><i class="fas fa-search"></i></a></li>
        <li><a href="index.html"><i class="fas fa-search"></i>inicio</a></li>
        <li><a href="articulo.html"><i class="fas fa-search"></i>errt432</a></li>
        <li><a href="articulo.html"><i class="fas fa-search"></i>we432</a></li>
        <li><a href="articulo.html"><i class="fas fa-search"></i>ewer2322</a></li>
    
        <!-- busqueda-campos-deportes-->
        <li><a href="index.html"><i class="fas fa-search"></i></a></li>
        <li><a href="index.html"><i class="fas fa-search"></i>inicio</a></li>
        <li><a href="articulo.html"><i class="fas fa-search"></i>errt432</a></li>
        <li><a href="articulo.html"><i class="fas fa-search"></i>we432</a></li>
        <li><a href="articulo.html"><i class="fas fa-search"></i>ewer2322</a></li>
    
        <!-- busqueda-categorías -->
        <li><a href="index.html"><i class="fas fa-search"></i></a></li>
        <li><a href="index.html"><i class="fas fa-search"></i>inicio</a></li>
        <li><a href="articulo.html"><i class="fas fa-search"></i>errt432</a></li>
        <li><a href="articulo.html"><i class="fas fa-search"></i>we432</a></li>
        <li><a href="articulo.html"><i class="fas fa-search"></i>ewer2322</a></li>
    

    
    </ul>

    <div id="cover-ctn-search"></div>

    </div>
    <script src="js/input_navbar.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
</body>

</html>