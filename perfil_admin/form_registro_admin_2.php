<?php
    
require_once ("../conexion_bd.php");

$C1 = $_POST["tipo_doc_admin"];
$C2 = $_POST["numero_doc_admin"];
$C3 = $_POST["nombres_admin"];
$C4 = $_POST["apellidos_admin"];
$C5 = $_POST["telefono_admin"];
$C6 = $_POST["correo_admin"];

$sentencia = $conexion->prepare("INSERT INTO administrador(tipo_documento, numero_documento, nombres, apellidos, telefono, correo )VALUES(?, ?, ?, ?, ?, ?)");
$resultado = $sentencia->execute([$C1, $C2, $C3, $C4, $C5, $C6]);

if ($resultado == TRUE) {
    header("location:form_cuenta_admin.php");
    // echo "Datos de administrador registrados con EXITO";
} else {
    echo "Error al registrar los datos";
}

?>