<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http;
use Illuminate\Support\Facades\Session;
use App\Models\Entry;

class IsPremium
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Este middleware va a preguntar si se puede ingresar a la entrada con una cuenta normal
        // En caso negativo redirecciono al usuario a la pantalla del blog

        // Paso 1: obtener la entrada (id del parámetro de la ruta)
        $id = $request->route('id');
        $entry = Entry::findOrFail($id);

        if($entry->category_id === 6 && !Session::get('confirmedIsPremium', false)) {
           return redirect()
                ->route('entries.ispremium-verification.form', ['id' => $id]);
        };
        
        // Next permite que la peticion siga su curso
        return $next($request);
    }
}
