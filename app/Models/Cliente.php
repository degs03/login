<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes'; // Nombre de la tabla

    // Definir los campos
    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'telefono',
        'direccion',
    ];

    // Relacion: Un cliente puede tener muchos prestamos
    public function prestamos()
    {
        return $this->hasMany(Prestamo::class, 'id_autor');
    }
} 
