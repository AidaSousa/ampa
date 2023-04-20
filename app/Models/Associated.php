<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Associated extends Model
{
    use HasFactory;

    protected $table = 'associated';

    protected $fillable = [
        'user_id',
        'situacion',
        'email_comunicacion_directa',
        'beca_comedor',
        'name_padre_madre',
        'surname_padre_madre',
        'dni',
        'telefono',
        'direccion',
        'colaboracion_ampa',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
