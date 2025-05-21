<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

// ORM
/**
 * App\Models\Entry
 *
 * @property int $entry_id
 * @property string $title
 * @property string $cover
 * @property string $text
 * @property string $author
 * @property string $category
 * @property string|null $comments
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Entry newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Entry newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Entry query()
 * @method static \Illuminate\Database\Eloquent\Builder|Entry whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entry whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entry whereComments($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entry whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entry whereEntryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entry whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entry whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entry whereUpdatedAt($value)
 * @property int $category_id
 * @property string|null $cover_description
 * @method static \Illuminate\Database\Eloquent\Builder|Entry whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entry whereCover($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entry whereCoverDescription($value)
 * @mixin \Eloquent
 */
class Entry extends Model
{
    // Indico el nombre de la tabla 'Entry' => 'entries'
    protected $table = 'entries';

    // Indico el nombre de la clave primaria
    protected $primaryKey = 'entry_id';
    
    // Campos que acepto asignar masivamente
    protected $fillable = ['title', 'text', 'author', 'category_id', 'cover', 'cover_description'];

    // Métodos estaticos de validación
    public static $rules = [
        'title' => 'required|min:4',
        'text' => 'required|min:10',
        // 'author' => 'required|min:1',
        'category_id' => 'required|exists:categories',
    ];

    public static $errorMessages = [
        'title.required' => 'El título no debe estar vacío',
        'title.min' => 'El título debe ser más largo',
        'text.required' => 'La entrada debe contener texto',
        'text.min' => 'El texto debe ser más extenso',
        // 'author.required' => 'El autor no puede ser anónimo',
        // 'author.min' => 'El nombre de autor debe ser más largo',
        'category_id.required' => 'La entrada debe estar en alguna categoría',
        'category_id.exists' => 'La categoría debe ser válida'
    ];
    /* 
    RELACIONES
    Necesito crear un método que retorne el tipo de la relación
    El nombre del método es el nombre de la relación
    Retorna el tipo de la relación (entrada pertenece a categoria)
    */
    public function category(): BelongsTo {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }

    // Acceder a los tags
    // BelongsToMany permite definir una relación de n:n
    public function tags(): BelongsToMany {
        return $this->belongsToMany(
            Tag::class,
            'entries_have_tags',
            'entry_id','tag_id',
            'entry_id','tag_id'
        );
    }
}
