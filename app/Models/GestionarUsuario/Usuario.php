<?php

namespace App\Models\GestionarUsuario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use HasFactory;

    protected $table = 'usuario';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'contrasenia',
        'id_rol',
        'ci_personal'
    ];

    protected $hidden = [
        'contrasenia',
        'remember_token',
    ];
    
    public function Rol() 
    {
        return $this->belongsTo(Rol::class, 'id_rol');
    }

    public function Personal() 
    {
        return $this->belongsTo(Personal::class, 'ci_personal');
    }

    public function getAuthPassword()
    {
        return $this->contrasenia;
    }

    // public function getRememberTokenName()
    // {
    //     return 'token_recordar';
    // }
}
