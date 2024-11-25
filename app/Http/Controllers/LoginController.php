<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class LoginController extends Controller{


    public function registro(Request $request){
        //Validar los datos

        $user = new Usuario();

        $user->username = $request->username;
        $user->correo = $request->correo;
        $user->contraseña = Hash::make($request->contraseña);
        $user->nombre = $request->nombre;
        $user->apeP = $request->apeP;
        $user->apeM = $request->apeM;
        $user->fechaNam = $request->fechaNam;
        $user->edad = Carbon::parse($request->fechaNam)->age;

        $user->save();

        Auth::login($user);

        return redirect(route('crear-usuario'));

    }

    public function login(Request $request){
        //validacion

        $credentials = [

            "username" => $request->username,
            "password" => $request->contraseña,
            
        ];

        $remember = ($request->has('remember') ? true : false);

        
        if(Auth::attempt($credentials, $remember)){

            $request ->session()->regenerate();

            return redirect()->route('organizacion');
            

        }else{
            return redirect()->back()->withErrors([
                'username' => 'El nombre de usuario o la contraseña son incorrectos.',
            ]);
        }

    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));

    }
}