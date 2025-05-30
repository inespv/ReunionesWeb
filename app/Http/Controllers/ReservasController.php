<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;

class ReservasController extends Controller
{
    function index()
    {
        $datos = Reserva::all();

        // URL de la API
        $url = "http://172.16.196.114:8090/api/generate";

        // Datos que se enviarán en la solicitud POST
        $data = [
            "model" => "llama3.2",
            "prompt" => "{{$datos}} ¿ De qué tratan las reuniones de la lista ?",
            "stream"=> false
        ];

        // Inicializar cURL
        $ch = curl_init($url);

        // Configuración de cURL
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
        ]);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

        // Ejecutar la solicitud
        $response = curl_exec($ch);
        $response=json_decode($response);

        // Verificar errores
        if (curl_errno($ch)) {
            echo "Error en cURL: " . curl_error($ch);
        } else {
            // Mostrar la respuesta
            //echo "Respuesta de la API: " . $response;
        }

        // Cerrar cURL
        curl_close($ch);

        return view('reserva.index', 
        ['reservas' => $datos,'resumen'=>$response]);
    }

    function create()
    {
        return view('reserva.create');
    }
    
    function store()
    {
        $attributes = request()-> validate
        (
            [
                'titulo' => 'required',
                'fechaInicio'=> 'required',
                'fechaFin'=> 'required',
                'hora'=> 'required',               
                'descripcion' => 'required'
            ]   
        );

        Reserva::create($attributes);
        return view('reserva.store');
        
        dd('your registration has been successful !');

        if (Auth::attempt(['reserva' => $request->user, 'titulo' => $request->password])) 
        {
            return redirect()->route('home');
        }
    return back()->withErrors(['reserva' => 'Credenciales incorrectas']);
    }

    //modifica los datos de la reserva
    function edit(string $id)
    {
        return view('reserva.edit',
        ['reserva' => Reserva::findOrFail($id)]);        
    }

    //manda los datos modificados a la base de datos
    //mandar un mensaje de confirmación

    function update(Request $request,string $id)
    {
        $attributes = request()-> validate
        (
            [
                'titulo' => '',
                'fechaInicio'=> '',
                'fechaFin'=> '',
                'hora'=> '',
                'descripcion' => ''
            ]   
        );
        $reserva = Reserva::find($id);
        $reserva->update($attributes);
        return view('reserva.update');
    }

    function show(string $id)
    {
        return view('reserva.index', 
        ['reservas' => Reserva::findOrFail($id)]);
    }

    function destroy(string $id)
    {  
        $reserva = Reserva::find($id);
        $reserva->delete();
        return view('reserva.destroy');        
    }
}
 