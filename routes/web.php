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

Route::get('/blog/entradas', [ \App\Http\Controllers\EntryController::class , 'index' ]);

