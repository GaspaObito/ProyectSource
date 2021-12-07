 
<?php
//AQUI SE ESPECIFICAN TODAS LAS FUNCIONALIDADES QUE ME PERMITAN ACCEDER A TRAVES DE LA  BASE DE DATOS

include_once 'conexionPDOEXP.php';

class Autocompletar extends Database{       //Se crea la clase Autocompletar ...


    function buscar($texto){               //Dentro de la clase Autocompletar se crea la funcion buscar con el parametro $texto
        $res = array();                    //Se crea la variable $res como valor de array , como un ARREGLO
        $query = $this->connect()->prepare("SELECT * FROM datos WHERE nombre LIKE :texto");  //Se crea la variable $query con el valor de this , es decir la funcion y le dice que prepare la consulta o query
                                                                                                //El comando LIKE es para buscar un patron y texto es la palabra que se va a intercambiar 
        $query->execute(['texto' => $texto . '%']);          //Esto busca la letra que se esta buscando en el input,NO importa el orden de la letra en la palabra, % es para que busque al principio                                      

        if($query->rowCount()){                              //Validacion si $query tiene filas que regresar -> rowCount
            while($r = $query->fetch()){
                array_push($res, $r['nombre']);              //En mi arreglo $res se le coloca $r['nombre']
            }
        }
        return $res;
    }
}

?>