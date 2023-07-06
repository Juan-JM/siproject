<?php

namespace App\Http\Controllers\GestionarUsuario;

use App\Http\Controllers\Controller;
use App\Http\Requests\GestionarUsuario\personal\StorePersonalRequest;
use App\Http\Requests\GestionarUsuario\personal\UpdatePersonalRequest;
use App\Models\GestionarUsuario\Cargo;
use App\Models\GestionarUsuario\Personal;

class PersonalController extends Controller
{
    public function index()
    {
        $empleados = Personal::paginate(10);
        return view('gestion_usuarios.personal.index',compact('empleados'));
    }

    public function create()
    {
        $cargos = Cargo::all();
        return view('gestion_usuarios.personal.create',compact('cargos'));
    }

    public function store(StorePersonalRequest $request)
    {
        Personal::create($request->validated());
        return redirect()->route('personal.index')->with('success','Personal agregado correctamente');
    }

    public function edit(Personal $personal)
    {
        $cargos = Cargo::all();
        return view('gestion_usuarios.personal.edit',compact('personal','cargos'));
    }

    public function update(UpdatePersonalRequest $request, Personal $personal)
    {
        $personal->update($request->validated());
        return redirect()->route('personal.index')->with('message','Personal actualizado correctamente');
    }

    public function destroy(Personal $personal)
    {
        $personal->delete();
        return redirect()->route('personal.index')->with('success','Personal eliminado correctamente');
    }
}
