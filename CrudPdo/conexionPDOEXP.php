<?php

$servername = "localhost";
$usuario = "root";
$contrasena = ""; 
$nombrebd = "personas"; 

try {
    
         $conexion = new PDO('mysql:host=localhost;dbname=personas', $usuario, $contrasena);

}catch(PDOException $e) {
    echo "Conexion fallida: " .$e->getMessage(); //getMessage() BOTE EL MENAJE DE ERROR
}

?>