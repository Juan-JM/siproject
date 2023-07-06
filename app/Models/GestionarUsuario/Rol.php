<?php

namespace App\Models\GestionarUsuario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    protected $table = 'rol';
    public $timestamps = false;

    public function usuarios() 
    {
        return $this->hasMany(Usuario::class, 'id_rol');
    }
}
