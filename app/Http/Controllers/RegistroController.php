<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistroController extends Controller
{
    public function create()
    {
        return view('registro.create');
    }
   
    public function store()
    {
        $attributes = request()-> validate
        (
            [
                'user' => 'required|max:15',
                'phone' => 'required| max:9',
                'email' => 'required|email| max:255',
                'address' => 'required| max:255',               
                'password' => 'required| min:8| max:25'
            ]
        );
        User::create($attributes);
        return view('registro.store');
    } 
}
