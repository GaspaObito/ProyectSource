<?php
// prueba de datos
// require("conexion_bd.php");
// print_r($_POST)

require ("../conexion_bd.php");

$B1 = $_POST['id_profes'];
$B2 = $_POST['tipo_doc_prof'];
$B3 = $_POST['numero_doc_prof'];
$B4 = $_POST['nombres_prof'];
$B5 = $_POST['apellidos_prof'];
$B6 = $_POST['correo_prof'];
$B7 = $_POST['profesion_prof'];
$B8 = $_POST['campo_accion_prof'];

$sentencia = $conexion->prepare("INSERT INTO profesional(id_profesional, tipo_documento, numero_documento, nombres, apellidos, correo, profesion, campos_de_accion)VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
$resultado = $sentencia->execute([$B1, $B2, $B3, $B4, $B5, $B6, $B7, $B8]);

//Realizamos la validacion
if ($resultado == TRUE) {
    // echo "Datos Insertados correctamente";
    header("location:form_cuenta_profesional.php");
} else {
    // echo "Algo salió mal. Por favor verifique el error";
    header("location:form_registro_profesional.php");
}

?>