<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Registro las rutas:
//Quiero que haga un get a la raiz de public para retornar la vista "home.blade". Para eso utilizo el verbo GET
//Por el patrón MVC debo pasar un array de dos posiciones para indicar el controller(clase que sigue el patron MVC) y el método view() que retorna la vista 
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');

Route::get('/blog', [\App\Http\Controllers\EntryController::class, 'blog'])
    ->name('blog');

// Rutas de Autenticación
Route::get('/registrarse', [\App\Http\Controllers\AuthController::class, 'formRegister'])
    ->name('auth.form.register');

Route::post('/registrarse', [\App\Http\Controllers\AuthController::class, 'processRegister'])
    ->name('auth.process.register');

Route::get('/iniciar-sesion', [\App\Http\Controllers\AuthController::class, 'formLogin'])
    ->name('auth.form.login');

Route::post('/iniciar-sesion', [\App\Http\Controllers\AuthController::class, 'processLogin'])
    ->name('auth.process.login');

Route::post('/cerrar-sesion', [\App\Http\Controllers\AuthController::class, 'processLogout'])
    ->name('auth.process.logout')
    ->middleware('auth');

// Para el alta, baja y modificación vamos a requerir que el usuario se loguee con sus credenciales
Route::get('/blog/nueva', [\App\Http\Controllers\EntryController::class, 'createForm'])
    ->name('blog.form.create')
    ->middleware('auth');

Route::post('/blog/nueva', [\App\Http\Controllers\EntryController::class, 'processCreate'])
    ->name('blog.process.create')
    ->middleware('auth');

// Ruta dinámica a una entrada específica, debo ponerla debajo para validar, lo que no es dinamico va arriba (para ver no se requiere autenticación)
Route::get('/blog/{id}', [\App\Http\Controllers\EntryController::class, 'view'])
    ->name('blog.view')
    ->whereNumber('id') // con esto id debe ser especificamente un numero
    ->middleware('is-premium'); // Defino el area del middleware en app\http\kernel

Route::get('/blog/{id}/verificar-cuenta', [\App\Http\Controllers\IsPremiumVerificationController::class, 'formIsPremium'])
    ->whereNumber('id')
    ->name('entries.ispremium-verification.form');
    
Route::post('/blog/{id}/verificar-cuenta', [\App\Http\Controllers\IsPremiumVerificationController::class, 'processIsPremium'])
    ->whereNumber('id')
    ->name('entries.ispremium-verification.process');

Route::get('/blog/{id}/editar', [\App\Http\Controllers\EntryController::class, 'editForm'])
    ->name('blog.form.edit')
    ->whereNumber('id')
    ->middleware('auth');

Route::post('/blog/{id}/editar', [\App\Http\Controllers\EntryController::class, 'processEdit'])
    ->name('blog.process.edit')
    ->whereNumber('id')
    ->middleware('auth');

Route::post('/blog/{id}/eliminar', [\App\Http\Controllers\EntryController::class, 'processDelete'])
    ->name('blog.process.delete')
    ->whereNumber('id')
    ->middleware('auth');

Route::get('/nosotros', [\App\Http\Controllers\ProductController::class, 'we'])
    ->name('we');

Route::get('/administrador', [\App\Http\Controllers\AdminController::class, 'index'])
    ->name('admin')
    ->middleware('auth');

Route::get('/administrador/entradas', [\App\Http\Controllers\AdminEntriesController::class, 'index'])
    ->name('admin.entries')
    ->middleware('auth');

Route::get('/administrador/usuarios', [\App\Http\Controllers\AdminUserController::class, 'index'])
    ->name('admin.users')
    ->middleware('auth');

Route::get('/tienda', [\App\Http\Controllers\BookController::class, 'store'])
    ->name('store.view');