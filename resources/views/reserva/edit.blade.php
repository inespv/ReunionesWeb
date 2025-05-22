<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/colores.css">
    <title>Editar una reunión</title>
</head>
<body>
    <form action="/reservas/{{$reserva->id}}" method="post">
        @csrf
        @method("PATCH")
            <p>Introduce título:</p>
            <input type = "text" name = "titulo" size = "10" placeholder ="titulo" value="{{$reserva->titulo}}">

            <p> Introduce fecha Inicio :
                <input type = "date" name = "fechaInicio" size = "15" placeholder ="{{$reserva->fechaInicio}}">

            <p> Introduce fecha fin :
                <input type = "date" name = "fechaFin" size = "25" placeholder ="{{$reserva->fechaFin}}">

            <p> Introduce tu hora :
                <input type = "text" name = "hora" size = "25" placeholder ="{{$reserva->hora}}">
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
            <input type = "text" name = "descripcion" size = "25" placeholder ="{{$reserva->descripcion}}">
            <br>
            <input type="submit" value="Guardar">
            <input type="reset" value="Borrar">
    </form>
</body>
</html>