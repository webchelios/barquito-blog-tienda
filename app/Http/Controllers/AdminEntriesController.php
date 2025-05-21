<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entry;
use App\Models\Category;

class AdminEntriesController extends Controller
{
    // public function index() {
    //     return view('admin/index');
    // }
    public function index() {
        $entries = Entry::with('category')->get();
        // Envio los valores de $entries a la view
        return view('admin/index', [
            'entries' => $entries,
        ]);

    }
}
