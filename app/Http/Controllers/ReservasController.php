<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;

class ReservasController extends Controller
{
    function index()
    {
        $datos = Reserva::all();
        return view('reserva.index', 
        ['reservas' => $datos]);
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
 