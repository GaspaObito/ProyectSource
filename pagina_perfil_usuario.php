<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ExprOut | perfil-usuario</title>

 <?php
    include_once("plantillas/head_links.php");
 ?>
    
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

       <?php
            include_once("plantillas/logo.php");
       ?>

        <!-- Navbar superior -->
        <nav class="main-header navbar navbar-expand navbar-blue navbar-dark">

            <!-- Links izquierdos del navbar -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="pagina_perfil_usuario.php" class="nav-link">Inicio</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="https://meet.google.com" class="nav-link">Conferencias</a>
                </li>
            </ul>

            <!-- Links PARTE derecha del navbar -->

            <ul class="navbar-nav ml-auto">
                <!--ml-auto pone los items a la derecha del navbar-->
                
                <!-- Navbar  Search LUPA-BUSCAR---------------------->
                <?php
                    include_once("plantillas/search_perfil_usuario.php");
                ?>

                 <!-- Mensajes---------------------------------------->
                 <?php
                    include_once("plantillas/mensajes.php");
                ?>

                 <!-- Notificaciones---------------------------------->
                 <?php
                    include_once("plantillas/notificaciones.php");
                ?>
                
                 <!-- Pantalla Completa---------------------------------->
                 <?php
                    include_once("plantillas/pantalla_completa.php");
                ?>
               
                <!-- boton icon menu-costado-derecho -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar Termino navbar-->

        <!-- MENU COSTADO IZQUIERDO--------------- -->
        <?php
            include_once("plantillas/menu_costado_izquierdo.php");
        ?>
         <!--/. MENU COSTADO IZQUIERDO--------------- -->

        <!-- Content Wrapper. CONTENIDO DE LA PÁGINA -> INICIO TABLERO -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Tablero</h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="perfil_usuario/form_sesion_usuario.php">Salir</a></li>
                                <li class="breadcrumb-item active"><a href="pagina_principal.php">web page</a></li>
                            </ol>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

<!-- PLANTILLA CAJITAS ********** -->
<?php
include_once ("plantillas/cajitas_tablero.php");
?>
<!-- /.PLANTILLA CAJITAS ********** -->
        </div>
        <!-- /.content-wrapper -->

        <!-- DERECHOS DE AUTOR -->
        <?php
        include_once("plantillas/derechos_autor.php");
        ?>

        <!-- Control Sidebar CONTROL PARA MENU DERECHO MODO OSCURO -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- El contenido de la barra lateral de control va aquí -->
        </aside>
        <!-- /.control-sidebar TERMINO  -->
    </div>
    <!-- ./wrapper TERMINO -->

    <!-- SCRIPTS -->
    <?php
        include_once("plantillas/scripts.php");
    ?>
</body>

</html>