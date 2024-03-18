<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosPromociones extends Model
{
    use HasFactory;
    protected $fillable = [
        'celular_dato_promocion',
        'dni_dato_promocion',
        'created_at',
    ];
}
