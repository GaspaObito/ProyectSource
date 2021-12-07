<?php
//print_r($_GET);

include "conexionPDOEXP2.php";

$datoactualiza=$_POST['datoactualiza'];//SE CREA LA TRANSFORMACION $datoactualiza PARA ALMACENAR DATO datoactualiza QUE VIAJA VIA POST DEL FORMULARIO PRINCIPAL
$sentencia = $conexion->prepare("SELECT * FROM datos WHERE cedula='$datoactualiza'");
// Especificamos el fetch mode antes de llamar a fetch()
$sentencia->setFetchMode(PDO::FETCH_ASSOC);
// Ejecutamos
$sentencia->execute();
// Mostramos los resultados
while ($row = $sentencia->fetch()){
     
    $datoactualiza=$row['cedula'];
    $nom=$row["nombre"];
    $dir=$row["direccion"];
    $tel=$row["telefono"];  
   }

?>

  
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Actualizar Datos</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="POST" action="actualizarPDOEXP2.php">
                    <fieldset>
                        <legend class="text-center header">Actualizar</legend>
                        <br>
                        <br>
                        <div class="form-group">
                            <input name="cedula" readonly type="text" value="<?php echo $datoactualiza ?>" class="form-control" placeholder="Cedula">
                        </div>
                        <br>
                        <div class="form-group">
                            <input  name="nombre" type="text" value="<?php echo $nom ?>" placeholder="Nombre" class="form-control">
                        </div>
                            <br>
                        <div class="form-group">
                            <input  name="direccion" type="text" value="<?php echo $dir ?>"  placeholder="Dirección" class="form-control">
                        </div>
                        <br>
                        <div class="form-group">
                            <input  name="telefono" type="text" value="<?php echo $tel ?>"  placeholder="Telefono" class="form-control">
                        </div>
                        <!--<input type="hidden" name="oculto" value="1"> INPUT PARA LA VALIDACIÓN DE OCULTO-->
                        <br> 
                        <div class="col-md-12 text-center">
                        <button type="submit" value="Actualizar"  class="btn btn-success" >Actualizar</button>
                        </div>
                    </fieldset>
                </form>
                <!--FIN INSERT***********************-->
            </div>
        </div>
    </div>
</div>
</body>
</html>    