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
            return redirect()
                ->route('auth.login.form')
                ->with('error', 'Las credenciales ingresadas no coinciden con los registros.')
                // alternativa forzada a old()
                ->withInput();
        }

        return redirect()
            ->route('entries.index')
            ->with('success', 'Sesión iniciada con éxito. Hola de nuevo ' . auth()->user()->email);
    }

    public function logoutProcess(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('auth.login.form')
            ->with('sucess', 'La sesión se cerró con éxito.');
    }
}
