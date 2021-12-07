<?php
// include_once 'conexion_bd.php';
require ("../conexion_bd.php");

// CONSULTA PARA EL SELECT Y FOREIGN KEY
$sentencia = $conexion->prepare("SELECT * FROM profesional");
$sentencia->execute();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
     integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
     <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' 
    rel='stylesheet'>
   
     <link rel="stylesheet" href="../css/estilos_profesional/estilos_form_cuenta_profesional.css">

    <title>cuenta profesional|ExpressOutsourcing</title>
</head>

<body>

 <!-- As a heading BARRA DE ENCABEZADO--> 
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <span class="navbar-brand mb-2 h1">ExpressOutsourcing | professions</span>
  </div>    
</nav>     

    <form action="form_cuenta_profesional_2.php" method="POST" class="formulario">
       
       <h1>Crear cuenta</h1>

       <div class="contenedor">       

       <div class="input-contenedor">
           <i class="fas fa-envelope icon"></i>
           <input type="text" name="id_cuenta_prof" id="IdCuentaProf" placeholder="Digite un ID de cuenta...">
       </div>

       <div class="input-contenedor">
           <i class="fas fa-user icon"></i>
           <input type="text" name="correo_nuevo_prof" id="CorreoNuevoProf" placeholder="Digite un nuevo correo profesional...">
       </div>

       <div class="input-contenedor">
           <i class="fas fa-key icon"></i>
           <input type="password" name="clave_prof" id="ClaveProf" placeholder="Digite una contraseña o clave...">
       </div>

       <div class="input-contenedor">
            <i class="fas fa-user icon"></i>
             <label for="inputState" class="form-label">Selecciona tu id profesional :</label>
       
        <select name="id_prof_foranea" id="Idprof1" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
        <option selected="Seleccionar">Seleccionar</option>
           <?php
            
                foreach ($sentencia as $r) {
                    echo "<option value=".$r[0].">".$r[0]."</option>";
                }        
            ?>

        </select>
        </div>
    
       <input type="submit" value="Crear cuenta" class="button">
       <hr>
       <div class="text-center" class="creado-por">
				<a class="link" href="../pagina_principal.php">volver</a>
			</div>

            <p>Al crear tu nueva cuenta, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
            <p>¿Nó haces parte de nuestro equipo de profesionales? <a class="link" href="form_registro_profesional.php">Registrate</a></p>
            <p>¿yá ere uno de nuestros profesionales? <a class="link" href="form_sesion_profesional.php">Iniciar sesion</a></p>

       </div> 
    </form>
<hr>
<br>
    <!--PIE DE PAGINA-->
    <?php
    
    require_once ("../plantillas/footer.php");

    ?>

         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
         integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>