<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/colores.css">
    <link rel="stylesheet" href='/registro.css'>
    <title>Registro</title>
</head>
<body>
    <form action="Home" method="get">
        <p>Introduce tu usuario:</p>
        <input type = "text" name = "nombreusuario" size = "10" placeholder ="usuario">

        <p> Introduce tu número de teléfono :
             <input type = "text" name = "teléfono" size = "15" placeholder ="número de teléfono">

        <p> Introduce tu correo electrónico :
             <input type = "email" name = "email" size = "25" placeholder ="correo electrónico">

        <p> Introduce tu dirección :
             <input type = "text" name = "dirección" size = "25" placeholder ="dirección">
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
        <p>Introduce tu contraseña:</p>
        <input type = "password" name = "contraseña" size = "25" placeholder ="contraseña">
        <br>
        <input type="submit" value="Registrarme" style="margin-top: 10px; margin-right: 10px; font-family:Verdana;">  
        <input type="reset" value="Borrar" style="margin-top: 10px;"> 
    </form>
</body>
</html>