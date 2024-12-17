<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    protected $table = 'libros'; // Nombre de la tabla

    // Definir los campos
    protected $fillable = [
        'titulo',
        'autor_id',
        'estado',
        'fecha_publicacion',
        'descripcion',
    ];

    // Relacion: Un libro pertenece a un autor
    public function autor()
    {
        return $this->belongsTo(Autor::class, 'id_autor');
    }

    // Relacion: Un libro puede estar en varios prestamos
    public function prestamos()
    {
        return $this->hasMany(Prestamo::class, 'id_libro');
    }
} 
