<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    // mapeo
    // 1- (opcional) indicar nombre de tabla
    // protected $table = "entries";
    // 2- indicar nombre de la clave primaria
    protected $primaryKey = "entry_id";
}
