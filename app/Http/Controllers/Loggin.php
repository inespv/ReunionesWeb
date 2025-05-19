<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogginController extends Controller
{
    public function create()
    {
        return view('loggin.loggin');
    }

    public function store()
    {
        request()-> validate(
            [
                'user' => 'required',
                'password' => 'required'
            ]
        );
    }
}
