<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;

    protected $table = 'prestamos'; // Nombre de la tabla

    // Definir los campos
    protected $fillable = [
        'cliente_id',
        'libro_id',
        'estado',
        'fecha_prestamo',
        'fecha_devolucion',
    ];

    // Relación: Un prestamo pertenece a un cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    // Relación: Un prestamo pertenece a un libro
    public function libro()
    {
        return $this->belongsTo(Libro::class, 'libro_id');
    }
}