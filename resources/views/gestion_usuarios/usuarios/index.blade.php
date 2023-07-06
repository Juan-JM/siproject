<x-layouts.index title="Usuarios" :route-create="route('usuarios.create')" tooltip="un usuario" :headers="['Nombre de usuario', 'Rol', 'Nombres', 'Apellidos','Cargo']" :data="$usuarios">
  @if ($usuarios)
  @foreach ($usuarios as $usuario)
  <tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $usuario->nombre }}</td>
    <td>{{ $usuario->Rol->nombre }}</td>
    <td>{{ $usuario->Personal->nombres }}</td>
    <td>{{ $usuario->Personal->apellidos }}</td>
    <td>{{ $usuario->Personal->Cargo->nombre }}</td>
    <td>
      <div class="d-flex">
        <x-btn.edit :route="route('usuarios.edit', $usuario)" />
        <x-btn.delete :route="route('usuarios.destroy', $usuario)" :modal-id="$usuario->id"/>
      </div>
    </td>
  </tr>
  @endforeach
  @else
  <tr>
    <td class="text-center">No hay usuarios registrados</td>
  </tr>
  @endif
</x-layouts.index> 
