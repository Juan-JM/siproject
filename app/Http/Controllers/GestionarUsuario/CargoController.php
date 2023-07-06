<?php

namespace App\Http\Controllers\GestionarUsuario;

use App\Http\Controllers\Controller;
use App\Http\Requests\GestionarUsuario\cargo\StoreCargoRequest;
use App\Http\Requests\GestionarUsuario\cargo\UpdateCargoRequest;
use App\Models\GestionarUsuario\Cargo;

class CargoController extends Controller
{
    public function index()
    {
        $cargos = Cargo::paginate(10);
        return view('gestion_usuarios.cargos.index',compact('cargos'));
    }

    public function create()
    {
        return view('gestion_usuarios.cargos.create');
    }

    public function store(StoreCargoRequest $request)
    {
        Cargo::create($request->validated());
        return redirect()->route('cargos.index')->with('success','Cargo agregado correctamente.');
    }

    public function edit(Cargo  $cargo)
    {
        return view('gestion_usuarios.cargos.edit',compact('cargo'));
    }

    public function update(UpdateCargoRequest $request, Cargo $cargo)
    {
        $cargo->update($request->validated());
        return redirect()->route('cargos.index')->with('success','Cargo actualizado correctamente.');
    }

    public function destroy(Cargo $cargo)
    {
        $cargo->delete();
        return redirect()->route('cargos.index')->with('success','Cargo eliminado correctamente.');
    }
}
