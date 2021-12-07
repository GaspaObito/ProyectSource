<html>
<head><meta charset="UTF -8"></head>
<body>

<table border="1">
<thead>
<tr>
         <th>TIPODOC</th>
           <th>DOCUMENTO</th>
           <th>NOMBRE</th>
            <th>TELEFONO</th>
            </tr>
            </thead>
        <tbody> 
<?php
include 'conexion.PHP';
//desde aca agrego la consulta
$sentencia= "SELECT TIPODOC,DOCUMENTO,NOMBRE,TELEFONO FROM cliente";
        $resultado= $mysqli->query($sentencia) or die (mysqli_error($mysqli));
        while($fila=$resultado->fetch_assoc())



       {

            echo"<tr>"; 
            echo "<td>".$fila['TIPODOC']."</td>";
            echo "<td>".$fila['DOCUMENTO']."</td>";
            echo "<td>".$fila['NOMBRE']."</td>";
            echo "<td>".$fila['TELEFONO']."</td>";
           
            //echo "<td>"; echo $fila['ciudad']; echo "</td>";
            echo"/<tr>";
          }
          echo"'<a href='formuclientes.php'>Regresar al formulario</a>'";
    
          ?>   
         </tbody>
      </table>     
    </body>
</html>
    




        


    

     

