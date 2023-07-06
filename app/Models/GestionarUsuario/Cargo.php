<?php

namespace App\Models\GestionarUsuario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    protected $table = 'cargo';
    public $timestamps = false;

    protected $fillable = [
        'nombre'
    ];
}
