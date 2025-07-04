<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use Illuminate\Http\Request;

class EntryController extends Controller
{
    public function index() {
        // traer entradas de la tabla sql. Retorna una Collection (array con los registros de la tabla convertidos a objetos del modelo)
        // (se puede poner en el retorno si es lo único que traigo)
        $entries = Entry::all();

        // pasaje de variables a la vista
        // el segundo parametro es $data
        return view('blog.index', [
            'entries' => $entries,
        ]);
    }

    // atrapar el id del parámetro asociado a la ruta como parametro de la función
    // (debe llamarse igual al parametro)
    public function view( int $id ) {       
        // busca el registro de la tabla por su PK y muestro un 404 si no lo encuentra (en lugar de un null)
        return view('blog.view', [
            'entry' => Entry::findOrFail($id),
        ]);
    }

    public function createForm() {
        return view('blog.create');
    }

    // recibir datos del form por POST => usar clase Request como argumento tipado
    public function createProcess(Request $request) {
        dd($request);
    }
}
