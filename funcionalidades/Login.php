<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>=> Login <=</title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="Hojaestilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


</head>  
<body>
    <form class="formulario">
    
    <legend class="text-center header">Iniciar Sesion</legend>
    <legend class="text-center header">Welcome to Express-outsorcing</legend>
     <div class="contenedor">
     
     <style>
.boton {
    background-color: white;
    color: black;
    border: none;
    cursor: pointer;
    padding:20px;
    font-size: 20px;
    width: 82%;
}
.mainmenubtn:hover {
    background-color: blue;
    }
.dropdown {
    position: relative;
    display: inline-block;
}
.dropdown-child {
    display: none;
    background-color: skyblue;
    min-width: 200px;
}
.dropdown-child a {
    color: blue;
    padding: 20px;
    text-decoration: none;
    display: block;
}
.dropdown:hover .dropdown-child {
    display: block;
}
</style>
        <div class="input-contenedor">
            <i class="fas fa-key icon"></i>
             <label for="inputState" class="form-label">Tipo de Documento :</label>
             <select id="inputState" class="form-select">
             <option selected>Cedula de Ciudadania</option>
             <option>Tarjeta de identidad</option>
             <option>Cedula de Extrangeria</option>
             <option>Contraseña primera vez</option>
             <option>Registro civil</option>
         </select>
        </div>
        <hr>
         <div class="input-contenedor">
         <i class="fas fa-key icon"></i>
         <label for="inputState" class="form-label">Numero de documento :</label>
         <input type="password" placeholder="No. Documento">  
         </div>
         <hr>
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
        <label for="inputState" class="form-label">Contraseña :</label>
         <input type="password" placeholder="Contraseña">
         <hr>
         <br>
         <br>
         </div>
         <form action="#" method="POST">
         <input type="submit" value="Iniciar sesion" class="button">
         </form>
         <br>
         <br>
         <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿No tienes una cuenta? <a class="link" href="FormularioEXP.php">Registrate </a></p>
         
     </div>
    </form>




<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</body>
</html>
