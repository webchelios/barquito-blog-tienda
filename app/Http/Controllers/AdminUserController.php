<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;

class AdminUserController extends Controller
{
    public function index() {
        $users = User::with('books')->get();
        // Envio los valores de $entries a la view
        return view('admin/users', [
            'users' => $users,
        ]);

    }
}
