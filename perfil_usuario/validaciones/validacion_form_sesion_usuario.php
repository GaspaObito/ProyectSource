<?php

$IDcuenta = $_POST['Id_c'];
$usuario = $_POST['nomb_usuario'];
$clave = $_POST['clave_usuario'];

//conectar a la base de datos
$conexion=mysqli_connect("localhost","root","","express_out_db");
//Consulta a la base de datos
$consulta="SELECT * FROM cuenta_usuario WHERE nombre_usuario='$usuario' AND clave='$clave' AND id_cuenta_usuario='$IDcuenta' ";
//SE EJECUTA LA CONSULTA
$resultado=mysqli_query($conexion,$consulta);
//Para saber con que numero de filas se cuenta en la bd o hacer validaciones
$fila=mysqli_num_rows($resultado);

if ($fila>0) {
    header("location:../../sitio_web.php");
}else{
    header("location:../form_sesion_usuario_2.php");
    echo"<h1>ERROR DE AUTENTICACIÓN , VUELVE A INTENTARLO POR FAVOR!<h1";
    

}

//FUNCION PARA LIBERAR MEMORIA
mysqli_free_result($resultado);
//FUNCION PARA CERRAR LA CONEXION
mysqli_close($conexion);

?>