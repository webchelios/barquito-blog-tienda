<?php

namespace App\Http\Controllers;

// Heredo el controller base como requisito para el patrón de diseño MVC y poder manejar los pedidos del usuario
// Guardo los métodos de las rutas
class HomeController extends Controller
{
    public function index() {
        return view('home');
    }

    // public function blog(){
    //     return view('blog');
    // }
    
    // public function store(){
    //     return view('store');
    // }

    public function admin() {
        return view('admin');
    }
}