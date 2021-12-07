<?php
// include_once 'conexion_bd.php';
require ("../conexion_bd.php");


// CONSULTA PARA EL SELECT ID DE CUENTA PROFESIONAL
$sentencia_profesional = $conexion->prepare("SELECT * FROM cuenta_profesional");
$sentencia_profesional->execute();

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
   
     <link rel="stylesheet" href="../css/estilos_profesional/estilos_form_sesion_profesional.css">

    <title>Iniciar sesión|ExpressOutsourcing</title>
</head>

<body>

 <!-- As a heading BARRA DE ENCABEZADO--> 
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <span class="navbar-brand mb-2 h1">ExpressOutsourcing | Professions</span>
  </div>    
</nav>     

    <form action="validaciones/validacion_form_sesion_profesional.php" method="POST" class="formulario">
       
       <h1>Iniciar sesión</h1>

       <div class="contenedor"> 

       <div class="input-contenedor">
            <i class="fas fa-user icon"></i>
             <label for="inputState" class="form-label">Elija el ID de su cuenta profesional:</label>
                <select name="id_cuenta_prof" id="IDCP" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected> Selecciona </option>
                    <?php
                          foreach ($sentencia_profesional as $r) 
                                    {
                                        echo "<option value=".$r[0].">".$r[0]."</option>";
                                    }        
                    ?>
                </select>
       </div>
             

       <div class="input-contenedor">
           <i class="fas fa-envelope icon"></i>
           <input  name="correo_prof" id="CorreoProf" type="text"placeholder="Digíte su correo profesional...">
       </div>

       <div class="input-contenedor">
           <i class="fas fa-key icon"></i>
           <input  name="clave_prof" id="ClaveProf" type="password"  placeholder="Digíte su clave o contraseña profesional...">
       </div>
    
       <input type="submit" value="Iniciar sesión" class="button">
       <hr>
<div class="text-center" class="creado-por">
				<a class="link" href="../pagina_principal.php">volver</a>
</div>
    <p>Al crear tu nueva cuenta, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
    <p>¿Nó haces parte de nuestro equipo de profesionales? <a class="link" href="form_registro_profesional.php">Registrate</a></p>
    <p>¿Nó tienes una cuenta profesional? <a class="link" href="form_cuenta_profesional.php">Crear cuenta profesional </a></p>
        
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