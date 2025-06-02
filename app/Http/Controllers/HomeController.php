<?php

namespace App\Http\Controllers;

class HomeController extends Controller {
    public function index() {
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function blog() {
        return view('blog');
    }
}