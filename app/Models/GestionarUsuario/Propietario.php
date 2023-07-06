<?php

namespace App\Models\GestionarUsuario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Propietario extends Model
{
    use HasFactory;

    protected $table = 'propietario';
    protected $primaryKey = 'ci';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'ci',
        'nombre',
        'correo',
        'telefono',
    ];

    function hoteles() {
        return DB::select('SELECT hotel.* FROM propietario_hotel, hotel, propietario WHERE ci_propietario = ? and id_hotel = hotel.id', [$this->ci]);
    }
}
