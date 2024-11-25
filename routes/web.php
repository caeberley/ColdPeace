<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PinguserController;

Route::get('/', function () {
    return view('index');
});

Route::get('/cuestionario', function () {
    return view('cuestionario');
});

Route::get('/verificar', function () {
    return view('verificar');
});

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/organizacion', function () {
    return view('organizacion');
});

Route::get('/progreso', function () {
    return view('progreso');
});
Route::get('/aventura', function () {
    return view('aventura');
});
Route::get('/social', function () {
    return view('social');
});
Route::get('/educacion', function () {
    return view('educacion');
});
Route::get('/habitos', function () {
    return view('habitos');
});
Route::get('/tareas', function () {
    return view('tareas');
});
Route::get('/nueva-tarea', function () {
    return view('nueva-tarea');
});
Route::get('/habito-predeterminado', function () {
    return view('habito-predeterminado');
});
Route::get('/habito-personalizado', function () {
    return view('habito-personalizado');
});
Route::get('/tareas-completadas', function () {
    return view('tareas-completadas');
});

Route::view('/login', "login")->name('login');
Route::view('/registro', "registro")->name('registro');
Route::view('/crear-usuario', "crear-usuario")->name('crear-usuario');
Route::view('/organizacion', "organizacion")->name('organizacion');

Route::post('/validar-registro', [LoginController::class, 'registro'])->
name('validar-registro');

Route::post('/inicia-sesion',[LoginController::class, 'login'])
-> name('inicia-sesion');

Route::get('/logout', [LoginController::class, 'logout'])->
name('logout');

Route::post('/pinguser', [PinguserController::class, 
'ingresarComoPinguser'])->name('ingresar.pinguser');
