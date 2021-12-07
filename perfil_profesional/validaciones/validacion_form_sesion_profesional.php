<?php

$ID_cuenta_profesional = $_POST['id_cuenta_prof'];
$correo_profesional = $_POST['correo_prof'];
$clave_profesional = $_POST['clave_prof'];

//conectar a la base de datos
$conexion=mysqli_connect("localhost","root","","express_out_db");
//Consulta a la base de datos
$consulta="SELECT * FROM cuenta_profesional WHERE id_cuenta_profesional='$ID_cuenta_profesional' AND correo_profesional='$correo_profesional' AND clave='$clave_profesional' ";
//SE EJECUTA LA CONSULTA
$resultado=mysqli_query($conexion,$consulta);
//Para saber con que numero de filas se cuenta en la bd o hacer validaciones
$fila=mysqli_num_rows($resultado);

if ($fila>0) {
    header("location:../../sitio_web.php");
}else{
    header("location:../form_sesion_profesional_2.php");
    // echo"<h1>ERROR DE AUTENTICACIÓN , VUELVE A INTENTARLO POR FAVOR!<h1";
    

}

//FUNCION PARA LIBERAR MEMORIA
mysqli_free_result($resultado);
//FUNCION PARA CERRAR LA CONEXION
mysqli_close($conexion);

?>