<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <link rel="stylesheet" href="/index.css">
    <title>Mis reuniones</title>
</head>
<body>
    <h1>Listado de reuniones</h1>
    
    <p>{!!$resumen->response!!}</p>

    <table border="1", align="center", cellspacing="5">
	    <tr>
            <th>ID</th>
            <th>TÍTULO</th>
            <th>FECHA INICIO</th>
            <th>FECHA FIN</th>
            <th>HORA</th>
            <th>DESCRIPCIÓN</th>
            <th>EDITAR RESERVA</th>
            <th>ELIMINAR RESERVA</th>
        </tr>
        @foreach ($reservas as $r)
            <tr>
                <td>{{$r->id}}</td>        
                <td>{{$r->titulo}}</td>
                <td>{{$r->fechaInicio}}</td>
                <td>{{$r->fechaFin}}</td>
                <td>{{$r->hora}}</td>
                <td>{{$r->descripcion}}</td>
                <td><button> <a href="/reservas/{{$r->id}}/edit">Editar reunión</a> </button></td>
                <td> <form action="/reservas/{{$r->id}}"method="post">
                     @csrf
                      @method('DELETE')
                    <button>Eliminar reunión </button></form><td>  
            </tr>        
        @endforeach
    </table>
    <button class="crearB"> <a href="/reservas/create">Crear una reunión</a> </button>
</body>
</html>