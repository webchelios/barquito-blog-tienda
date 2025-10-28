<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    // mapeo con Eloquent
    // 1- (opcional) indicar nombre de tabla
    // protected $table = "entries";
    
    // 2- indicar nombre de la clave primaria
    protected $primaryKey = "entry_id";

    // Datos que permito grabar masivamente
    protected $fillable = ['title', 'category', 'content', 'author', 'cover'];

    public static $rules = [
        'title' => 'required|min:2',
        'category' => 'required|min:2',
        'content' => 'required|min:2',
        'author' => 'required|min:2',
        'cover' => 'min:2',
    ];
    
    public static $messages = [
        'title.required' => 'El título no debe estar vacío',
        'title.min' => 'El título debe tener un mínimo de 2 caracteres',
        'category.required' => 'La categoría no debe estar vacía',
        'category.min' => 'La categoría debe tener un mínimo de 2 caracteres',
        'content.required' => 'El contenido no debe estar vacío',
        'content.min' => 'El contenido debe tener un mínimo de 2 caracteres',
        'author.required' => 'El autor no debe estar vacío',
        'author.min' => 'El autor debe tener un mínimo de 2 caracteres',
        //'cover.required' => 'La portada no debe estar vacía',
        'cover.min' => 'La portada debe tener un mínimo de 2 caracteres',
    ];
}
