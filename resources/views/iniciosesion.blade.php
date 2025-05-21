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
    <div>
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
            <input type = "password" name = "password" size = "10" placeholder ="tu contraseña" class="password">
            <br>
            <input type="submit" value="Iniciar sesión">  
            <input type="reset" value="Borrar"> 
           </form>
    </div>
</body>
</html>