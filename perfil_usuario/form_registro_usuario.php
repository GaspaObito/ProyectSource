<?php
// include_once 'conexion_bd.php';
require ("../conexion_bd.php");

// CONSULTA PARA EL SELECT CATEGORÍAS
$sentencia_categorias = $conexion->prepare("SELECT * FROM areas");
$sentencia_categorias->execute();

// CONSULTA PARA EL SELECT CAMPOS DE ACCION
$sentencia_campos = $conexion->prepare("SELECT * FROM asignaturas");
$sentencia_campos->execute();
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

     <link rel="stylesheet" href="../css/estilos_usuario/estilos_form_registro_usuario.css">

    <title>Registrarse|ExpressOutsourcing</title>
</head>

<body>

 <!-- As a heading BARRA DE ENCABEZADO--> 
 <nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <span class="navbar-brand mb-2 h1">ExpressOutsourcing | User</span>
  </div>
</nav>

    <form action="form_registro_usuario_2.php" method="POST" class="formulario">
       
       <h1>Registro de usuario</h1>

       <div class="contenedor"> 
       <div class="input-contenedor">
           <i class="fas fa-asterisk icon"></i>
           <input name="id_usu" id="IdUser" type="text" placeholder="Digíte un id de usuario...">
       </div>

<div class="input-contenedor">
            <i class="fas fa-user icon"></i>
             <label for="inputState" class="form-label">Seleccione su tipo de documento</label>

         <select name="tipo_doc" id="Categ" id="inputState" class="form-select">
            <option selected="Cédula de ciudadanía">Cédula de ciudadanía</option>
            <option value="Cédula de extrangería">Cédula de extrangería</option>
            <option value="Contraseña(primera vez)">Contraseña(primera vez)</option>
            <option value="Targeta de identidad">Targeta de identidad</option>
            <option value="Registro civil">Registro civil</option>    
         </select>
        </div>

        <div class="input-contenedor">
           <i class="fas fa-user icon"></i>
           <input name="numero_doc" id="NumDoc" type="text" placeholder="Digíte su número de documento...">
       </div>

        <div class="input-contenedor">
           <i class="fas fa-home icon"></i>
           <input name="nombre_s" id="Noms" type="text"  placeholder="Digíte sus nombres...">
       </div>

       <div class="input-contenedor">
           <i class="fas fa-phone icon"></i>
           <input name="apellido_s" id="Apells" type="text" placeholder="Digíte sus Apellidos...">
       </div>

       <div class="input-contenedor">
           <i class="fas fa-envelope icon"></i>
           <input name="telefon_o" id="Telef" type="text" placeholder="Digíte su número de teléfono de contacto...">
       </div>

       <div class="input-contenedor">
           <i class="fas fa-key icon"></i>
           <input name="direccio_n" id="Direcc" type="text" placeholder="Digíte la dirección en donde reside actualmente...">
       </div>

       <div class="input-contenedor">
           <i class="fas fa-key icon"></i>
           <input name="corre_o" id="Corr" type="text" placeholder="Digíte su correo personal...">
       </div>

       <div class="input-contenedor">
            <i class="fas fa-user icon"></i>
             <label for="inputState" class="form-label">¿ En cuál categoría le gustaría interactuar ?</label>
                <select name="categori_a" id="Categ" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected> Selecciona </option>
                    <?php
                          foreach ($sentencia_categorias as $r) 
                                    {
                                        echo "<option value=".$r[0].">".$r[0]."</option>";
                                    }        
                    ?>
                </select>
       </div>

       <div class="input-contenedor">
            <i class="fas fa-user icon"></i>
             <label for="inputState" class="form-label">¿ En cuál campo le gustaría interactuar ?</label>
                <select name="campos_de_acc" id="CamposAcc" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected> Selecciona </option>
                    <?php
                          foreach ($sentencia_campos as $r) 
                                    {
                                        echo "<option value=".$r[0].">".$r[0]."</option>";
                                    }        
                    ?>
                </select>
       </div>

       <input type="submit" value="Registrate" class="button">
    </form>
       <hr>
            <div class="text-center" class="creado-por">
				<a class="link" href="../pagina_principal.php">volver</a>
			</div>

       <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
       <p>¿yá haces parte de nosotros? <a class="link" href="form_sesion_usuario.php">Iniciar sesion</a></p>
       <p>¿Nó tienes una cuenta de usuario? <a class="link" href="form_cuenta_usuario.php">Crear mi cuenta </a></p>
        
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