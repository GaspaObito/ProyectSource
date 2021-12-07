<?php


$ID_cuenta_adm = $_POST["Id_c_admin"];
$Nom_adm = $_POST["nomb_admin"];
$clave_adm = $_POST["clave_admin"];

//conectar a la base de datos
$conexion=mysqli_connect("localhost","root","","express_out_db");
//Consulta a la base de datos
$consulta="SELECT * FROM cuenta_admin WHERE nombre_admin='$Nom_adm' AND clave='$clave_adm ' AND id_cuenta_admin='$ID_cuenta_adm' ";
//SE EJECUTA LA CONSULTA
$resultado=mysqli_query($conexion,$consulta);
//Para saber con que numero de filas se cuenta en la bd o hacer validaciones
$fila=mysqli_num_rows($resultado);

if ($fila>0) {
    header("location:../../sitio_web.php");
}else{
    header("location:../form_sesion_admin_2.php");
    echo"<h1>ERROR DE AUTENTICACIÓN , VUELVE A INTENTARLO POR FAVOR!<h1";
    

}

//FUNCION PARA LIBERAR MEMORIA
mysqli_free_result($resultado);
//FUNCION PARA CERRAR LA CONEXION
mysqli_close($conexion);
?>