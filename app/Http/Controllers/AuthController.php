<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function formLogin() {
        return view('auth.login');
    }

    public function formRegister() {
        return view('auth.register');
    }

    public function processLogin(Request $request) {
        $credentials = $request->only(['email','password']);

        // Este método se encarga de la autenticación con las credenciales que cargué. Utilizo la fascade !Auth
        // El método attempt intenta autenticar el usuario mediante un array asociativo de al menos dos posiciones
        if(!Auth::attempt($credentials)){
            return redirect()
                ->route('auth.form.login')
                ->with('status.message', 'Las credenciales ingresadas son incorrectas')
                ->with('status.type', 'error')
                // Le envio los datos al formulario de inicio de sesión
                ->withInput(); // Se asegura de que tengamos acceso a los datos viejos con la función old
        } 

        return redirect()
            ->route('blog')
            ->with('status.message', '¡Bienvenido ' . auth()->user()->name . '!')
            ->with('status.type', 'success');
    }

    public function processRegister(Request $request) {
        try {

            $request->validate(User::$rules, User::$errorMessages);
            // El segundo parametro es para pasar los mensajes de error para cada campo
            // Pido los datos del form de creación de entradas, hago una excepción con el token
            $data = $request->except(['_token']);

            $originalPassword = $request->input('password');
            $hashedPassword = Hash::make($originalPassword);
            $data['password'] = $hashedPassword;
            $data['role'] = 'normal';

            $user = User::create($data);

            // Logueo al usuario al registrarse exitosamente
            Auth::login($user);

            // Redirecciono al usuario a otro lado
            return redirect(
            )
                ->route('home')
            // Flasheo una variable que imprima el resultado del formulario
                ->with('status.message', "El usuario: '" . e($request->input('email')) . "' se registró exitosamente")
                ->with('status.type', 'success');
        } catch (\Exception $e){
            // Redirecciono al usuario a otro lado
            return redirect()
                    ->back()
                // Flasheo una variable que imprima el resultado del formulario
                    ->with('status.message', "El usuario no pudo ser registrado por un error: " . $e->getMessage())
                    ->with('status.type', 'error')
                    ->withInput();
        }
    }

    public function processLogout(Request $request) {
        Auth::logout();

        // Por motivos de seguridad borro los datos de sesión y regenero el id de sesión
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('auth.form.login')
            ->with('status.message', 'Sesión cerrada exitosamente')
            ->with('status.type', 'success');
    }
}
