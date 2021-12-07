<?php
// prueba de datos
// require ("../conexion_bd.php");
// print_r($_POST)

require ("../conexion_bd.php");

$sentencia = $conexion->prepare("INSERT INTO cuenta_profesional(id_cuenta_profesional, correo_profesional, clave, id_profesional)
VALUES(:IdCuentaProf, :CorreoNuevoProf, :ClaveProf, :Idprof1)");

$sentencia->bindParam(':IdCuentaProf',$_POST['id_cuenta_prof']);
$sentencia->bindParam(':CorreoNuevoProf',$_POST['correo_nuevo_prof']);
// Metodo hash para Encriptar la contraseña
$pass = password_hash($_POST['clave_prof'],PASSWORD_BCRYPT);
$sentencia->bindParam(':ClaveProf',$pass);
$sentencia->bindParam(':Idprof1',$_POST['id_prof_foranea']);
// $sentencia->execute();

if ($sentencia->execute()) {
    header("location:form_sesion_profesional.php");
    // echo "Cuenta creada satisfactoriamente";
    
    
} else {
    header("location:form_cuenta_profesional.php");
    echo "Algo salió mal. Por favor verifique el error";
}


?>