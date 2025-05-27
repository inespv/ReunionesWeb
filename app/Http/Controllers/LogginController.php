<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogginController extends Controller
{
    public function create()
    {
        return view('LogginController.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user' => 'required',
            'password' => 'required'
        ], [
            'user.required' => 'El campo usuario es obligatorio',
            'password.required' => 'El campo contraseña es obligatorio'
        ]);

        if (LogginController::attempt(['user' => $request->user, 'password' => $request->password])) {
            return redirect()->route('welcome.page');
        }
        
        return back()->withErrors([
            'user' => 'Las credenciales proporcionadas no coinciden con nuestros registros.'
        ])->withInput($request->only('user'));
    }
}