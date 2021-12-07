<?php
//print_r($_GET);

/*include "conexionPDOEXP.php";

$codigo = $_POST['id']; //SE CREA LA TRANSFORMACION $codigo PARA ALMACENAR DATO id QUE VIAJA VIA POST DEL FORMULARIO PRINCIPAL

$sentencia = $conexion->prepare("DELETE FROM datos WHERE cedula = ?;");
$resultado = $sentencia->execute([$codigo]);

if ($resultado == TRUE) {
    echo "ELIMINADO CON EXITO";
    //header("location:formularioEXP.php");
} else {
    echo "ERROR";
}*/


include "conexionPDOEXP.php";

$idborra=$_POST['datoborra']; //SE CREA LA TRANSFORMACION $idborra PARA ALMACENAR DATO datoborra QUE VIAJA VIA POST DEL FORMULARIO PRINCIPAL
$sentencia = $conexion->prepare("DELETE FROM datos WHERE cedula='$idborra'");
// Especificamos el fetch mode antes de llamar a fetch()
$sentencia->setFetchMode(PDO::FETCH_ASSOC);
// Ejecutamos

$sentencia->execute();

if($sentencia == TRUE){
    echo "Datos Insertados correctamente";
    header("location:formularioEXP.php");

}else{
echo "Algo salió mal. Por favor verifique el error";}

//LINKS PARA REALIZAR PDO 
//https://www.w3schools.com/php/php_mysql_delete.asp
//https://diego.com.es/tutorial-de-
?>


