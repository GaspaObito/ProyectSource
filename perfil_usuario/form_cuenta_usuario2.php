
<?php
// prueba de datos
// require ("../conexion_bd.php");
// print_r($_POST)

require ("../conexion_bd.php");

$sentencia = $conexion->prepare("INSERT INTO cuenta_usuario(id_cuenta_usuario, nombre_usuario, clave, id_usuario )
VALUES(:IdCuenta1, :NomUsuario1, :ClaveUsuario1, :IdUsuario1)");

$sentencia->bindParam(':IdCuenta1',$_POST['id_cuenta_usu']);
$sentencia->bindParam(':NomUsuario1',$_POST['nombre_usu']);
// Metodo hash para Encriptar la contraseña
// $pass = password_hash($_POST['clave_usu'],PASSWORD_BCRYPT);
// $sentencia->bindParam(':ClaveUsuario1',$pass);
$sentencia->bindParam(':ClaveUsuario1',$_POST['clave_usu']);
$sentencia->bindParam(':IdUsuario1',$_POST['id_usu_foranea']);
// $sentencia->execute();

if ($sentencia->execute()) {
    header("location:form_sesion_usuario.php");
    
} else {
    header("location:form_cuenta_usuario.php");
}


?>