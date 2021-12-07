<?php

// prueba de datos
// require ("../conexion_bd.php");
// print_r($_POST)

require ("../conexion_bd.php");

$sentencia = $conexion->prepare("INSERT INTO cuenta_admin(id_cuenta_admin, nombre_admin, clave, numero_documento )
VALUES(:IdCuentaAdmin, :NomAdmin, :ClaveAdmin, :NumDocAdmin)");

$sentencia->bindParam(':IdCuentaAdmin', $_POST['id_cuenta_admin']);
$sentencia->bindParam(':NomAdmin', $_POST['nombre_admin']);
$sentencia->bindParam(':ClaveAdmin', $_POST['clave_admin']);
// Para ponerlo eliminar el bindParam de la clave
// Metodo hash para Encriptar la contraseña
// $pass = password_hash($_POST['clave_admin'],PASSWORD_BCRYPT);
// $sentencia->bindParam(':ClaveAdmin', $pass);
$sentencia->bindParam(':NumDocAdmin', $_POST['num_doc_admin']);
// $sentencia->execute();

if ($sentencia->execute()) {
    header("location:form_sesion_admin.php");
    // echo "Cuenta creada y registrada con exito";
    
} else {
    header("location:form_cuenta_admin.php");
}

?>