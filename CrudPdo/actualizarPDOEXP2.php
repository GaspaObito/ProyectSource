<?php
//print_r($_POST);

/*include "conexionPDOEXP.php";

//SE RECIBEN LOS DATOS DEL FORMULARIO QUE VIAJAN POR VIA POST Y SE LES HACE LA TRANSFORMACION $
$cedula = $_POST["cedula"];
$nombre = $_POST["nombre"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];

$sentencia = $conexion->prepare("UPDATE datos SET nombre = ?,direccion = ?,telefono = ?  WHERE cedula = ? ");
$resultado = $sentencia->execute([$nombre,$direccion,$telefono,$cedula]);

if ($resultado === TRUE) {
    echo "Registro Actualizado con exito !";
    //header('location: formularioEXP.php');
} else {
    echo "ERROR";
}*/

include "conexionPDOEXP2.php";

//SE RECIBEN LOS DATOS DEL FORMULARIO QUE VIAJAN POR VIA POST Y SE LES HACE LA TRANSFORMACION $
$cedula=$_POST['cedula'];
$nombre =$_POST['nombre'] ;
$direccion =$_POST['direccion'] ;
$telefono=$_POST['telefono'];

$sentencia = $conexion->prepare("UPDATE  datos SET nombre=:nombre, direccion=:direccion, telefono=:telefono WHERE cedula=:cedula");

$sentencia->bindParam(":nombre", $nombre);
$sentencia->bindParam(":direccion", $direccion);
$sentencia->bindParam(":telefono", $telefono);
$sentencia->bindParam(":cedula", $cedula);

// EJECUTE LA $sentencia
$sentencia->execute();

if($sentencia == TRUE){
    echo "Datos Insertados correctamente";
    header("location:formularioEXP2.php");

}else{
echo "Algo salió mal. Por favor verifique el error";}



?>