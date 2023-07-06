<?php

namespace App\Http\Controllers\GestionarUsuario;

use App\Http\Controllers\Controller;
use App\Models\GestionarUsuario\Propietario;
use App\Http\Requests\GestionarUsuario\propietario\StorePropietarioRequest;
use App\Http\Requests\GestionarUsuario\propietario\UpdatePropietarioRequest;

class PropietarioController extends Controller
{
    public function index()
    {
        $propietarios = Propietario::paginate(10);
        return view('gestion_usuarios.propietarios.index', compact('propietarios'));
    }

    public function create()
    {
        return view('gestion_usuarios.propietarios.create');
    }

    public function store(StorePropietarioRequest $request)
    {
        Propietario::create($request->validated());
        return redirect()->route('propietarios.index')->with('message','Propietario agregado correctamente');
    }

    public function edit(Propietario $propietario)
    {
        return view('gestion_usuarios.propietarios.edit', compact('propietario'));
    }

    public function update(UpdatePropietarioRequest $request, Propietario $propietario)
    {
        $propietario->update($request->validated());
        return redirect()->route('propietarios.index')->with('message','Propietario actualizado correctamente');
    }

    public function destroy(Propietario $propietario)
    {
        $propietario->delete();
        return redirect()->route('propietarios.index')->with('message','Propietario eliminado correctamente');
    }
}
