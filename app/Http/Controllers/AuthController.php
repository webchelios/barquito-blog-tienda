<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm() {
        return view('auth.login');
    }
    
    public function loginProcess(Request $request) {
        // Validar

        // Autenticar con fachada Auth
        // attempt requiere password y credenciales
        $credentials = $request->only(['email', 'password']);
        
        if (!Auth::attempt($credentials)) {
            return redirect('/iniciar-sesion')
                ->with('success', 'Las credenciales ingresadas no coinciden con los registros.');
        }

        return redirect('/blog/entradas')
            ->with('success', 'Sesión iniciada con éxito. Hola de nuevo ' . auth()->user()->email);
    }

    public function logoutProcess(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/iniciar-sesion')
            ->with('message', 'La sesión se cerró con éxito.');
    }
}
