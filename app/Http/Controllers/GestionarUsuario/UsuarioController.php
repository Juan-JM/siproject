<?php

namespace App\Http\Controllers\GestionarUsuario;

use App\Models\GestionarUsuario\Usuario;
use App\Http\Controllers\Controller;
use App\Http\Requests\GestionarUsuario\usuario\StoreUsuarioRequest;
use App\Http\Requests\GestionarUsuario\usuario\UpdateUsuarioRequest;
use App\Models\GestionarUsuario\Personal;
use App\Models\GestionarUsuario\Rol;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::paginate(10);
        return view('gestion_usuarios.usuarios.index', compact('usuarios'));
    }
    
    public function create()
    {
        $roles = Rol::all();
        $empleados = Personal::all();
        return view('gestion_usuarios.usuarios.create', compact('roles', 'empleados'));
    }

    public function store(StoreUsuarioRequest $request)
    {
        $dataValidated = $request->validated();
        $dataValidated['clave'] = Hash::make($dataValidated['clave']);
        Usuario::create($dataValidated);
        return redirect()->route('usuarios.index')->with('message','Usuario agregado correctamente');
    }

    public function edit(Usuario $usuario)
    {
        $roles = Rol::all();
        $empleados = Personal::all();
        return view('gestion_usuarios.usuarios.edit', compact('usuario', 'roles', 'empleados'));
    }

    public function update(UpdateUsuarioRequest $request, Usuario $usuario)
    {
        $dataValidated = $request->validated();
        $dataValidated['clave'] = Hash::make($dataValidated['clave']);
        $usuario->update($dataValidated);
        return redirect()->route('usuarios.index')->with('message','Usuario actualizado correctamente');
    }

    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuarios.index')->with('message','Usuario eliminado correctamente');
    }
}
