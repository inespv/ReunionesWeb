<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/colores.css">
    <title>Inicio sesión</title>
</head>
<body>
    <form action="Home" method="get">
        <p>Introduce tu usuario:</p>
        <input type = "text" name = "nombreusuario" size = "10" placeholder ="tu usuario">
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
        <input type = "password" name = "contraseña" size = "10" placeholder ="tu contraseña">
        <br>
        <input type="submit" value="Iniciar sesión" style="margin-top: 10px; margin-right: 10px;">  
        <input type="reset" value="Borrar" style="margin-top: 10px;"> 
    </form>
</body>
</html>