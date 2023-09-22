<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
	* Función que muestra la vista de logados o la vista con el formulario de Login
	*/
	public function index()
	{
	    // Comprobamos si el usuario ya está logado
	    if (Auth::check()) {
	        // Si está logado le mostramos la vista de logados
	        return view('eres.dashboard.index');
	    }

	    // Si no está logado le mostramos la vista con el formulario de login
	    return view('auth.login');
	}

    /**
	* Función que se encarga de recibir los datos del formulario de login, comprobar que el usuario existe y
	* en caso correcto logar al usuario
	*/
	public function login(Request $request)
	{
	    // Comprobamos que el email y la contraseña han sido introducidos
	    $request->validate([
	        'email' => 'required',
	        'password' => 'required',
	    ]);

	    // Almacenamos las credenciales de email y contraseña
	    $credentials = $request->only('email', 'password');

        return view('eres.dashboard.index');
	}

	/**
	* Función que muestra la vista de logados si el usuario está logado y si no le devuelve al formulario de login
	* con un mensaje de error
	*/
	public function logados()
	{
	    if (Auth::check()) {
	        return view('logados');
	    }

	    return redirect("/")->withSuccess('No tienes acceso, por favor inicia sesión');
    }
}
