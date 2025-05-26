<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogginController extends Controller
{
    public function create()
    {
        return view('loggin.loggin');
    }

    public function store(Request $request)
    {
        request()-> validate(
            [
                'user' => 'required',
                'password' => 'required'
            ]
        );
        if (Auth::attempt(['user' => $request->user, 'password' => $request->password])) 
        {
            return redirect()->route('welcome.page.php');
        }
        return back()->withErrors(['user' => 'Credenciales incorrectas']);
    }
}
