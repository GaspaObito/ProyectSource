<?php
//SELECT PARA OBTENER MIS DATOS
include 'conexionPDOEXP2.php';
$sentencia = $conexion->query("SELECT * FROM datos;");
$express = $sentencia->fetchAll(PDO::FETCH_OBJ); //fetchAll(PDO::FETCH_OBJ); ES UN FORMATO DE OBJETO
//print_r($express);//Con print_r yo imprimo todos los valores que tengan una variable
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Validador-Registro</title>
</head>
<body>

<!--INICIO INSERT***********************-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="POST" action="insertarPDOEXP2.php">
                    <fieldset>
                        <legend class="text-center header">Validador de registro</legend>
                        <legend class="text-center header">Welcome to Express-outsorcing</legend>
                        <br>
                        <div class="form-group">
                            <input id="ced1" name="cedula" type="text"  placeholder="Cedula" class="form-control">
                        </div>
                        <br>
                        <div class="form-group">
                            <input id="nom1" name="nombre" type="text"  placeholder="Nombre" class="form-control">
                        </div>
                            <br>
                        <div class="form-group">
                            <input id="dir1" name="direccion" type="text"  placeholder="Dirección" class="form-control">
                        </div>
                        <br>
                        <div class="form-group">
                            <input id="tel1" name="telefono" type="text"  placeholder="Telefono" class="form-control">
                        </div>
                        <input type="hidden" name="oculto" value="1"> <!--INPUT PARA LA VALIDACIÓN DE OCULTO-->
                        <br>
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary btn-lg">Terminar registro</button>
                            <button type="reset" class="btn btn-primary btn-lg">Corregir datos</button>    
                        </div>
                        </fieldset>
                        </form>
                        <!--FIN INSERT***********************-->
                
                        <br>
                        <hr><!--EDITAR DATO-->
                        <br> 

                        <form action="editarPDOEXP2.php" method="POST">
                                <div class="form-group">
                                    <button type="submit" value="Actualizar"  class="btn btn-success" >Editar</button>
                                    <input  name="datoactualiza" type="text"  placeholder="Digite N° de documento que desea editar..." class="form-control">
                                </div>
                        </form>

                        <hr><!--ELIMINAR DATO-->
                        <br> 

                        <form action="eliminarPDOEXP2.php" method="POST">
                                <div class="form-group">
                                    <button type="submit" value="Eliminar"  class="btn btn-success" >Eliminar</button>
                                    <input  name="datoborra" type="text"  placeholder="Digite el N° de documento que desea eliminar..." class="form-control">
                                </div>
                        </form>
                <!--TABLA DINAMICA DONDE DESDE LA BASE DE DATOS LISTA LOS DATOS-->
                <div>
	                <br> 
                    <br> 
                    <br> 
                    <center>
                       <table border="3"  >
                       <legend class="text-center header">¡ Listado de usuarios registrados !</legend>
                       <br> 
                       <hr>
		                        <thead>
			                            <tr>
				                            <th class="th">N° Documento</th>
				                            <th class="th">Nombre completo</th>
				                            <th class="th">Dirección</th>
				                            <th class="th">Teléfono</th>

                <?php
                include "conexionPDOEXP2.php";
                $sentencia = $conexion->prepare("SELECT * FROM datos ");// FETCH_ASSOC
                $sentencia->setFetchMode(PDO::FETCH_ASSOC);// Especificamos el fetch mode antes de llamar a fetch()
                //setFetchMode Establece el modo de obtención para esta sentencia en este caso (PDO::FETCH_ASSOC)
                $sentencia->execute();// ejecute  $sentencia
                while ($row = $sentencia->fetch()) {
                    echo "<tr>" ; 
                    echo "<td>{$row['cedula']}</td>";     //variable $row contiene nombre columna base de datos cedula
                    echo "<td>{$row["nombre"]} </td>";    //variable $row contiene nombre columna base de datos nombre
                    echo "<td>{$row["direccion"]} </td>"; //variable $row contiene nombre columna base de datos direccion
                    echo "<td> {$row["telefono"]} </td>"; //variable $row contiene nombre columna base de datos telefono
                    echo "</tr>";
                     
                }
                ?>
                 </table>
                 <center/>
               </div>
            </div>
        </div>
    </div>
</div>




<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</body>
</html>