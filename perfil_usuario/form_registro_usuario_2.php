<?php

// prueba de datos
// require("conexion_bd.php");
// print_r($_POST)

require ("../conexion_bd.php");

$A1 = $_POST['id_usu'];
$A2 = $_POST['tipo_doc'];
$A3 = $_POST['numero_doc'];
$A4 = $_POST['nombre_s'];
$A5 = $_POST['apellido_s'];
$A6 = $_POST['telefon_o'];
$A7 = $_POST['direccio_n'];
$A8 = $_POST['corre_o'];
$A9 = $_POST['categori_a'];
$A10 = $_POST['campos_de_acc'];

$sentencia = $conexion->prepare("INSERT INTO usuarios(id_usuario, tipo_documento, numero_documento, nombres, apellidos, telefono, direccion, correo, categorias, campos_de_accion)VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$resultado = $sentencia->execute([$A1, $A2, $A3, $A4, $A5, $A6, $A7, $A8, $A9, $A10]);

//Realizamos la validacion
if ($resultado == TRUE) {
    echo "Datos Insertados correctamente";
    header("location:form_cuenta_usuario.php");
} else {
    echo "Algo salió mal. Por favor verifique el error";
}

?>