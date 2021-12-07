<?php

$conexion = mysqli_connect("localhost","root","");
mysqli_select_db("personas",$conexion);

$result = $conexion->query("SELECT * FROM datos ORDER BY nombre")

$arreglo = array();

if ($result) {
    while ($row = mysqli_fetch_array($result)) {
        $equipo = ($row['nombre']);
         array_push($arreglo,$equipo);
    
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
</head>
<body>
    <div class="pizarron">
        <form action="otro.php" autocomplete="off" method="POST">
            <center>
                <h1>Buscador de palabras</h1>
                <p><input type="text" id="busca" name="nombre">
                
                <input type="submit" class="button" value="Guardar" ></p>
            </center>
        </form>
    </div>
</body>
</html>