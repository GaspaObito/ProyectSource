<?php
// include_once 'conexion_bd.php';
require ("../conexion_bd.php");


// CONSULTA PARA EL SELECT ID DE CUENTA ADMIN
$sentencia_admin = $conexion->prepare("SELECT * FROM cuenta_admin");
$sentencia_admin->execute();

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
   
     <link rel="stylesheet" href="../css/estilos_form_sesion.css">

    <title>Iniciar sesión|ExpressOutsourcing</title>
</head>

<body>

 <!-- As a heading BARRA DE ENCABEZADO--> 
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <span class="navbar-brand mb-2 h1">ExpressOutsourcing | Admin</span>
  </div>    
</nav>     

    <form action="validaciones/validacion_form_sesion_admin.php" method="POST" class="formulario">
       
       <h1>Iniciar sesión</h1>

       <div class="contenedor"> 

       <div class="input-contenedor">
            <i class="fas fa-user icon"></i>
             <label for="inputState" class="form-label">Elija el ID de su cuenta de administración:</label>
                <select name="Id_c_admin" id="IDC" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected> Selecciona </option>
                    <?php
                          foreach ($sentencia_admin as $r) 
                                    {
                                        echo "<option value=".$r[0].">".$r[0]."</option>";
                                    }        
                    ?>
                </select>
       </div>
             

       <div class="input-contenedor">
           <i class="fas fa-envelope icon"></i>
           <input  name="nomb_admin" id="nom_admin" type="text"placeholder="Digíte su nombre de administración...">
       </div>

       <div class="input-contenedor">
           <i class="fas fa-key icon"></i>
           <input  name="clave_admin" id="clav_admin" type="password"  placeholder="Digíte su clave o contraseña de su cuenta administradora...">
       </div>
    
       <input type="submit" value="Iniciar sesión" class="button">
       <hr>
       <br>
       <p class="validacion">Verifica tu ID de cuenta, usuario o contraseña : Error de autenticación</p>
       <br>
<div class="text-center" class="creado-por">
				<a class="link" href="../pagina_principal.php">volver</a>
</div>
       <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
       <p>Registro administración => <a class="link" href="form_registro_admin.php">Registrate</a></p>
       <p>Crear cuenta administrador => <a class="link" href="form_cuenta_admin.php">Crear nueva cuenta de administrador </a></p>
        
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