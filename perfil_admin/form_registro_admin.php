<?php

// include_once 'conexion_bd.php';
require ("../conexion_bd.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
     <!-- boostrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"><link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' 
    rel='stylesheet'>

     <link rel="stylesheet" href="../css/estilos_admin/estilos_form_registro_admin.css">

    <title>Registrarse|ExpressOutsourcing</title>
</head>

<body>

 <!-- As a heading BARRA DE ENCABEZADO--> 
 <nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <span class="navbar-brand mb-2 h1">ExpressOutsourcing | Admin</span>
  </div>
</nav>

    <form action="form_registro_admin_2.php" method="POST" class="formulario">
       
       <h1>Registro de administrador</h1>

<div class="input-contenedor">
            <i class="fas fa-user icon"></i>
             <label for="inputState" class="form-label">Seleccione su tipo de documento</label>

         <select name="tipo_doc_admin" id="TipoDocAdmin" id="inputState" class="form-select">
            <option selected="Cédula de ciudadanía">Cédula de ciudadanía</option>
            <option value="Cédula de extrangería">Cédula de extrangería</option>
            <option value="Contraseña(primera vez)">Contraseña(primera vez)</option>
            <option value="Targeta de identidad">Targeta de identidad</option>
            <option value="Registro civil">Registro civil</option>    
         </select>
        </div>

        <div class="input-contenedor">
           <i class="fas fa-user icon"></i>
           <input name="numero_doc_admin" id="NumDocAdmin" type="text" placeholder="Digíte su número de documento...">
       </div>

        <div class="input-contenedor">
           <i class="fas fa-home icon"></i>
           <input name="nombres_admin" id="NomsAdmin" type="text"  placeholder="Digíte sus nombres...">
       </div>

       <div class="input-contenedor">
           <i class="fas fa-phone icon"></i>
           <input name="apellidos_admin" id="ApellsAdmin" type="text" placeholder="Digíte sus Apellidos...">
       </div>

       <div class="input-contenedor">
           <i class="fas fa-envelope icon"></i>
           <input name="telefono_admin" id="TelefonoAdmin" type="text" placeholder="Digíte su número de teléfono de contacto...">
       </div>

       <div class="input-contenedor">
           <i class="fas fa-key icon"></i>
           <input name="correo_admin" id="CorreoAdmin" type="text" placeholder="Digíte su correo personal...">
       </div>

       <input type="submit" value="Registrate" class="button">
    </form>
       <hr>
            <div class="text-center" class="creado-por">
				<a class="link" href="../pagina_principal.php">volver</a>
			</div>

       <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
       <p>Yá soy Administrador => <a class="link" href="form_sesion_admin.php">Iniciar sesion</a></p>
       <p>Crear cuenta administrador => <a class="link" href="form_cuenta_admin.php">Crear nueva cuenta de administrador </a></p>
        
            </div> 
    </form>
    <hr>

    <!--PIE DE PAGINA-->
     <?php
    
    require_once ("../plantillas/footer.php");

    ?>
    

         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
         integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>