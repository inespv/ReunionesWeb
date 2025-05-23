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
                {9
                    print("usuario incorrecto");
                }*/
            ?>
            <br>
            <p>Introduce tu contraseña:</p>
            <input type = "password" name = "password" size = "10"
             placeholder ="tu contraseña" id="password">

            <div class="ojo">
                  <button type="button" onclick="togglePassword()">
                    <img id="toggle-icon" src="ojo_abierto-removebg-preview.png" alt="Mostrar">
                </button>
            </div>

            <script>
                function togglePassword() 
                {
                    "click", function(event)
                    {
                        let passwordField = document.getElementById("password");
                        let toggleIcon = document.getElementById("toggle-icon");

                        if (passwordField.type === "password") 
                        {
                            passwordField.type = "password";
                            toggleIcon.src = "ojo_cerrado-removebg-preview.png";
                            toggleIcon.alt = "Ocultar";
                        } 
                        else
                        {
                            passwordField.type = "password";
                            toggleIcon.src = "ojo_abierto-removebg-preview.png";
                            toggleIcon.alt = "Mostrar";
                        }           
                    }
                }
            </script>
        <input type="submit" value="Iniciar sesión">  
        <input type="reset" value="Borrar"> 
    </form>
    </div>
</body>
</html>