<?php

namespace App\Http\Controllers\GestionarUsuario;

use App\Models\GestionarUsuario\Rol;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRolRequest;
use App\Http\Requests\UpdateRolRequest;

class RolController extends Controller
{
    public function index()
    {
        $roles = Rol::paginate(10);
        return view('gestion_usuarios.roles.index', compact('roles'));
    }

    public function create()
    {
        //
    }

    public function store(StoreRolRequest $request)
    {
        //
    }

    public function show(Rol $rol)
    {
        //
    }

    public function edit(Rol $rol)
    {
        //
    }

    public function update(UpdateRolRequest $request, Rol $rol)
    {
        //
    }

    public function destroy(Rol $rol)
    {
        //
    }
}
