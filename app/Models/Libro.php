<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    protected $table = 'libros';

    protected $fillable = [
        'user_id',
        'padre_solicita',
        'menor_solicita',
        'curso',
        'donado_libros',
        'tapa_libros',
        'poner_nombre',
        'no_subrayado',
        'reemplazar',
        'devolver',
        'declaracion_leida',
        'conforme',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}