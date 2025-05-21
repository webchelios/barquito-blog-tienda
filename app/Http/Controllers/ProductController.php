<?php
// Creado a partir del asistente artisan:
// $ php artisan make:controller ProductController

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function we() {
        return view('we');
    }
}
