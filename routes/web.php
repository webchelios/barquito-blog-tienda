<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', [ \App\Http\Controllers\HomeController::class , 'index' ]);

Route::get('/quienes-somos', [ \App\Http\Controllers\HomeController::class , 'about' ]);

// Autenticación
Route::get('/iniciar-sesion', [\App\Http\Controllers\AuthController::class, 'loginForm']);
Route::post('/iniciar-sesion', [\App\Http\Controllers\AuthController::class, 'loginProcess']);
Route::post('/cerrar-sesion', [\App\Http\Controllers\AuthController::class, 'logoutProcess']);

Route::get('/blog/entradas', [ \App\Http\Controllers\EntryController::class , 'index' ]);
Route::get('/blog/entradas/{id}', [ \App\Http\Controllers\EntryController::class , 'view' ])->whereNumber('id');
Route::get('/blog/entradas/nueva', [ \App\Http\Controllers\EntryController::class , 'createForm' ])
    ->middleware(['auth']);
Route::post('/blog/entradas/nueva', [ \App\Http\Controllers\EntryController::class , 'createProcess' ])
    ->middleware(['auth']);

Route::get('/blog/entradas/{id}/eliminar', [ \App\Http\Controllers\EntryController::class, 'deleteForm' ])
    ->middleware(['auth']);;
Route::post('/blog/entradas/{id}/eliminar', [ \App\Http\Controllers\EntryController::class, 'deleteProcess' ])
    ->middleware(['auth']);;

Route::get('/blog/entradas/{id}/editar', [ \App\Http\Controllers\EntryController::class, 'editForm' ])
    ->middleware(['auth']);;
Route::post('/blog/entradas/{id}/editar', [ \App\Http\Controllers\EntryController::class, 'editProcess' ])
    ->middleware(['auth']);;

Route::get('/admin', function() {
    return view('admin.index');
});

Route::get('/admin/entradas', [\App\Http\Controllers\AdminEntryController::class, 'index' ]);