<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $primaryKey = 'usuario_id';
    protected $fillable = [
        'nombre',
        'apellido',
        'telefono',
        'email',
        'direccion',
    ];
}
