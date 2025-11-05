<?php

use Illuminate\Support\Facades\Route;
// Los $middlewareAliases en kernel.php NO FUNCIONAN en mi proyecto, en la documentación hace un paso previo
// a usar el alias trayendo Authenticate
use App\Http\Middleware\Authenticate;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// controllers como métodos de rutas
// callable => [ nombre completo "FQN" , Nombre del método del controller ]
// ( ::class transforma FQN a string y me da autocompletado )
Route::get('/', [ \App\Http\Controllers\HomeController::class , 'index' ])
    ->name('home');

Route::get('/quienes-somos', [ \App\Http\Controllers\HomeController::class , 'about' ])
    ->name('about');

// Autenticación
Route::get('/iniciar-sesion', [\App\Http\Controllers\AuthController::class, 'loginForm'])
    ->name('auth.login.form');
Route::post('/iniciar-sesion', [\App\Http\Controllers\AuthController::class, 'loginProcess'])
    ->name('auth.login.process');
Route::post('/cerrar-sesion', [\App\Http\Controllers\AuthController::class, 'logoutProcess'])
    ->name('auth.logout.process');

Route::get('/blog/entradas', [ \App\Http\Controllers\EntryController::class , 'index' ])
    ->name('entries.index');
Route::get('/blog/entradas/{id}', [ \App\Http\Controllers\EntryController::class , 'view' ])
    ->whereNumber('id')
    ->name('entries.view');

Route::get('/blog/entradas/nueva', [ \App\Http\Controllers\EntryController::class , 'createForm' ])
    ->middleware(Authenticate::class)
    ->name('entries.create.form');
Route::post('/blog/entradas/nueva', [ \App\Http\Controllers\EntryController::class , 'createProcess' ])
    ->middleware(Authenticate::class)
    ->name('entries.create.process');

Route::get('/blog/entradas/{id}/eliminar', [ \App\Http\Controllers\EntryController::class, 'deleteForm' ])
    ->middleware(Authenticate::class)
    ->name('entries.delete.form');
Route::post('/blog/entradas/{id}/eliminar', [ \App\Http\Controllers\EntryController::class, 'deleteProcess' ])
    ->middleware(Authenticate::class)
    ->name('entries.delete.process');

Route::get('/blog/entradas/{id}/editar', [ \App\Http\Controllers\EntryController::class, 'editForm' ])
    ->middleware(Authenticate::class)
    ->name('entries.edit.form');
Route::post('/blog/entradas/{id}/editar', [ \App\Http\Controllers\EntryController::class, 'editProcess' ])
    ->middleware(Authenticate::class)
    ->name('entries.edit.process');

Route::get('/admin', function() {
    return view('admin.index');
});

Route::get('/admin/entradas', [\App\Http\Controllers\AdminEntryController::class, 'index' ]);