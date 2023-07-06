<?php

namespace App\Models\GestionarUsuario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    protected $table = 'personal';
    protected $primaryKey = 'ci';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'ci',
        'nombres',
        'apellidos',
        'telefono',
        'correo',
        'sexo',
        'domicilio',
        'id_cargo'
    ];

    function Cargo() {
        return $this->belongsTo(Cargo::class, 'id_cargo');
    }
}
