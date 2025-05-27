<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/colores.css">
    <link rel="stylesheet" href="/loggin.css">
    <title>Inicio sesión</title>
</head>
<body>
    <div class="formulario">
        <form action="Home" method="get">
            <p>Introduce tu usuario:</p>
            <input type="text" name="nombreusuario" size="10" placeholder="tu usuario">
            
            <br>
            <p>Introduce tu contraseña:</p>
            <div class="password-container">
                <input type="password" name="password" size="10" placeholder="tu contraseña" id="password">
                <button type="button" onclick="togglePassword()" id="toggle-btn">
                    <img id="toggle-icon" src="ojo_abierto-removebg-preview.png" alt="Mostrar">
                </button>
            </div>

            <script>
                function togglePassword() {
                    let passwordField = document.getElementById("password");
                    let toggleIcon = document.getElementById("toggle-icon");

                    // Alterna el tipo de entrada entre "password" y "text"
                    if (passwordField.type === "password") {
                        passwordField.type = "text";
                        toggleIcon.src = "ojo_cerrado-removebg-preview.png";
                        toggleIcon.alt = "Ocultar";
                    } else {
                        passwordField.type = "password";
                        toggleIcon.src = "ojo_abierto-removebg-preview.png";
                        toggleIcon.alt = "Mostrar";
                    }
                }
            </script>

            <input type="submit" value="Iniciar sesión">  
            <input type="reset" value="Borrar"> 
        </form>
    </div>
</body>
</html>