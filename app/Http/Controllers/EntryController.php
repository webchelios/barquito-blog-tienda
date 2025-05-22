<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Debugbar;

class EntryController extends Controller
{
    /**
     * Muestra una todas las entradas de mi blog junto a las categorías
     *
     * @return \Illuminate\View\View
     */
    public function blog() {
        // Con el metodo all retorno un array con todos los registros de 'entries' convertidos a clases del modelo
        // Ahora que agregué una tabla relacionada "categories", si quiero traer cada categoria de cada entrada, no debo utilizar el método ALL
        // Necesito cargar los datos de la relación en el instante
        //$entries = Entry::all();

        // Trae las entradas con las categorías y ejecuta el query
        $entries = Entry::with([
            'category',
            'tags'
        ])->get();

        // Envio los valores de $entries a la view
        return view('entries/blog', [
            'entries' => $entries,
        ]);
    }

    /**
     * Recibe el parámetro de la url para mostrar una entrada individiual
     *
     * @param int $id ID de la entrada que se va a visualizar.
     * @return \Illuminate\View\View
     */
    public function view(int $id) {
        // Busco la entrada con la referencia del id y el método find
        $entry = Entry::findOrFail($id);
        return view('entries.view', ['entry' => $entry]);
        // Al fallar, quiero mostrar un 404 con findOrFail()
    }

    /**
     * Muestra el formulario para crear una nueva entrada.
     *
     * @return \Illuminate\View\View
     */
    public function createForm() {
        return view('entries.create', [
            'categories' => Category::all(),
            'tags' => Tag::all()
        ]);
    }

    /**
     * Procesa la creación de una nueva entrada a partir de los datos proporcionados en el formulario
     *
     * @param \Illuminate\Http\Request $request Instancia de la clase request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function processCreate(Request $request) {
        try {
            // Validación de datos, nos redirecciona a la pagina anterior y guarda los datos del form + mensajes de error en una variable
            $request->validate(Entry::$rules, Entry::$errorMessages);
            // El segundo parametro es para pasar los mensajes de error para cada campo
            // Pido los datos del form de creación de entradas, hago una excepción con el token
            $data = $request->except(['_token']);

            if($request->hasFile('cover')){
                // Guardo la imagen en la carpeta de storage (public)
                // Actualizo los datos de cover con los valores que guardo en el storage
                $data['cover'] = $request->file('cover')->store('covers');
            }

            $authUser = auth()->user();
            $data['author'] = $authUser->name;

            DB::transaction(function() use ($data) {
                // Grabo los datos usando create() de eloquent
                /** @var Entry */
                $entry = Entry::create($data);
        
