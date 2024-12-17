<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;

    protected $table = 'autores'; // Nombre de la tabla

    // Definir los campos
    protected $fillable = [
        'nombre',
        'apellido',
        'biografia',
    ];

    // Relacion: Un autor tiene muchos libros
    public function libros()
    {
        return $this->hasMany(Libro::class, 'id_autor');
    }
} 
