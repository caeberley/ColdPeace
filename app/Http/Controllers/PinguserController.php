<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class PinguserController extends Controller
{
    public function ingresarComoPinguser(Request $request)
    {
        $user = Auth::user();// Obtener el usuario autenticado
        dd(Auth::user());


        if (!$user) {
            return back()->with('error', 'No estás autenticado.');
        }
    
        $edad = $user->edad; // Asegúrate de que 'edad' sea un campo en tu modelo de usuario
    
        if ($edad >= 15 && $edad <= 18) {
            return redirect()->route('cuestionario'); // Redirige al cuestionario
        } else {
            return back()->with('error', 'Lo siento, solo los usuarios de entre 15 y 18 años pueden acceder como Pingusers.');
        }
    }
}