                // Asocio los tags a la entrada grabando en la tabla pivot los tags
                // attach() es un método de la relación belongsToMany
                $entry->tags()->attach($data['tags'] ?? []);
            });

                

            // Redirecciono al usuario a otro lado
            return redirect(
            )
                ->route('blog')
            // Flasheo una variable que imprima el resultado del formulario
                ->with('status.message', "La entrada: '" . e($request->input('title')) . "' se publicó exitosamente")
                ->with('status.type', 'success');

        } catch (\Exception $e){
            // Redirecciono al usuario a otro lado
            return redirect()
                    ->back()
                // Flasheo una variable que imprima el resultado del formulario
                    ->with('status.message', "La entrada no pudo ser publicada por un error: " . $e->getMessage())
                    ->with('status.type', 'error')
                    ->withInput();
        }
    }
    /**
     * Procesa la eliminación de una entrada. Si tiene imagen la elimina junto al archivo
     *
     * @param int $id ID de la entrada a eliminar
     * @return \Illuminate\Http\RedirectResponse
     */
    public function processDelete(int $id) {
        try {
            // Elimina la entrada si matchea con el id
            $entry = Entry::findOrFail($id);
        
            // Tengo que compartirle $entry que está en otro ámbito
            DB::transaction(function() use ($entry) {

                // Desasocio los tags
                $entry->tags()->detach();

                $entry->delete();

            });

            // Si existe una portada, la elimina junto a su archivo
            if($entry->cover && Storage::has($entry->cover)){
                Storage::delete($entry->cover);
            }

            return redirect()
                ->route('admin.entries')
                ->with('status.message', "La entrada '" . e($entry->title) . "' fue eliminada exitosamente")
                ->with('status.type', 'success');
    
        } catch (\Exception $e) {
           

            return redirect()
                ->back()
                ->with('status.message', "Error: La entrada '" . e($entry->title) . "' no pudo ser eliminada " .  $e->getMessage())
                >with('status.type', 'error');
        }
    }

    /**
     * Procesa la eliminación de una entrada. Si tiene imagen la elimina junto al archivo
     *
     * @param int $id ID de la entrada a eliminar
     * @return \Illuminate\Http\RedirectResponse
     */
    /*public function processDeleteTransaccionFormaManual(int $id) {
        try {
            // Inicio la transacción
            DB::beginTransaction();

            // Elimina la entrada si matchea con el id
            $entry = Entry::findOrFail($id);
        
            // Desasocio los tags
            $entry->tags()->detach();

            $entry->delete();

            // Si existe una portada, la elimina junto a su archivo
            if($entry->cover && Storage::has($entry->cover)){
                Storage::delete($entry->cover);
            }

            // Confirmamos la transacción, si llego hasta acá y no se rompió nada, continua
            DB::commit();

            return redirect()
                ->route('blog')
                ->with('status.message', "La entrada '" . e($entry->title) . "' fue eliminada exitosamente");
    
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('status.message', "Error: La entrada '" . e($entry->title) . "' no pudo ser eliminada");
        }
    }*/
    /**
     * Me retorna el formulario de edición y le paso dos variables, una instancia de la clase Entry según el id de la entrada y las categorias
     *
     * @param int $id El ID de la entrada que se va a editar.
     * @return \Illuminate\View\View
     */
    public function editForm(int $id) {
        return view('entries.edit', [
            'entry' => Entry::findOrFail($id),
            'categories' => Category::all(),
            'tags' => Tag::all()
        ]);
    }

    /**
     * Procesa la edición de entradas
     *
     * @param int $id ID de la entrada que se va a editar
     * @param Request $request La solicitud HTTP \Illuminate\Http\Request que contiene los datos de edición.
     * @return \Illuminate\Http\RedirectResponse Una redirección a la página del blog con un mensaje de éxito.
     */
    public function processEdit(int $id, Request $request) {
        try {
            // Busco la entrada por su id
            $entry = Entry::findOrFail($id);
            // Los datos los tengo guardados en las variables estáticas modelo Entry 
            $request->validate(Entry::$rules, Entry::$errorMessages);

            $data = $request->except('_token');
            $oldCover = null;
            
            if($request->hasFile('cover')){
                $data['cover'] = $request->file('cover')->store('covers');
                $oldCover = $entry->cover; // Guardo la portada vieja para luego eliminarla
            }

            $authUser = auth()->user();
            $data['author'] = $authUser->name;
            
            DB::transaction(function () use ($entry, $data) {
                $entry->update($data);
    
                // Edito los tags asociados a la entrada
                $entry->tags()->sync($data['tags'] ?? []);
                
            });

            // Si antes había un archivo cover, lo elimino por desuso
            if($oldCover && Storage::has($oldCover)) {
                Storage::delete($oldCover);
            }

            return redirect()
                ->route('blog')
                ->with('status.message', "La entrada '" . e($entry->title) . "' se ha editado existosamente")
                ->with('status.type', 'success');

        } catch (\Exception $e){
            return redirect()
            ->route('admin')
            ->with('status.message', "La entrada '" . e($entry->title) . "' no pudo ser editada por un error " .  $e->getMessage())
            ->with('status.type', 'error');
        }
    }

}
