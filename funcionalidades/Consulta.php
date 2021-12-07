<html>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		
</html>
<?php

$host = 'localhost';
$basededatos = 'pruebad';
$usuario = 'root';
$contrasena = '';
$conexion = new mysqli($host, $usuario,$contrasena, $basededatos);
if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
}

//CONSULTA

$tabla="";
$query="SELECT * FROM alumnos ORDER BY id_alumno";

//DIGITE UN NOMBRE DE UN ALUMNO
if(isset($_POST['datoenv']))
{
	$q=$conexion->real_escape_string($_POST['datoenv']);
	$query="SELECT * FROM alumnos WHERE 
		id_alumno LIKE '%".$q."%' OR
		nombre LIKE '%".$q."%' OR
		carrera LIKE '%".$q."%' OR
		grupo LIKE '%".$q."%' OR
		fecha_ingreso LIKE '%".$q."%'";
}

$buscarAlumnos=$conexion->query($query);
if ($buscarAlumnos->num_rows > 0)
{
	$tabla.= 
	'<table class="table table-striped">
		<tr class="bg-primary">
			<td>ID ALUMNO</td>
			<td>NOMBRE</td>
			<td>CARRERA</td>
			<td>GRUPO</td>
			<td>FECHA INGRESO</td>
			<td>FECHA FECHA SALIDA</td>
		</tr>';

	while($filaAlumnos= $buscarAlumnos->fetch_assoc())
	{
		$tabla.=
		'<tr>
			<td>'.$filaAlumnos['id_alumno'].'</td>
			<td>'.$filaAlumnos['nombre'].'</td>
			<td>'.$filaAlumnos['carrera'].'</td>
			<td>'.$filaAlumnos['grupo'].'</td>
			<td>'.$filaAlumnos['fecha_ingreso'].'</td>
			<td>'.$filaAlumnos['fecha_ingreso'].'</td>
		 </tr>
		';
	}

	$tabla.='</table>';
} else
	{
		$tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
	}


echo $tabla;




?>