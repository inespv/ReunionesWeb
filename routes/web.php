<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\ReservasController;
use App\Http\Controllers\LogginController;

Route::get('/', function () {
    return view('welcome');
});

//esto está bien esto no se toca
Route::get('iniciosesion.blade.php', function () {
    return view('iniciosesion');
});

Route::get('Home',function () {
    //poner un array con los nombres de la base de datos para que dé la bienvenida personalizada
    return view('mainpage');//-> with('nombre',$nombre); 
});

Route::get('registro', [RegistroController::class,'create']);

Route::post('registro', [RegistroController::class,'store']);

Route::resource('reservas', ReservasController::class)->only('index','create','store','update','edit','show','destroy')->middleware('auth');

Route::post('loggin',[LogginController::class,'store']);