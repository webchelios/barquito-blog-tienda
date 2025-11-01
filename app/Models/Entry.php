<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; 

class Entry extends Model
{
    // mapeo con Eloquent
    // 1- (opcional) indicar nombre de tabla
    // protected $table = "entries";
    
    // 2- indicar nombre de la clave primaria
    protected $primaryKey = "entry_id";

    // Datos que permito grabar masivamente
    protected $fillable = ['title', 'category_id', 'content', 'author', 'cover', 'cover_description'];

    public static $rules = [
        'title' => 'required|min:2',
        'category_id' => 'required|exists:categories',
        'content' => 'required|min:2',
        'author' => 'required|min:2',
        'cover' => 'min:2',
    ];
    
    public static $messages = [
        'title.required' => 'El título no debe estar vacío',
        'title.min' => 'El título debe tener un mínimo de dos caracteres',
        'category_id.required' => 'La categoría no debe estar vacía',
        'category_id.exists' => 'La categoría seleccionada no existe',
        'content.required' => 'El contenido no debe estar vacío',
        'content.min' => 'El contenido debe tener un mínimo de dos caracteres',
        'author.required' => 'El autor no debe estar vacío',
        'author.min' => 'El autor debe tener un mínimo de dos caracteres',
        //'cover.required' => 'La portada no debe estar vacía',
        'cover.min' => 'El archivo de portada debe tener mas de dos caracteres',
    ];

    // Relaciones
    // BelongsTo => 1. FQN
    // => 2. foreignKey
    // => 3. ownerKey
    public function category(): BelongsTo {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }
            
}
