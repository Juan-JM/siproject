<x-layouts.index 
    title="Roles" :route-create="route('roles.create')"
    tooltip="un rol" :headers="['Nombre','Descripción']" :data="$roles">
    @if ($roles)
    @foreach ($roles as $rol)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $rol->nombre }}</td>
        <td>{{ $rol->descripcion }}</td>
        <td>
            <div class="d-flex">
                <x-btn.edit :route="route('roles.edit', $rol)" />
                <x-btn.delete :route="route('roles.destroy', $rol)" :modal-id="$rol->id"/>
            </div>
        </td>
    </tr>
    @endforeach
    @else
    <tr>
        <td class="text-center">No hay roles registrados</td>
    </tr>
    @endif
</x-layouts.index>