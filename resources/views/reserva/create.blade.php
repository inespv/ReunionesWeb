<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/colores.css">
    <title>Crear una reunión</title>
</head>
<body>
    
<form action="/reservas" method="post">
    @csrf
        <p>Introduce título:</p>
        <input type = "text" name = "titulo" size = "10" placeholder ="titulo">

        <p> Introduce fecha Inicio :
             <input type = "date" name = "fechaInicio" size = "15" placeholder ="fechaInicio">

        <p> Introduce fecha fin :
             <input type = "date" name = "fechaFin" size = "25" placeholder ="fechaFin">

        <p> Introduce tu hora :
             <input type = "time" name = "hora" size = "25" placeholder ="hora">


        <?php
            /*if(isset($_GET) <> " ")
            {
                $usuario = $_REQUEST['nombreUsuario'];
                $password = $_REQUEST['contraseña'];
            }
            else 
            {
                print("usuario incorrecto");
            }*/
        ?>
        <br>
        <p>Introduce descripción:</p>
        <input type = "text" name = "descripcion" size = "25" placeholder ="descripcion">
        
        @error('password')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror

        <br>
        <input type="submit" value="Guardar" style="margin-top: 10px; margin-right: 10px; font-family:Verdana;">  
        <input type="reset" value="Borrar" style="margin-top: 10px;"> 
    </form>
</body>
</html>
