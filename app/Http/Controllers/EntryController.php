<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class EntryController extends Controller
{
    public function index() {
        // traer entradas de la tabla sql. Retorna una Collection (array con los registros de la tabla convertidos a objetos del modelo)
        // (se puede poner en el retorno si es lo único que traigo)
        // $entries = Entry::all();
        // !! ya no se debe utilizar el metodo all debido a que agregamos la tabla categories relacionada con entries
        // Lo que hacemos es para evitar eager-loading con with
        // "traeme todas las peliculas con el category y ejecuta el query"
        // Trae categorias con ID en uso
        $entries = Entry::with('category')->get();

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
        return view('blog.create', [
            'categories' => Category::all(),
        ]);
    }

    // recibir datos del form por POST => usar clase Request como argumento tipado
    public function createProcess(Request $request) {
        // Validación de datos y sus respectivos mensajes de error
        $request->validate(Entry::$rules, Entry::$messages);

        // dd($request);
        // Primero capturamos los datos del form a traves de la clase Request
        // Una forma de pedirle la data es con request->input()
        // Nos devolverá todos los datos hasta el token ( con ->exept(['_token']) puedo omitirlo )
        // O con ->only() podemos pedir especificamente lo que queremos
        $data = $request->only(['title', 'category_id', 'content', 'author', 'cover', 'cover_description']);


        // Antes de grabar preguntamos si hay una imagen que subir
        if ($request->hasFile('cover')) {
            // Usamos el disco public del storage (.env y config/filesystems.php)
            // Lo va a guardar en el directorio covers
            $data['cover'] = $request->file('cover')->store('covers');
        }

        // Para grabar está el método de eloquent create()
        // !importante: para que esto funciona es necesario configurar la propiedad fillable en el modelo
        Entry::create($data);

        // Redireccionamiento
        // ->with() permite flashear una variable a la sesión para que esté disponible en la proxima pantalla
        return redirect()
            ->route('entries.index')
            ->with('status.message', 'La entrada <b>"' . e($data['title']) . '"</b>    se publicó con éxito');
    }

    public function editForm(int $id) {
        return view('blog.edit', [
            'entry' => Entry::findOrFail($id),
            'categories' => Category::all(),
        ]);
    }

    public function editProcess(int $id, Request $request) {
        $entry = Entry::findOrFail($id);

        $request->validate(Entry::$rules, Entry::$messages);

        $data = $request->except('_token');
        $oldCover = null;
        
        if ($request->hasFile('cover')) {
            $data['cover'] = $request->file('cover')->store('covers');
            $oldCover = $entry->cover;
        }

        $entry->update($data);

        if ($oldCover && Storage::has($oldCover)) {
            Storage::delete($oldCover);
        }

        return redirect()
          ->route('entries.index')
          ->with('status.message', 'La entrada <b>"' . e($entry['title']) . '"</b> se editó con éxito');
    }

    public function deleteForm(int $id) {
        return view('blog.delete', [
            'entry' => Entry::findOrFail($id),
        ]);
    }

    public function deleteProcess(int $id) {
        // Buscamos la entrada y la eliminamos si existe
        $entry = Entry::findOrFail($id);

        $entry->delete();

        // Borro el cover si es que existe
        // disk => env
        if ($entry->cover && Storage::has($entry->cover)) {
            Storage::delete($entry->cover);
        }

        return redirect()
            ->route('entries.index')
            ->with('status.message', 'La entrada <b>"' . e($entry->title) . '"</b> se eliminó correctamente');
    }
}
