<?php
//Llamar las funciones dependiendo de lo que queramos manejar

include_once 'autocompletar.php';

$modelo = new Autocompletar();    //Se crea el objeto $modelo 

$texto = $_GET['tipo-mascota'];

$res = $modelo->buscar($texto); //$res hace que el objeto $modelo ejecuta o manda a llamar la funcion de buscar 

echo json_encode($res); // y ese resultado se convierta en un string json


?>