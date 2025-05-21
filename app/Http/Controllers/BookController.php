<?php

namespace App\Http\Controllers;

use App\Models\Book;
// use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
// TODO: preguntar al profesor si esta bien llamar a la tabla en lugar del modelo para el paginate porque no funciona con Book::all()->paginate(6);
use \Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function store() {

        // Traigo todos los registros de la tabla convertidos a clases del modelo
        // $books = Book::all();

    /*    return view('store/store', [
            'books' => $books
        ]);
    */
        return view('store/store', [
            'books' => DB::table('books')->paginate(4)
        ]);
    }
}
