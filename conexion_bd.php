<?php

$server = 'localhost';
$user_name = 'root';
$password = '';
$database = 'express_out_db';

try {
    $conexion = new PDO("mysql:host=$server;dbname=$database; " ,$user_name, $password);
} catch (PDOException $e) {
  die('Connected failed: '.$e->getMessage());
}

// PRUEBA DE CONEXION EN PANTALLA
// if ($conexion == null) {
//   echo "no hay conexion";
// }else{
//   echo "si estas CONECTADO";
// }


?>