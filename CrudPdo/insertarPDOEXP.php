<?php
//print_r($_POST);

include "conexionPDOEXP.php";

/*//PRIMERA FORMA DE INSERTAR LOS DATOS :

$code = $_POST['cedula'];
$name = $_POST['nombre'];
$address = $_POST['direccion'];
$phone = $_POST['telefono'];

$sentencia = $conexion->prepare("INSERT INTO datos (cedula, nombre, direccion, telefono) VALUES(?, ?, ?, ?);"); //se especifica el nombre columnas de la base datos
$resultado = $sentencia->execute([$code,$name,$address,$phone]);

if ($resultado === TRUE) {
    echo "Insertado Correctamente!";
} else {
    echo "Error , Error";
}
*/
//**************************************************************************************************************************************************** */

//SEGUNDA FORMA DE INSERTAR LOS DATOS :

include "conexionPDOEXP.php";

$sentencia = $conexion->prepare("INSERT INTO datos (cedula, nombre, direccion, telefono) VALUES (?, ?, ?, ?)"); //se especifica el nombre columnas de la base datos

$code = $_POST['cedula'];           //cedula que vieja por via POST se transforma en $code
$name = $_POST['nombre'];           //nombre que vieja por via POST se transforma en $name
$address = $_POST['direccion'];     //direccion que vieja por via POST se transforma en $address
$phone = $_POST['telefono'];        //telefono que vieja por via POST se transforma en $phone

$sentencia->bindParam(1, $code);
$sentencia->bindParam(2, $name);
$sentencia->bindParam(3, $address);
$sentencia->bindParam(4 , $phone);
//se ejecuta la variable $sentencia
$sentencia->execute();
//Realizamos la validacion
if ($sentencia == TRUE) {
    echo "Datos Insertados correctamente";
    header("location:formularioEXP.php");
} else {
    echo "Algo salió mal. Por favor verifique el error";
}


?>